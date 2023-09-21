<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Content;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Testing\File;
use Illuminate\Http\UploadedFile;

class EditContentTest extends TestCase
{
    protected function fakeUserCreate($id, $type, $email){
        $user = User::factory()->create([
            'id' => $id,
            'email' => $email,
            'userType' => $type,
            'password' => "fake",
            'date' => "2023-09-15 12:11:10"
        ]);
        return $user;
    }

    protected function fakeContent($id, $userId){
        $contentData = [
            'id' => $id,
            'title' => 'Título do Content',
            'text' => 'Texto do content',
            'user_id' => $userId
        ];
        $imagePath = 'D:\raleu.png';
        $contentData['photo'] = UploadedFile::fake()->create($imagePath);
        return $contentData;
    }

    public function test_edit_content_acting_as_admin(){
        $user = $this->fakeUserCreate(10, 3, "admin3@gmail.com");
        $this->actingAs($user);
    
        $response = $this->post('/contents', $this->fakeContent(12, 15));
        $novoConteudo= [
            'title' => "titulo novo",
            'text' => "texto novo"
        ];
        $response = $this->put('/contents/12', $novoConteudo);
        $response->assertStatus(302);
    }

    public function test_delete_content_acting_as_teacher(){
        $user = $this->fakeUserCreate(11, 2, "hugo3@gmail.com");
        $this->actingAs($user);
    
        $response = $this->post('/contents', $this->fakeContent(4, 16));
        $novoConteudo= [
            'title' => "titulo novo",
            'text' => "texto novo"
        ];
        $response = $this->put('/contents/4', $novoConteudo);
        $response->assertStatus(302);
    }
    
    public function test_delete_content_acting_as_student(){
        $user = $this->fakeUserCreate(12, 1, "bia@gmail.com");
        $this->actingAs($user);
        $novoConteudo= [
            'title' => "titulo novo",
            'text' => "texto novo"
        ];
        $response = $this->put('/contents/4', $novoConteudo);
        $response->assertStatus(403);
    }
}
