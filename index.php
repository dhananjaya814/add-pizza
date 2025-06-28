<!DOCTYPE html>


<?php 
    $connect = mysqli_connect('localhost', 'dhananjaya', 'password', 'pizzahut');

    if(!$connect) {
        echo "connection error";
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Pizza Mart</title>
</head>

<body>

    <div class="container">
        <?php include("header.php"); ?>

        <div class="content p-[20px]">
            
        </div>

        <?php include("footer.php"); ?>
    </div>
    
</body>
</html>