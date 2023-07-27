<?php
// dashboard.php

// Include necessary files
require_once 'db_config.php';
require_once 'User.php';
require_once 'Post.php';
require_once 'Comment.php';

// Create an instance of DBConfig to connect to the database
$dbConfig = new DBConfig();
$conn = $dbConfig->connect();

// Initialize classes
$user = new User($conn);
$post = new Post($conn);
$comment = new Comment($conn);

// Check if the user is logged in
if (!$user->isLoggedIn()) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit;
}

// Handle post deletion
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
    $post->deletePost($post_id);
}

// Get all posts for the logged-in user
$posts = $post->getPosts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Add your CSS stylesheets here -->
</head>
<body>
    <header>
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Your Posts</h2>
        <?php if (count($posts) === 0): ?>
            <p>No posts found.</p>
        <?php else: ?>
            <ul>
                <?php foreach ($posts as $post): ?>
                    <li>
                        <h3><?php echo $post['title']; ?></h3>
                        <p><?php echo $post['content']; ?></p>
                        <p>Posted on: <?php echo $post['created_at']; ?></p>
                        <a href="edit_post.php?post_id=<?php echo $post['id']; ?>">Edit</a>
                        <a href="dashboard.php?action=delete&post_id=<?php echo $post['id']; ?>">Delete</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Blog. All rights reserved.</p>
    </footer>
</body>
</html>