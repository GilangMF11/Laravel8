<?php

namespace App\Models;


class Post 
{
     private static $blog_post = [
        [
            "tittle" => "Judul Post 1",
            "slug" => "judul-post-1",
            "author" => "Gilang Miftkahul Fahmi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nostrum eum aspernatur a dolorem repellendus neque sit ipsa, aliquam labore dolores beatae aliquid nemo laboriosam voluptatum modi! Ipsam, soluta, minus in consequuntur ratione est distinctio tempora fugiat quaerat nesciunt expedita repellendus fuga fugit similique asperiores doloremque repellat debitis esse? Perferendis quo ad vitae, et eaque aperiam dolores optio voluptatum debitis sequi vero aspernatur? Repellat fuga commodi, voluptas assumenda sit asperiores cupiditate vel laudantium, aperiam quasi dolor nisi omnis architecto culpa?"
        ],
        [
            "tittle" => "Judul Post 2",
            "slug" => "judul-post-2",
            "author" => "Gilang Miftkahul Fahmi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nostrum eum aspernatur a dolorem repellendus neque sit ipsa, aliquam labore dolores beatae aliquid nemo laboriosam voluptatum modi! Ipsam, soluta, minus in consequuntur ratione est distinctio tempora fugiat quaerat nesciunt expedita repellendus fuga fugit similique asperiores doloremque repellat debitis esse? Perferendis quo ad vitae, et eaque aperiam dolores optio voluptatum debitis sequi vero aspernatur? Repellat fuga commodi, voluptas assumenda sit asperiores cupiditate vel laudantium, aperiam quasi dolor nisi omnis architecto culpa?"
        ]
    
        ];

        public static function all() {
            return collect(self::$blog_post);
        }

        public static function find($slug){
            $Dpost = static::all();

            // $post = [];
            // foreach($Dpost as $p) {
            //     if($p["slug"] === $slug) {
            //         $post = $p;
            //     }
            // }
            return $Dpost->firstWhere('slug', $slug);
        }

}
