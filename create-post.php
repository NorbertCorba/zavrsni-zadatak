
<?php include_once('db.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="styles\styles.css" rel="stylesheet">
</head>
<body>
<main role="main" class="container">
<div class="col-sm-8 blog-main">
        <h1 class="c-p-title"> Create new post </h1>
        <form action="create-post.php" method="POST" id="postsForma">
            <ul class="flex-outer">
                <li>
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter title">
                </li>
                <li>
                    <label for="category">Category</label>
                    <input type="text" name="category" id="category" placeholder="Enter Category">
                </li>
                <li>
                    <label for="email">content</label>
                    <textarea name="content" placeholder="Enter content" rows="10" id="bodyPosts"></textarea><br>
                </li>
                <li>
                    <label for="email">Body</label>
                    <textarea name="body" placeholder="Enter body" rows="10" id="bodyPosts"></textarea><br>
                </li>
                <li>
                    <button type="submit" name="submit">Submit</button>
                </li>
            </ul>
        </form>
    </div>
</main>
</body>
</html>