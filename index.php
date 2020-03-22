<html land="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, inital-sacel=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container">
<div class="card">
<div class="img_container"><img src="https://cdn.clipart.email/b3b0e870d68d6dd7a9c7b1b443c9fdc4_register-icon-png-at-getdrawings-free-download_512-512.png" alt=""/></div>

<form action="results.php" method="POST">
<input type="text" class="form-control" name="user_name" placeholder="Name" required="required">
<?php if(isset($name_error)) { ?>
<p><?php echo $name_error ?></p>
<?php } ?>
      
          <input placeholder="Password" type="password" class="form-control" name="user_password" required="required">
          <?php if(isset($password_error)) { ?>
          <p><?php echo $password_error ?></p>
          <?php } ?>
    
    <input placeholder="Confirm Password" type="password" class="form-control" name="confirm_password" required="required">
          <?php if(isset($password_error)) { ?>
          <p><?php echo $password_error ?></p>
          <?php } ?>

          <input placeholder="E-Mail" type="email" class="form-control" name="user_email">
          <?php if(isset($email_error)) { ?>
          <p><?php echo $email_error ?></p>
          <?php } ?>

          <input class="btn btn-danger btn-lg btn-block" type="submit" value="Submit">
       </div>
       </body>
       </html>