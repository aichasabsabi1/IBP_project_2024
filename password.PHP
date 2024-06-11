<!DOCTYPE html>
<html>
<head>
    
    <title>COFFE Library</title>
</head>
    

    <body>

           <center>
            <?php
            include 'css.css';
            include 'list.php';

            ?>
         <div id="d3" style=" width: 100%; height: 500PX;"> 
        <br><br>
            <h2>CHANG THE PASSWORD</h2>
        <form style="width: 80%;" action="fun/chang.php" method="post">
        
            <div>
                <label class="f25"> the password </label>
                <input class="f75" type=""name="n1">
                
            </div>
            <div>
                <label class="f25"> new password</label>
                <input class="f75" type=""name="n2">
            </div>
            <div>
                <label class="f25">reset the new password</label>
                <input class="f75" type=""name="n3">
            </div>
           
            <div>
                <input type="submit" name="" value="enter">
            </div>
        </form>
        <a href="sign_up.php">Idont have an acounnt</a>
    </div>
         
        
    </center>
</body>
</html>