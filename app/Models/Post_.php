<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-pertama",
            "author" => "Moch. Faisal Ediansyah",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam accusantium dolore provident odit, sapiente, facilis numquam molestias animi quasi beatae explicabo eveniet similique aut! Ab maxime reiciendis esse hic amet."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-kedua",
            "author" => "Moch. Al Ediansyah",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam accusantium dolore provident odit, sapiente, facilis numquam molestias animi quasi beatae explicabo eveniet similique aut! Ab maxime reiciendis esse hic amet."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
