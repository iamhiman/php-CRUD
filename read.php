<?php include "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP-CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        table {
            width: 200%;
            margin-top: 10px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #eee;
        }

        tr:nth-child(odd) {
            background-color: #d6d3d3;
        }

        th {
            background-color: #a532c1;
            color: white;
        }
        
        .alert {
            width: 100%;
            margin: 40px 260px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-sm-6">
            <?php readRows(); ?>
        </div>
    </div>
</body>
</html>