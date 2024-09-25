<?php include('dbConnction.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
  <body>
  <div class="card col-md-9">
    <div class="card-header">
        <h1>CRUD</h1>
    </div>
    <div class="card-body">
        <a href="add.php">
            <button type="button" class="btn btn-primary">Add New</button>
        </a>
    <table class="table">
      <thead>
          <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Address</th>
          <th scope="col">Mobile</th>
          <th scope="col">Option</th>
          </tr>
      </thead>
      <tbody>
        <?php

          $sql = "select * from student";
          $data = mysqli_query($conn,$sql);
          $id = 1;

          while ($row = mysqli_fetch_array($data)) {
            $uid = $row['id'];
            $name = $row['name'];
            $address = $row['address'];
            $mobile = $row['mobile'];
        
      
        ?>
          <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $address ?></td>
            <td><?php echo $mobile ?></td>

            <td>
            <button type="button" class="btn btn-success">
              <a  href='edit.php?edit=<?php echo $uid ?>' class="text-light">
                Edit
              </a>
            </button>
            <button type="button" class="btn btn-danger">
              <a href="delete.php?del=<?php echo $uid ?>" class="text-light">
              Delete
              </a>
            </button>
            </td>
          </tr>

          <?php $id++;} ?>
          
      </tbody>
    </table>
    </div>
</div>
  </body>
</html>