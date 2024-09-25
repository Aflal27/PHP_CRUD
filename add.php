<?php include('dbConnction.php'); ?>
<?php
if (isset($_POST['submit'])) {
    
    $name = $_POST["name"];
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];

    $sql = "insert into student(name,address,mobile)values('$name','$address','$mobile')";

    if (mysqli_query($conn,$sql)) {
      echo '<script>location.replace("index.php")</script>';
    }else{
        echo "somthing error " . $conn->error;
    }
}
?>

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
        <a href="index.php">
        <h1>CRUD</h1>

        </a>
    </div>
    <div class="card-body">
       <div class="">
            <form action="add.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile Number" >
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
             </form>
      </div>
   
    </div>
</div>
  </body>
</html>