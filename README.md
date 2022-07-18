#Blog post package

A simple blogpost package in PHP

##installation
```bash 
composer require ekoh/blog-posts
``` 
##usage

```php
$blog = Blog::getInstance();

$postArray = [
    'id' => 1,
    'title' => 'blog title',
    'image' => '/file/path/image.jpeg',
    'body' => 'blog body',
    'author' => 'Author of the post (Linda Ikeji)',
    'hidden' => 0,
    'comments' => []
];

$blog->addPost($postArray);

$blog->getPosts($offset, $limit);

$blog->getPost($postId);

$blog->edit($postId, $postArray);

$post = new Post($postId)

$comment = [
    'id' => 1
    'author' => 'Ekoh Franklin',
    'body' => 'This is a fun comment'
];

$post->addComment($comment);

$post->getComments($offset, $limit);

$post->editComment($commentId, $comment);
```