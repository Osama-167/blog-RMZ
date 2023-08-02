<?php

class Post {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addPost($title, $content, $user_id) {
        // Implement adding a new post and insert into the 'posts' table
    }

    public function editPost($post_id, $title, $content) {
        // Implement editing an existing post
    }

    public function deletePost($post_id) {
        // Implement deleting a post from the 'posts' table and its associated comments
    }

    public function getPosts() {
        // Get all posts from the 'posts' table
    }

    public function getPostById($post_id) {
        // Get a single post by its ID from the 'posts' table
    }
}
?>
