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

<div class="container">
    <h1>Cupcake Fundraiser</h1>
</div>

<form id="order" action="confirmation.php" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="name">
    </div>
    <h3>Cupcake Flavors</h3>
    <?php
        $cupcakes = array(
            "grasshopper" => "The Grasshopper",
            "maple" => "Whiskey Maple Bacon",
            "carrot" => "Carrot Walnut",
            "velvet" => "Red Velvet",
            "lemon" => "Lemon Drop",
            "tiramisu" => "Tiramisu"
        );

        foreach($cupcakes as $cupcake => $item) {
            echo "<input type='checkbox' id='$cupcake' name='cups[]' value='item'>";
            echo "<label for='$cupcake'> $item</label><br>";

    }
    ?>
    <button type="submit">Order!</button>

</form>

</body>
</html>

