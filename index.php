<?php
   include "db.php";
   $sql = "select * from Books";
   $Books = $obj->query($sql);
   if(!$Books){
        echo "No Books Found";
   }
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
    
    
    <!-- INPUT -->
    <div class="container">
        <form action="search.php" method="post" >
            <div class="input-group">
                <input type="text" class="form-control" name="search">     
             
        </form>
    </div>
    <!-- LIST -->
    <br><br><br>
    <div class="container">
        <ul class="list-group text-center form-hover">
<?php while( $book = $Books->fetch_assoc()):?>
            <li class="list-group-item"><a href="<?php echo $book["Link"] ?>"><?php echo $book["Title"] ?></a></li>
<?php endwhile; ?>
        </ul>

    </div>
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>