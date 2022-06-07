<?php include_once('db.php');


  if (isset($_GET['post_id'])) {

    $postId = $_GET['post_id'];

    $sql = "SELECT * FROM posts WHERE id = '$postId'";

    $singlePost = fetch($sql, $connection);
   
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
            <p class="blog-post-meta">Created at: <?php echo($singlePost['created_at'])?> by <a href="#"></a><?php echo($singlePost['author'])?></p>
            <p><?php echo ($singlePost['body']) ?></p>
           
    </div><!-- /.blog-post -->

  </body>
</html>

