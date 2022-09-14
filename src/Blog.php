<?php

namespace Practice\BlogPost;

use Practice\BlogPost\Contracts\BlogContract;

class Blog implements BlogContract
{
    private static $blog;
    private array $posts = [];

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    /**
     * Returns instance of the blog class
     *
     * @return Blog
     */
    public static function getInstance(): Blog
    {
        if (!isset(self::$blog)) {
            self::$blog = new Blog();
        }

        return self::$blog;
    }

    public function addPost(array $postParams): array
    {
    }

    public function getPosts(int $offset, int $limit): array
    {
        // TODO: Implement getPosts() method.
    }

    public function getPost(int $postId): array
    {
        // TODO: Implement getPost() method.
    }

    public function editPost(int $postId, array $postParam): array
    {
        // TODO: Implement editPost() method.
    }

}