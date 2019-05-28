<?php

  require('config/config.php');
  require('config/db.php');

  // Create Query
  $query = 'SELECT * FROM tbl_post ORDER BY created_at DESC';

  // Get Result
  $result = mysqli_query($conn, $query);

  // Fetch Data
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // Free Result
  mysqli_free_result($result);

  // Close Conn
  mysqli_close($conn);


 ?>

<?php include('inc/header.php') ?>

     <div class="container">
       <h1>Posts</h1><br>
       <?php foreach ($posts as $post) : ?>
         <div class="alert alert-dismissible alert-primary">
           <h4><?php echo $post['title']; ?></h4>
           <small>Created on <?php echo $post['created_at']; ?> by
           <?php echo $post['author']; ?></small>
           <p><?php echo $post['body']; ?></p>
           <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
         </div>
       <?php endforeach; ?>
     </div>

<?php include('inc/footer.php') ?>
