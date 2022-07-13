<?php

include_once "../classes/User.php";

session_start();

$u = new User;
$user = $u->getUser($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="dashboard.php">The company</a>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"> -->
      <!-- <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="ms-auto" id="navbarText">
      <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul> -->
      <span class="navbar-text text-muted">
       <a href="profile.php" class="text-decoration-none text-muted"><?=$_SESSION['username'] ?></a>
       <a href="../actions/logout.php" class="text-decoration-none ms-2 text-danger">Log out</a>
      </span>
    </div>
  </div>
</nav>

<div class="container my-5">
     <div class="row">
          <div class="col-4"></div>
          <div class="col-4">
               <div class="card">
                    <div class="card-header">
                         <img src="../images/<?= $user['photo']?>" alt="" class="img">
                    </div>
                    <div class="card-body">
                         <form action="../actions/upload-photo.php" method="post" class="mb-4" enctype="multipart/form-data">
                              <label for="photo" class="form-label">Choose Photo</label>
                              <input type="file" name="photo" class="btn btn-outline-secondary">

                              <input type="submit" value="Uplaod photo" class="mt-2 btn btn-outline-secondary">
                         </form>
                         <p class="h5"><?=$user['first_name']." ".$user['last_name']?></p>
                         <p class="h6"><?=$user['username']?></p>
                    </div>
               </div>
          </div>
     </div>
</div>
</body>
</html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />