<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Add Pizza</title>
</head>

<body>

    <div class="container">
        <?php include("header.php"); ?>

        <?php 
        
            // if(isset($_POST['submit'])) {
            //     // echo htmlspecialchars($_POST['email']);
            //     // echo htmlspecialchars($_POST['title']);
            //     // echo htmlspecialchars($_POST['ingredients']);

            //     if(empty($_POST['email'])) {
            //         echo 'Email is required! <br/>';
            //     } else {
            //         echo htmlspecialchars($_POST['email']);
            //     }
            //     if(empty($_POST['title'])) {
            //         echo 'Title is required! <br/>';
            //     } else {
            //         echo htmlspecialchars($_POST['title']);
            //     }
            //     if(empty($_POST['ingredients'])) {
            //         echo 'Ingredients are required! <br/>';
            //     } else {
            //         echo htmlspecialchars($_POST['ingredients']);
            //     }
            // };

            // if(isset($_POST['submit'])) {

            //     if(empty($_POST['email'])) {
            //         echo 'Email is required! <br/>';
            //     } else {
            //         $email = $_POST['email'];
            //         if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //             echo 'email must be valid';
            //         }
            //     }
            //     if(empty($_POST['title'])) {
            //         echo 'Title is required! <br/>';
            //     } else {
            //         $title = $_POST['title'];
            //         if(!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            //             echo 'Title is cannot have spacial characters!';
            //         }
            //     }
            //     if(empty($_POST['ingredients'])) {
            //         echo 'Ingredients are required! <br/>';
            //     } else {
            //         $ingredients = $_POST['ingredients'];
            //         if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            //             echo 'Ingredients must be entered comma separated & must\'t contain special characters!';
            //         }
            //     }
            // };
        
        ?>

        <?php 

            if(isset($_POST['submit'])) {

                if(empty($_POST['email'])) {
                    echo 'Email is Required! <br/>';
                } else {
                    echo $_POST['email'];   
                }
                if(empty($_POST['title'])) {
                    echo 'Title is Required! <br/>';
                } else {
                    echo $_POST['title'];   
                }
                if(empty($_POST['ingredients'])) {
                    echo 'Ingredients are Required! <br/>';
                } else {
                    echo $_POST['ingredients'];   
                }
                
            }
        
        ?>

        <div class="form p-[20px] md:px-[200px]">
            <h4 class="text-4xl font-serif text-center py-[20px]">Add a Pizza</h4>
            <form class="bg-[#e2e2e2] border border-sm p-[40px] flex flex-col px-[60px] md:px-[100px] poppins-medium" action="addPizza.php" method="POST">
                <label for="">Your Email</label>
                <input class="p-1 mb-2 bg-white border rounded-none border-[#242424] " type="email" name="email">
                <label for="">Pizza Title</label>
                <input  class="p-1 mb-2 bg-white border rounded-none border-[#242424] " type="text" name="title">
                <label for="">Ingredients</label>
                <input class="p-1 mb-2 bg-white border rounded-none border-[#242424] " type="text" name="ingredients">
                <input type="submit" name="submit" value="submit" class="bg-[#d62939] hover:bg-black text-white py-1 px-3 mt-3">
            </form>
        </div>


        <?php include("footer.php"); ?>
    </div>
    
</body>
</html>