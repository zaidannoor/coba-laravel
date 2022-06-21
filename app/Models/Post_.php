<?php



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Artikel 1" ,
            "author" => "Zaidan Noor Irfan" ,
            "slug" => "judul-artikel-1" ,
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, rerum dolorem. Illo quam repudiandae corporis aut blanditiis, ab harum labore molestiae quos voluptates, quas sint non, corrupti quis eligendi beatae fugiat sunt alias facere unde minus minima aliquam culpa! Odit temporibus nam reprehenderit placeat at porro, exercitationem dolores voluptas eligendi et, cumque, eos voluptatem nisi sed aspernatur. Recusandae repellendus illum blanditiis impedit cumque suscipit, laboriosam sapiente rerum labore qui dolorum deleniti provident sunt incidunt necessitatibus, inventore vel aspernatur mollitia perspiciatis?"
        ] ,
        [
            "title" => "Judul Artikel 2" ,
            "author" => "Hilman Burhan" ,
            "slug" => "judul-artikel-2" ,
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, rerum dolorem. Illo quam repudiandae corporis aut blanditiis, ab harum labore molestiae quos voluptates, quas sint non, corrupti quis eligendi beatae fugiat sunt alias facere unde minus minima aliquam culpa! Odit temporibus nam reprehenderit placeat at porro, exercitationem dolores voluptas eligendi et, cumque, eos voluptatem nisi sed aspernatur. Recusandae ?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug' , $slug);
    }


    
}
