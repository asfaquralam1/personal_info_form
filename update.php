<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `crud` where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$email = $row['email'];
$address = $row['address'];
$age = $row['age'];
$image_path = $row['image_path'];

$target_dir = "uploads/";
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if ($target_file !== $target_dir) {
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    } else {
        $target_file =  $image_path;
    }
    $sql = "update `crud` set id=$id,first_name='$first_name',
    last_name='$last_name', email='$email',age='$age', address='$address', image_path='$target_file' where id=$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "";
        header("location:render.php");
    } else {
        die(mysqli_error($conn));
    }
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
    <title>Update Information</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <h1 style="text-align:center; margin-bottom: 10px">Update Information</h1>
            <div class="row">
                <div class="col-md-12">
                    <?php
                    echo '<tr>
                  <td style="horizontal-align: center;"><img src=' . $image_path . ' width="130px" 
                  height="130px" style="margin: 10px; display: block; margin-left: auto; margin-right: auto;"/></td> 
                  </tr>'
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="eamil" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="First Name"
                        value="<?php echo $first_name ?>">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="eamil" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                        value="<?php echo $last_name ?>">
                </div>
            </div>
            <div class="row">
                <div class=" col-lg-6 col-md-6 col-sm-12">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email ?>">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="Age" class="form-label">Age</label>
                    <input type="text" class="form-control" name="age" placeholder="Age" value="<?php echo $age ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $address ?>">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:20px">
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