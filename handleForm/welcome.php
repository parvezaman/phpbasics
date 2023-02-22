<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $_POST["name"]?>
    </title>
</head>

<body>
    <?php
    print_r($_POST);
    print_r($_GET);
    echo "<pre>";
    var_dump($_SERVER);
    // print_r($_SERVER);
    echo "</pre>";
    ?>
    <h1>welcome aboard!
        <?php echo $_POST["name"]?>
    </h1>
</body>

</html>