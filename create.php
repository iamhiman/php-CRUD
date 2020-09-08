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
            <h1 class="text-center">Create</h1>
            <form action="create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="CREATE" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<?php  include "functions.php"; ?>
<?php createRows(); ?>