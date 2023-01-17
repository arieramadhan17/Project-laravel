<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Arie Ramadhan',
            'email' => 'ariearamadhan@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Annisa Syam',
            'email' => 'annisasyam@gmail.com',
            'password' => bcrypt('123456')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam culpa omnis quidem quibusdam accusantium ut consequatur incidunt, ab dignissimos, repudiandae numquam debitis iusto quis laborum vero aliquid quod! Ab, velit.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam culpa omnis quidem quibusdam accusantium ut consequatur incidunt, ab dignissimos, repudiandae numquam debitis iusto quis laborum vero aliquid quod! Ab, velit.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam culpa omnis quidem quibusdam accusantium ut consequatur incidunt, ab dignissimos, repudiandae numquam debitis iusto quis laborum vero aliquid quod! Ab, velit.',
            'category_id' => 2,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam culpa omnis quidem quibusdam accusantium ut consequatur incidunt, ab dignissimos, repudiandae numquam debitis iusto quis laborum vero aliquid quod! Ab, velit.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
