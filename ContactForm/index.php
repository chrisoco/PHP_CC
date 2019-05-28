<?php

  // Message Vars
  $msg = '';
  $msgClass = '';


  if(filter_has_var(INPUT_POST, 'submit')) {

    // Get Form Data
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // check Required Fields
    if(!empty($name) && !empty($email) && !empty($message)) {

      if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $msg = 'Please use a valid E-Mail';
        $msgClass = 'alert-danger';
      } else {
        $toEmail = 'christopher.oconnor@santismail.ch';
        $subject = 'Contact Request From: '.$name;
        $body = '<h2>Contact Request</h2>
        <h4>Name</h4><p>'.$name.'</p>
        <h4>Email</h4><p>'.$email.'</p>
        <h4>Message</h4><p>'.$message.'</p>
        ';

        $headers  = "MIME-Version: 1.0"."\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";
        $headers .= "From: ".$name."<".$email.">"."\r\n";

        if(mail($toEmail, $subject, $body, $headers)) {
          $msg = 'Your Email has been sent';
          $msgClass = 'alert-success';
        } else {
          $msg = 'Your Email was not sent';
          $msgClass = 'alert-danger';
        }

      }

    } else {
      $msg = 'Please fill in all Fields';
      $msgClass = 'alert-danger';
    }

  }

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

    <div class="container">

      <?php if($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>">
          <?php echo $msg ?>
        </div>
      <?php endif; ?>

      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control"
          value="<?php echo isset($_POST['name']) ? $name : ''; ?>" >
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control"
          value="<?php echo isset($_POST['email']) ? $email : ''; ?>" >
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea name="message" class="form-control" rows="4"><?php
           echo isset($_POST['message']) ? $message : '';
           ?></textarea>
        </div>
<br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

      </form>
    </div>

  </body>
</html>
