<!DOCTYPE html>
<html>
<head>
    
    <title>COFFE Library</title>
</head>
   
       
<body>
    <?php
    include 'css.css';?>
    <div style="width: 100%; position:fixed; top:0;">
    <ul>
        <li><a href="us.php">contact us</a></li>
        <li><a href="books.php">BOOKS</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="index.php">HOME</a></li>
        
        <?php
             session_start();
         if (!isset($_SESSION['online_library2'])){
            
        ?>
        <li style="float: right;"><a href="login.php">LOG IN</a></li>
        <?php
         }
        ?>
        <?php
             
         if (isset($_SESSION['online_library2'])){
            $n1=$_SESSION['online_library2'];
            include 'connect.php';
            $sql="SELECT * FORM userss WHERE the_user='$n1'";
            $result = $conn->query ($sql);
            while($row=$result->fetch_assoc()) 
            {
                $full_name=$row['full_name'];
            }
        
        ?>
    
        <li style="float: right;"><a href="login.php">LOG OUT</a></li>
        <li style="float: right;">hellow <?php echo $full_name?></li>
        <li style="float: right;"><a href="personal.php">PERSONAL</a></li>
        <?php
         }
        ?>

    </ul>
    </div>
   
</body>
</html>