<?php
namespace App\Models;

class Article {
    public static function getAllArticles() {
        return [
            [
                'id' => '1',
                'title' => "News One",
                'desc' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias molestias illum temporibus laudantium quod, et doloribus porro atque voluptatem, deserunt aspernatur! Optio libero a exercitationem cum quos dolores nesciunt accusantium consequatur reprehenderit, tempore perspiciatis! Quae necessitatibus dignissimos eligendi molestiae aut vero error, quos corrupti nam?"
            ],
            [
                'id' => '2',
                'title' => "News two",
                'desc' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias molestias illum temporibus laudantium quod, et doloribus porro atque voluptatem, deserunt aspernatur! Optio libero a exercitationem cum quos dolores nesciunt accusantium consequatur reprehenderit, tempore perspiciatis! Quae necessitatibus dignissimos eligendi molestiae aut vero error, quos corrupti nam?"
                
            ],

        ];
    }
public static function getSingleArticles($id){
    $article = self::getAllArticles();
    foreach($article as $values)
    {
        if($values['id'] == $id)
        {
            return $values;
        }
    }
}
}
?>