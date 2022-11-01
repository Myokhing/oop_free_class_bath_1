<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Bootstrap demo</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
 <div class="container">
  <div class="row">
   <div class="col-lg-12">
    <div class="card">
     <div class="card-header">
      <h1>Simple Crud lesson 1 <span><a href="index.php" class="btn btn-primary">Back</a></span></h1>
     </div>
     <div class="card-body">
      <?php 
      include("config/db_con.php");
      $id = $_GET['id'];
      // echo $id;
      $sql = "SELECT * FROM users WHERE id = $id";
      $result = mysqli_query($link, $sql);
      $row = mysqli_fetch_assoc($result);
      ?>
      <form action="#" method="POST">
       <div class="mb-3">
        <label for="Username">User name</label>
        <input type="text" name="name" class="form-control" value="<?= $row['name'] ?>">
       </div>

       <div class="mb-3">
        <label for="Email">Email</label>
        <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>">
       </div>
       <div class="mb-3">
        <label for="Password">Password</label>
        <input type="text" name="password" class="form-control" value="<?= $row['password'] ?>">
       </div>
       <div class="mb-3">
        <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <input type="submit" name="user_update" class="btn btn-primary" value="User Update">
        </div>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>


  <?php 
  if(isset($_POST['user_update']))
  {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $sql = "UPDATE users SET name = '$name', email = '$email', password = '$password' WHERE id = $id";
   $result = mysqli_query($link, $sql);
   if($result)
   {
    header("location: index.php");
   }else{
    echo "cannot update user";
   }
  }
  ?>

 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>