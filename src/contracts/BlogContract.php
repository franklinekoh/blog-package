<?php

namespace Practice\BlogPost\Contracts;

interface BlogContract
{
    /**
     * Add posts to the bloggi
     *
     * @param array $postParams
     * @return array
     */
    public function addPost(array $postParams): array;

    /**
     * get all posts in the blog
     *
     * @param int $offset
     * @param int $limit
     * @return array
     */
    public function getPosts(int $offset, int $limit): array;

    /**
     * Get a single post in the blog
     *
     * @param int $postId
     * @return array
     */
    public function getPost(int $postId): array;

    /**
     * Edits post
     *
     * @param int $postId
     * @param array $postParam
     * @return array
     */
    public function editPost(int $postId, array $postParam): array;
}