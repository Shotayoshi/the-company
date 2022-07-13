<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
     <div class="border rounded-2 p-4 my-5 mx-auto w-50">
          <h1 class="display-6 text-uppercase text-center">Register</h1>

          <form action="../actions/register.php" method="post">
               <label for="first-name" class="form-label">First Name</label>
               <input type="text" name="first_name" id="first-name" class="form-control" required>

               <label for="last-name" class="form-label">Last Name</label>
               <input type="text" name="last_name" id="last-name" class="form-control" required>

               <label for="username" class="form-label">Username</label>
               <input type="text" name="username" id="username" class="form-control" required>

               <label for="password" class="form-label">Password</label>
               <input type="password" name="password" id="password" class="form-control" required>

               <input type="submit" value="Register" name="btn_register" class="btn btn-success w-100 mt-4">
          </form>
          
           <p class="text-center">
               Register already? <a href="login.php">Log in</a>
          </p> 

     </div>
</body>
</html>