<?php

  require('config/config.php');
  require('config/db.php');

  // get ID
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  // Create Query
  $query = 'SELECT * FROM tbl_post WHERE id=1';

  // Get Result
  $result = mysqli_query($conn, $query);

  // Fetch Data
  $post = mysqli_fetch_assoc($result);

  // Free Result
  mysqli_free_result($result);

  // Close Conn
  mysqli_close($conn);


 ?>

<?php include('inc/header.php') ?>
     <div class="container">
       <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Back</a><br><br>
       <h1><?php echo $post['title']; ?></h1><br>
           <small>Created on <?php echo $post['created_at']; ?> body
           <?php echo $post['author']; ?></small>
           <p><?php echo $post['body']; ?></p>

           <hr>
           <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a>

     </div>

<?php include('inc/footer.php') ?>
