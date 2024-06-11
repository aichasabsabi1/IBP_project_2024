<!DOCTYPE html>
<html>
<head>
    
    <title>COFFE Library</title>
</head>
    

    <body>

           <center>
            <?php
            include 'css.css';
            session_unset();
            session_start();

            ?>
         <div id="d3" style=" width: 100%; height: 500PX;"> 
        <br><br>
            <h2>SIGN UP</h2>
        <form style="width: 80%;" action="fun/test.php" method="post">

            <div>
                <label class="f25"> user name </label>
                <input class="f75" type=""name="n1">
                
            </div>
            <div>
                <label class="f25"> password</label>
                <input class="f75" type=""name="n2">
            </div>
            <div>
                <label class="f25">number</label>
                <input class="f75" type=""name="n3">
            </div>
           
            <div>
                <input type="submit" name="" value="enter">
            </div>
        </form>
        <a href="sign_up.php?re=">Idont have an acounnt</a>
    </div>
         
        
    </center>
</body>
</html>