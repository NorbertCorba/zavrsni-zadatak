<?php include_once('db.php');

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];
    $currentDate = date("Y-m-d h:i");

    $sql = "INSERT INTO posts (title, body, author, created_at) VALUES ('$title', '$body', '$author', '$currentDate')";
    $statement = $connection->prepare($sql);
    $statement->execute();
    header("Location: ./posts.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico">
    <title>Create post</title>

    <link rel="stylesheet" href="css/styles.css">
    <link href="styles\styles.css" rel="stylesheet">
</head>

<body class="va-l-page va-l-page--homepage">

    <?php
    include('header.php');
    ?>
    <div class="form-wrapper">
        <h1 class="c-p-title"> Create new post </h1>
        <form action="create-post.php" method="POST" id="postsForma">
            <ul class="flex-outer">
                <li>
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter title" required>
                </li>
              
                <li>
                    <label for="author">Author</label>
                    <textarea name="author" id = "author" placeholder="Enter author" required rows="10"></textarea><br>
                </li>
                <li>
                    <label for="body">Body</label>
                    <textarea name="body" id="body" placeholder="Enter body" required rows="10"></textarea><br>
                </li>
                <li>
                    <label for="created_at">Created at:</label>
                    <textarea name="created_at" id="created_at" placeholder="Insert date" required rows="10"></textarea><br>
                </li>
                <li>
                    <button type="submit" name="submit" id= "submit">Submit</button>
                </li>
            </ul>
        </form>
    </div>


    <?php
    include('footer.php');
    ?>

</html>