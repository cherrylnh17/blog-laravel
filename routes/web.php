<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Post {
    public static function all(){
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Cherry',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis quam assumenda ducimus, iure porro cupiditate deserunt perferendis libero sed officiis? Labore rerum sapiente ipsa, voluptas nisi perspiciatis impedit omnis molestiae harum magnam ea perferendis alias provident sed enim. Sapiente ratione nemo dolore harum aliquid voluptates dolorem dolores, dicta molestias non delectus? Enim pariatur accusantium sapiente iure quae reiciendis ex tenetur, vitae provident quia quibusdam, laborum adipisci obcaecati, quaerat voluptates fugiat eum voluptatem sunt id ratione. Reiciendis corporis ipsum illo laudantium perspiciatis distinctio modi optio delectus possimus nobis! Id, aperiam voluptatibus perferendis, soluta eligendi dolorum itaque maxime beatae voluptates iure corrupti, quo et fugit? Veniam cupiditate maiores laborum mollitia optio vero veritatis voluptates perspiciatis ab, voluptate doloribus illum totam error blanditiis eligendi? Aperiam quis sint earum ducimus deserunt aliquam pariatur at, doloribus nisi qui rerum sit recusandae repudiandae! Quos, earum quas. Dolores nemo atque hic, ullam, id dolore corporis laborum aliquid, ipsam ratione enim cupiditate ducimus minus cumque non accusamus. Repellat iste amet provident veniam eos iusto, consequuntur, harum fuga ducimus quaerat tenetur dolor error, possimus sequi rerum. Vitae quo cumque ullam eos dignissimos? Adipisci doloribus nemo commodi a ipsum veritatis reiciendis inventore perferendis voluptatibus earum. Animi dicta minima doloremque repudiandae.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Cherry',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis quam assumenda ducimus, iure porro cupiditate deserunt perferendis libero sed officiis? Labore rerum sapiente ipsa, voluptas nisi perspiciatis impedit omnis molestiae harum magnam ea perferendis alias provident sed enim. Sapiente ratione nemo dolore harum aliquid voluptates dolorem dolores, dicta molestias non delectus? Enim pariatur accusantium sapiente iure quae reiciendis ex tenetur, vitae provident quia quibusdam, laborum adipisci obcaecati, quaerat voluptates fugiat eum voluptatem sunt id ratione. Reiciendis corporis ipsum illo laudantium perspiciatis distinctio modi optio delectus possimus nobis! Id, aperiam voluptatibus perferendis, soluta eligendi dolorum itaque maxime beatae voluptates iure corrupti, quo et fugit? Veniam cupiditate maiores laborum mollitia optio vero veritatis voluptates perspiciatis ab, voluptate doloribus illum totam error blanditiis eligendi? Aperiam quis sint earum ducimus deserunt aliquam pariatur at, doloribus nisi qui rerum sit recusandae repudiandae! Quos, earum quas. Dolores nemo atque hic, ullam, id dolore corporis laborum aliquid, ipsam ratione enim cupiditate ducimus minus cumque non accusamus. Repellat iste amet provident veniam eos iusto, consequuntur, harum fuga ducimus quaerat tenetur dolor error, possimus sequi rerum. Vitae quo cumque ullam eos dignissimos? Adipisci doloribus nemo commodi a ipsum veritatis reiciendis inventore perferendis voluptatibus earum. Animi dicta minima doloremque repudiandae.'
            ]
        ];
    }
}

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function(){
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function($slug){
    return view('post', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/about', function(){
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function(){
    return view('contact', ['title' => 'Contact Page']);
});
