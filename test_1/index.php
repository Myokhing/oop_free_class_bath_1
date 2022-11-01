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
      <h1>Simple Crud lesson 1 <span><a href="" class="btn btn-primary" data-bs-toggle="modal"
         data-bs-target="#exampleModal">Add New User</a></span></h1>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>

        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
       </tr>
       <tbody>
        <tr>
         <?php 
        include("config/db_con.php");
        $query = "SELECT * FROM users";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_assoc($result)) :
        ?>
         <td><?= $row['id'] ?></td>
         <td><?= $row['name'] ?></td>
         <td><?= $row['email'] ?></td>
         <td>
          <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-info">Edit</a>
          <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
         </td>
        </tr>
        <?php endwhile; ?>
       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
      <form action="actions/user_create.php" method="POST">
       <div class="mb-3">
        <label for="Username">User name</label>
        <input type="text" name="name" class="form-control">
       </div>

       <div class="mb-3">
        <label for="Email">Email</label>
        <input type="email" name="email" class="form-control">
       </div>
       <div class="mb-3">
        <label for="Password">Password</label>
        <input type="text" name="password" class="form-control">
       </div>
       <div class="mb-3">
        <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <input type="submit" name="user_create" class="btn btn-primary" value="User Create">
        </div>
       </div>
      </form>
     </div>

    </div>
   </div>
  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>