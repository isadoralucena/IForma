<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Content;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Testing\File;
use Illuminate\Http\UploadedFile;

class ShowContentTest extends TestCase
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

    public function test_show_content_acting_as_admin(){
        $user = $this->fakeUserCreate(7, 3, "admin2@gmail.com");
        $this->actingAs($user);
    
        $response = $this->post('/contents', $this->fakeContent(13));

        $response = $this->get('/contents/13');
        $response->assertStatus(200);
    }

    public function test_show_content_acting_as_teacher(){
        $user = $this->fakeUserCreate(8, 2, "hugo2@gmail.com");
        $this->actingAs($user);
    
        $response = $this->post('/contents', $this->fakeContent(14));

        $response = $this->get('/contents/14');
        $response->assertStatus(200);
    }
    
    public function test_show_content_acting_as_student(){
        $user = $this->fakeUserCreate(9, 1, "mai@gmail.com");
        $this->actingAs($user);

        $response = $this->get('/contents/14');
        $response->assertStatus(200);
    }
}
