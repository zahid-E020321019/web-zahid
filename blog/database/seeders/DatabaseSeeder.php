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
                'name' => 'Laily Ihya Khaitami',
                'email' => 'lailyihyakhaitami@gmail.com',
                'password' => bcrypt ('12345')
            ]);

            User::create([
                'name' => 'Laily Ihya',
                'email' => 'lailyihya@gmail.com',
                'password' => bcrypt ('12345')
            ]);

            Category::create([
                'name' => 'Web Programing',
                'slug' => 'web-programing',
            ]);

            Category::create([
                'name' => 'Personal',
                'slug' => 'personal',
            ]);

            Post::create([
                'title' => 'Judul Pertama',
                'slug' => 'judul-pertama',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe in modi deleniti distinctio magni minima, ipsum porro quisquam ad enim, sint blanditiis! Provident pariatur tempora, ea aspernatur possimus harum placeat commodi quibusdam, nihil at velit aliquam cumque dolore asperiores eligendi cum ab officia. Quo voluptate laboriosam voluptas, quod omnis aperiam voluptatum ipsam eius reiciendis officia molestiae et dicta rerum provident odit dolorum earum, autem doloribus nobis! Animi quibusdam neque, unde voluptates ipsam voluptate quae assumenda, vero eum, atque non accusamus debitis deleniti. Sunt ipsam incidunt repellendus ratione debitis corporis voluptates delectus assumenda nesciunt voluptatum. Porro possimus nisi provident obcaecati saepe?',
                'category_id' => 1,
                'user_id' => 1
            ]);

            Post::create([
                'title' => 'Judul Ke Dua',
                'slug' => 'judul-ke dua',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe in modi deleniti distinctio magni minima, ipsum porro quisquam ad enim, sint blanditiis! Provident pariatur tempora, ea aspernatur possimus harum placeat commodi quibusdam, nihil at velit aliquam cumque dolore asperiores eligendi cum ab officia. Quo voluptate laboriosam voluptas, quod omnis aperiam voluptatum ipsam eius reiciendis officia molestiae et dicta rerum provident odit dolorum earum, autem doloribus nobis! Animi quibusdam neque, unde voluptates ipsam voluptate quae assumenda, vero eum, atque non accusamus debitis deleniti. Sunt ipsam incidunt repellendus ratione debitis corporis voluptates delectus assumenda nesciunt voluptatum. Porro possimus nisi provident obcaecati saepe?',
                'category_id' => 1,
                'user_id' => 1
            ]);

            Post::create([
                'title' => 'Judul Ke Tiga',
                'slug' => 'judul-ke tiga',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe in modi deleniti distinctio magni minima, ipsum porro quisquam ad enim, sint blanditiis! Provident pariatur tempora, ea aspernatur possimus harum placeat commodi quibusdam, nihil at velit aliquam cumque dolore asperiores eligendi cum ab officia. Quo voluptate laboriosam voluptas, quod omnis aperiam voluptatum ipsam eius reiciendis officia molestiae et dicta rerum provident odit dolorum earum, autem doloribus nobis! Animi quibusdam neque, unde voluptates ipsam voluptate quae assumenda, vero eum, atque non accusamus debitis deleniti. Sunt ipsam incidunt repellendus ratione debitis corporis voluptates delectus assumenda nesciunt voluptatum. Porro possimus nisi provident obcaecati saepe?',
                'category_id' => 2,
                'user_id' => 1
            ]);

            Post::create([
                'title' => 'Judul Ke Empat',
                'slug' => 'judul-ke empat',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe in modi deleniti distinctio magni minima, ipsum porro quisquam ad enim, sint blanditiis! Provident pariatur tempora, ea aspernatur possimus harum placeat commodi quibusdam, nihil at velit aliquam cumque dolore asperiores eligendi cum ab officia. Quo voluptate laboriosam voluptas, quod omnis aperiam voluptatum ipsam eius reiciendis officia molestiae et dicta rerum provident odit dolorum earum, autem doloribus nobis! Animi quibusdam neque, unde voluptates ipsam voluptate quae assumenda, vero eum, atque non accusamus debitis deleniti. Sunt ipsam incidunt repellendus ratione debitis corporis voluptates delectus assumenda nesciunt voluptatum. Porro possimus nisi provident obcaecati saepe?',
                'category_id' => 2,
                'user_id' => 2
            ]);


    }
}
