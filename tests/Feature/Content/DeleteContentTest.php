<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Content;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Testing\File;
use Illuminate\Http\UploadedFile;

class DeleteContentTest extends TestCase
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

    protected function fakeContent($id){
        $contentData = [
            'id' => $id,
            'title' => 'Título do Content',
            'text' => 'Texto do content',
            'user_id' => 1
        ];
        $imagePath = 'D:\cat.jpeg';
        $contentData['photo'] = UploadedFile::fake()->create($imagePath);
        return $contentData;
    }

    public function test_delete_content_acting_as_admin(){
        $user = $this->fakeUserCreate(1, 3, "admin@gmail.com");
        $this->actingAs($user);
    
        $response = $this->post('/contents', $this->fakeContent(5));

        $response = $this->delete('/contents', 5);
        $response->assertStatus(302);
    }

    public function test_delete_content_acting_as_teacher(){
        $user = $this->fakeUserCreate(2, 2, "hugo@gmail.com");
        $this->actingAs($user);
    
        $response = $this->post('/contents', $this->fakeContent(4));

        $response = $this->delete('/contents', 4);
        $response->assertStatus(302);
    }
    
    public function test_delete_content_acting_as_student(){
        $user = $this->fakeUserCreate(3, 1, "glau@gmail.com");
        $this->actingAs($user);

        $response = $this->post('/contents', $this->fakeContent(3));

        $response = $this->delete('/contents', 3);
        $response->assertStatus(302);
    }
}
