<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = 
[
    [
        "title" => "Judul Posts Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Arie Ramadhan",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem repellat consequatur, possimus dolore expedita doloremque, nobis unde at nulla numquam quia vitae quas ratione, minus repudiandae enim? Praesentium, quis. Illo rerum ducimus pariatur modi cupiditate expedita natus tempora nulla, autem saepe laboriosam, non accusantium dolorum eaque omnis maxime facilis ex, illum unde. Quasi animi quisquam magni sunt autem, laborum pariatur aut aliquid tempore sint laudantium suscipit eveniet? Illum suscipit, amet veritatis, ullam quas deleniti necessitatibus natus odit tenetur qui fuga."
    ],

    [
        "title" => "Judul Posts Annisa",
        "slug" => "judul-post-kedua",
        "author" => "Annisa Syam",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nisi alias nam illo, doloremque libero nostrum voluptatum eos, quibusdam molestiae ex autem debitis sapiente dolorum impedit illum ducimus atque excepturi maxime nobis? Sint reprehenderit hic mollitia! Itaque tempore cupiditate explicabo veniam, quibusdam voluptatem perferendis deleniti obcaecati! Inventore unde tempore recusandae blanditiis nemo nostrum minima, natus est omnis cumque expedita exercitationem architecto perspiciatis aliquam! Exercitationem amet architecto cum saepe placeat! Ipsa, veritatis! Aut quam, accusamus provident excepturi neque veritatis in pariatur, voluptates debitis necessitatibus quisquam! Tenetur libero dignissimos pariatur placeat incidunt voluptatem inventore officiis voluptate, voluptatum deserunt beatae, excepturi necessitatibus suscipit!"
    ],
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
