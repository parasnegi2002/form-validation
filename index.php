<?php
    include './index1.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
    <style>
        body {
            background-color: #05c46b;
            font-family: Verdana;
            text-align: center;
        }
        .error{
            color: red;
        }
        .form{
            background-color: #fff;
            max-width: 500px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }
        .form-control {
            text-align: left;
            margin-bottom: 25px;
        }
        .form-control label {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>form</h1>   
    <form class="form" method="post">
        <div class="form-control">
        <label>username:</label> <span class="error"> <?php echo $userErr ?> </span><br>
        <input type="type" name="user" placeholder="Enter your name"><br>
        </div>
        <div class="form-control">
        <label> Email:</label><span class="error"><?php echo $EmailErr ?> </span> <br>
        <input type="text" name="Email" placeholder="enter your email"><br>
        </div>
        <input type="submit" name="submit">
    </form>
    
    
</body>    
</html>