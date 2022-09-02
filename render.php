<?php
include 'connect.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light" style="text-decoration:none">Add User</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SI no</th>
                    <th scope="col" style="text-align: center">Profile</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col" style="text-align: left">Email</th>
                    <th scope="col" style="text-align: left">Age</th>
                    <th scope="col" style="text-align: left">Address</th>
                    <th scope="col" style="text-align: center">Operation</th> 
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "Select * from `crud`";
                $result = mysqli_query($conn,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $image_path=$row['image_path'];
                        $first_name=$row['first_name'];
                        $last_name=$row['last_name'];
                        $email = $row['email'];
                        $age = $row['age'];
                        $address = $row['address'];
                        echo '<tr>
                        <th scope="row"style="vertical-align: middle">'.$id.'</th>
                        <td style="vertical-align: middle"><img src='.$image_path.' width="50px" height="50px"/></td>
                        <td style="vertical-align: middle">'.$first_name.'</td>
                        <td style="vertical-align: middle">'.$last_name.'</td>
                        <td style="vertical-align: middle">'.$email.'</td>
                        <td style="vertical-align: middle">'.$age.'</td>
                        <td style="vertical-align: middle">'.$address.'</td>
                        <td style="text-align: right; vertical-align: middle">
                            <button class="btn btn-primary" class="text-light"><a href="update.php?updateid='.$id.'" class="text-light" style="text-decoration:none; font-size:12px;padding:0">Update</a></button>
                            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light" style="text-decoration:none; font-size:13px;padding:0">Delete</a></button>
                        </td>
                    </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>