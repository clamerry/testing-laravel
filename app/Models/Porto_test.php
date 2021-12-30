<?php

namespace App\Models;

//memuat data portofolio
class Portofolio 
{
    private static $portofolio_posts = [
        [
            "title" => "Judul Aplikasi 1",
            "slug" => "judul-aplikasi-1",
            "author" => "Erika Simanjuntak",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt harum eos numquam molestiae, vero nam ex porro illum tenetur quasi odio repellendus illo! Distinctio aspernatur unde similique fugiat libero alias, tempore, nemo porro quia provident deserunt veritatis cumque, obcaecati sint deleniti. Magni laborum rem corrupti eos consequatur sint quae cum distinctio, esse culpa dicta at. Distinctio aspernatur ipsam laborum ad vel dolorum. Ipsam minima quidem reprehenderit consequuntur provident laboriosam aspernatur, laudantium vero possimus nihil adipisci eius itaque? Facere, eum quis?"
        ],
    
        [
            "title" => "Judul Aplikasi 2",
            "slug" => "judul-aplikasi-2",
            "author" => "Erika Simanjuntak",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt harum eos numquam molestiae, vero nam ex porro illum tenetur quasi odio repellendus illo! Distinctio aspernatur unde similique fugiat libero alias, tempore, nemo porro quia provident deserunt veritatis cumque, obcaecati sint deleniti. Magni laborum rem corrupti eos consequatur sint quae cum distinctio, esse culpa dicta at. Distinctio aspernatur ipsam laborum ad vel dolorum. Ipsam minima quidem reprehenderit consequuntur provident laboriosam aspernatur, laudantium vero possimus nihil adipisci eius itaque? Facere, eum quis?"
        ]
    ];

    //mengambil data porto diatas
    public static function all()
    {
        return collect(self::$portofolio_posts);
    }

    //mengambil data porto spesifik
    public static function find($slug)
    {
        $portofolio = static::all();
        return $portofolio->firstWhere('slug', $slug);
    }
}
