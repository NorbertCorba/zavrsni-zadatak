<?php include_once('db.php');


  if (isset($_GET['post_id'])) {

    $postId = $_GET['post_id'];

    $sql = "SELECT * FROM posts WHERE id = '$postId'";

    $singlePost = fetch($sql, $connection);

    $sql2 = "SELECT * FROM comments WHERE post_id = '$postId'";
    $comments = fetch($sql2, $connection, true);

  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-Post</title>
    <link href="styles\styles.css" rel="stylesheet">
</head>
  <body>
    <div class="blog-post">
    
            <h2 class="blog-post-title"><?php echo ($singlePost['title'])?></h2>
            <p class="blog-post-meta">Created on: <?php echo($singlePost['created_at'])?> by <a href="#"></a><?php echo($singlePost['author'])?></p>
            <h3>Post content:</h3>
            <p class ="post-body"><?php echo ($singlePost['body']) ?></p>

            <h3>Comments:</h3><br><br>

<?php foreach ($comments as $comment) {
  ?>
        <ul>
            <li><h4><br><?php echo ($comment['author']) ?>  wrote:<br></h4></li>
            <p> <?php echo ($comment['text']) ?></p>
            <hr>
        </ul>

<?php }?>

           
    </div><!-- /.blog-post -->

  </body>
</html>

