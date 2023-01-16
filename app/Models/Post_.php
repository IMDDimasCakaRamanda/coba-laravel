<?php

namespace App\Models;

use Psy\TabCompletion\Matcher\FunctionsMatcher;

class Post 
{
   private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dimas Caka",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia exercitationem odit maiores enim, sed vitae ipsum accusamus? Omnis suscipit eos dolor, itaque magnam id repudiandae quis saepe nisi eius ea in quidem optio illum, quam deleniti iure expedita temporibus, eum similique praesentium amet et nihil! A porro dolorem repellendus vel delectus, quisquam illum non eius corrupti quam minus quasi consectetur ex voluptatum architecto placeat velit! Magnam temporibus molestiae eum autem exercitationem quasi nisi atque nihil eligendi, vero suscipit corrupti quas."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Daniel Dwi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas iusto culpa explicabo, tenetur dolor eius, necessitatibus pariatur quas cum sit commodi quia assumenda quae ad et laudantium rerum dolore. Vitae iusto dolorem, fuga dolor molestias ut, ex rem accusantium numquam beatae facere eaque adipisci cum excepturi laboriosam! Odio a ducimus fuga quo, molestiae amet voluptatum. Deserunt nihil deleniti temporibus sit nesciunt sequi aspernatur corporis aperiam molestiae, saepe repellendus, nostrum quam ipsa unde excepturi vel, veritatis quisquam cupiditate vitae illo magnam enim eligendi qui voluptatibus. Nihil hic laborum, totam omnis, animi laboriosam aperiam possimus architecto recusandae distinctio, iste dicta impedit ea?"
        ]
    ];

    public static Function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
