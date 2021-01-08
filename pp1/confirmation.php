<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Redirect if form has not been submitted
if (empty($_POST)) {
    header("location: index.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
var_dump($_POST);

$valid = true;

//Check name
$name = "";
if(($_POST['name']) != ""){
    $name = $_POST['name'];
}else {
    echo "First Name invalid/empty";
    $isValid = false;
}



?>

</body>
</html>
