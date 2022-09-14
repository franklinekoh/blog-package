<?php

use Practice\BlogPost\Blog;
use Practice\BlogPost\Contracts\BlogContract;
use Faker\Factory;

test('it adds post', function () {
    $postParam = [
        'id' => 1,
        'title' => 'Post title',
        'image' => 'path/to/post/image',
        'body' => 'Hi, this is a fun post',
        'author' => 'Ekoh Franklin',
        'hidden' => 0,
        'comments' => []
    ];

    $blog = Blog::getInstance();

    expect($blog)->toBeInstanceOf(BlogContract::class);
    expect($blog->addPost($postParam))->toContain($postParam);
});

