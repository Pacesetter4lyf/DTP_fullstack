<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Content Page</title>

    <style>
        .content {
            text-align: center;
        }

        .comment-section {
            text-align: center;
        }
        .search-section {
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        img{
            width: 300px;
        }
        textarea{
            width: 50%;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>My Blog Post</h1>
        <p>This is some interesting content for my web page.</p>
        <img src="example.png" alt="Image">
    </div>
    <div class="search-section">
        <h2>Search</h2>
        <input type="text"> <button>search</button>
    </div>
    <div class="comment-section">
        <h2>Comments</h2>
        <ul id="comments-list">
            <!-- Comments will be added here dynamically using JavaScript -->
        </ul>
        <textarea id="comment-input" placeholder="Add a comment"></textarea>
        <div class="buttons">
            <button id="comment-button">Comment</button>
            <button id="like-button">Like</button>
        </div>

    </div>
    <script src="script.js"></script>
</body>
</html>
