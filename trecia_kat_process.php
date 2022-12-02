<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trecia Kat | Assignment #2</title>
    <link rel="icon" href="images/Wisconsin_Badgers_logo.svg.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans:wght@300;400&display=swap');
    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="trecia_kat.css">
</head>

<!--processes the submission from trecia_kat.php, thanks the user for their submission-->

<body>
    <h1>
        <?php
        $name = $_POST["name"];
        echo "Thank you for your submission " . $name;
        ?>
    </h1>
</body>

</html>