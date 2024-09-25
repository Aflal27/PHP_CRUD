<?php include('dbConnction.php'); ?>

<?php 
$edit = $_GET['edit'];
$sql = "select * from student where id = '$edit'";
$data2 = mysqli_fetch_array(mysqli_query($conn,$sql));
            $uid = $data2['id'];
            $name = $data2['name'];
            $address = $data2['address'];
            $mobile = $data2['mobile'];
?>

<?php
$server = "localhost";
$userName = "root";
$serverPassword = "";
$dbName = "dbcrud";

$conn = new mysqli($server,$userName,$serverPassword,$dbName);

// check db connection
if ($conn->connect_error) {
    die("connection faild!".$conn->connect_error);
}

if (isset($_POST['submit'])) {
    $id = $_GET['idnew'];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];

    $sql = "update `student` set `name`='$name',`address`='$address',`mobile`='$mobile' where `id` = '$id' ";

    if (mysqli_query($conn,$sql)) {
    //   echo '<script>location.replace("index.php")</script>';
    header('location:index.php');
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
            <form action="edit.php?idnew=<?php echo $edit?>" method="post">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo $name; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address" value="<?php echo $address; ?>" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile Number" value="<?php echo $mobile; ?>" >
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Edit</button>
             </form>
      </div>
   
    </div>
</div>
  </body>
</html>