<?php
include 'connect.php';
$target_dir = "uploads/";
$target_file = "";
$tmp_file="";
$uploadOk = 0;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email= $_POST['email'];
    $age = $_POST['age'];
    $address= $_POST['address'];
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
  } else {
    echo "File is not an image.";
      $uploadOk = 0;
  }
  $sql = "insert into `crud` (first_name,last_name,email,age,address,image_path) values('$first_name','$last_name','$email','$age','$address','$target_file')";
    
    $result = mysqli_query($conn,$sql);

    if($result){
        header("location:render.php");
    }else{
        die(mysqli_error($conn));
    }
}

// Check if file already exists
if (file_exists($target_file)) {
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $uploadOk = 0;
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Personal Information</title>
</head>

<body>
    <div class="container">
        <form action="user.php" method="post" enctype="multipart/form-data">
            <h1 style="text-align:center; margin-bottom: 40px">Personal Information</h1>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label for="First Name" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="Last Name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="Age" class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Age">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
            </div>
            <div class="col-md-12 col-sm-12" style="margin-top:20px">
                <input type="file" name="fileToUpload" id="fileToUpload" autocomplete="off">
            </div>
            <button type="submit" class="btn" style="margin-top:20px;" name="submit">submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>