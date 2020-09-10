<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PhpParser\Builder\Class_;
use Tests\TestCase;
use App\Models\Post;
use App\Models\Comment;
use App\User;

class DatabaseTest extends TestCase
{
    //use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
 //     $user= factory(User::class)->create();
//$comment= factory(Comment::class)->create();
//$comment= factory(Comment::class , 20)->create();
        $post = factory(Post::class,20)->create();

        $response->assertStatus(200);
    }
}
