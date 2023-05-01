<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Zahid Ramadhan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque veniam magni rerum dicta quasi illum dolores quidem quod obcaecati, doloribus voluptate laborum possimus fuga eligendi repellendus repudiandae iusto provident nihil, soluta laudantium inventore, tempore excepturi fugit dolore? Illo quae suscipit voluptatibus ea odit nemo accusantium odio corporis aperiam placeat reprehenderit tenetur dolores perferendis deserunt eligendi saepe, aliquam repudiandae voluptate ab? Voluptatum, pariatur nam. Odit veritatis optio repellat nam, iusto explicabo nulla aliquam possimus atque vero magnam, sint repellendus voluptas obcaecati.
            "
        ],
        [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "panglima batur",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum minima dolore suscipit ut odit doloremque obcaecati totam, provident, ratione blanditiis distinctio repudiandae debitis ab nisi aliquid doloribus quasi amet neque optio tempora? Officia impedit quisquam perferendis, quibusdam quis laboriosam iure voluptate ratione, qui illum inventore dolorum explicabo? Sit nisi ad, quis quibusdam facere nostrum illo modi neque molestias pariatur dolorem officia, incidunt, voluptatibus expedita doloribus dicta! Eos necessitatibus earum velit. Fugit inventore necessitatibus enim! Tenetur quis soluta in laborum odio? Nesciunt assumenda minima voluptatibus voluptas veritatis accusamus dolorum fugiat, ex ratione a! Impedit eius laudantium excepturi voluptate? Est, ex? Aperiam."
                
            ],
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstwhere('slug', $slug);
                }
}