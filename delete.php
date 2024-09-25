<?php include('dbConnction.php'); ?>

<?php 
$delete = $_GET['del'];
$sql = "delete from student where id = '$delete'";
if (mysqli_query($conn,$sql)) {
    echo '<script>location.replace("index.php")</script>';
  }else{
      echo "somthing error " . $conn->error;
  }

?>