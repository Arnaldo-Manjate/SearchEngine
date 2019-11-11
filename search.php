<?php
   include "db.php";

   // checking wheather the button was press or the spacbar was hit
   /* 
   change the way you search so that a user clicks on a button or press enter (no js)
    */
   if(  isset($_POST["search"]) ){
        $title = htmlspecialchars($_POST["search"]);
        $searchStatement ="select * From Books Where Title like '%$title%'";
        $result = $obj->query($searchStatement);
   }

//    change the above to be a try catch and handle the error where I put the html comment
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Study Programing</title>
</head>
<body>
    <!-- HEADING-->
    <div class="text-center">
        <h1>Programing Books</h1>
        <!-- SUB TITLE -->
        <h3>Search</h3>
    </div>
    
    <!-- the styling here should change push this div with the input and button to the top left or center -->
    <!-- INPUT -->
    <div class="container">
    <!-- fix the form below its messy -->
        <form  method="post" action="search.php">
            <div class="input-group">
                <input type="text" class="form-control" name="search">
            <div class="input-group-append">
                <span name="ButtonPreesed" type="submit" class=" btn btn-success"><a href="search.php">Search</a></span>
            </div>   
        </form>
    </div>
    <!-- LIST -->
    <br><br><br>
  <!-- CHECKING FOR RESULTS-->
  <!-- change the error setting let, dont use inline css unless its a last option -->
<?php if( mysqli_num_rows($result) < 1 ):?>
   <div class="text-center">
        <div style="color:white;background-color:red;text-align-center;">No Books Found</div>
   </div>
<?php else: ?>
    <div class="container">
        <ul class="list-group text-center form-hover">
    <?php while( $book = $result->fetch_assoc()):?>
    <!-- the link should open a new tab -->
                <li class="list-group-item"><a href="<?php echo $book["Link"] ?>"><?php echo $book["Title"] ?></a></li>
    <?php endwhile; ?>
        </ul>
<?php endif; ?> 
    </div>
  
      <!-- dont add js to the mainly keep it html, css and php -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>