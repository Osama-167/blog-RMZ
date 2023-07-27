<?php

class Comment {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addComment($post_id, $user_id, $content) {
        // Implement adding a new comment and insert into the 'comments' table
    }

    public function deleteComment($comment_id) {
        // Implement deleting a comment from the 'comments' table
    }

    public function getCommentsByPostId($post_id) {
        // Get all comments for a specific post from the 'comments' table
    }
}