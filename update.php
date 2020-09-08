<?php include "db.php"; ?>
<?php  
  if(isset($_GET['update']))
    {
        $uid = $_GET['update'];
        $query = "SELECT * FROM users WHERE id= $uid ";
        $result = mysqli_query($connection, $query);
    
        while($row = mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
            $username = $row['username'];
            $password = $row['password'];
        }  
    } 
    
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
    
        $query = " UPDATE users SET username = '$username', password = '$password' WHERE id = $id ";
    
        $result = mysqli_query($connection, $query);
        if(!$result)
        {
            die("<p class='alert alert-danger text-center'>Query Failed..!!</p>" . mysqli_error($connection));
        }
        else
        {
            echo "<p class='alert alert-success text-center'>Records Updated..!! Refreshing...</p>";
            echo "<script>setTimeout(\"location.href = 'read.php';\",1500);</script>";
        }  
    } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP-CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .alert {
            width: 40%;
            margin: 40px 140px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-sm-6">

            <h1 class="text-center">Update</h1>
            <form action="update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input value="<?php echo $username ?>" type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input value="<?php echo $password ?>" type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id">
                        <option><?php echo $id ?></option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Update" class="btn btn-primary">
                </div>
            </form>

        </div>
    </div>
</body>
</html>