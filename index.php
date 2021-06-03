<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <title>Random Password</title>
</head>
<body>    
    <?php
     if(isset($_POST['password'])) { 
        $string ='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^_';
        $data   = str_shuffle($string);
        $data   = substr($data ,0, $_POST['password']);
        echo "<center> <h2> Your Random Password = $data </h2> </center>";
        echo "<center> <h5> $string </h5> </center>";
      }
    ?>

    <form method="POST" class="container">

        <div class="form-group">
            <label for="password">Password Char:</label>
            <input type="number" class="form-control" id="password" name="password" value="10" autocomplete="off">
            </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>
    
</body>
</html>