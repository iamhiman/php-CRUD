<?php
include "db.php";

function createRows()
{ 
    if(isset($_POST['submit']))
    {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $query = "INSERT INTO users(username, password) VALUES('$username', '$password') ";
    
        $result = mysqli_query($connection, $query);
    
        if(!$result)
        {
            die("<p class='alert alert-danger text-center'>Query Failed..!!</p>" . mysqli_error($connection));
        }
        else
        {
            echo "<p class='alert alert-success text-center'>Records Created..!!</p>";    
        }
    }
}

function readRows()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result)
    {
        die("Query Failed" . mysqli_error($connection));
    }

    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

    <?php
    while($row = mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];
    ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $username; ?></td>
            <td><?php echo $password; ?></td>
            <td><?php echo "<a href='update.php?update={$id}'>UPDATE</a>"; ?></td>
            <td><?php echo "<a href='read.php?delete={$id}'>DELETE</a>"; ?></td>
        </tr>
    <?php        
    }
    ?> 
    
    </table>
    
    <?php
    
    if(isset($_GET['delete']))
    {
        $did = $_GET['delete'];
        $query = " DELETE FROM users WHERE id = $did ";
    
        $result = mysqli_query($connection, $query);
        if(!$result)
        {
            die("<p class='alert alert-danger text-center'>Query Failed..!!</p>" . mysqli_error($connection));
        }
        else
        {
            echo "<p class='alert alert-success text-center'>Record Deleted..!! Refreshing...</p>";
            echo "<script>setTimeout(\"location.href = 'read.php';\",1500);</script>";
        }
    }
    ?>
    
    <?php
}

?>