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
            $re=$_GET['re'];
            
            ?>
         <div id="d3" style=" width: 100%; height: 500PX;"> 
        <br><br><br><br>
        <?php
        if ($re=='1') {
            echo "false";
                
        }
        ?>
            <h2>NEW ACCOUNT</h2>
        <form style="width: 80%;" method="get" action="fun/add_userr.php">
        
        <div>
        
                <label class="25">user name</label>
                <input class="f75" type=""name="the_user" placeholder="user name">
            </div>
            <div>
                <label class="f25">full name</label>
                <input class="f75" type=""name="full_name" placeholder="full name">
            </div>
            <div>
                <label class="f25"> password</label>
                <input class="f75" type="password"name="the_password" placeholder="password">
            </div>
            <div>
                <label class="f25">reset the password</label>
                <input class="f75" type="password"name="reset_password" placeholder="reset the password">
            </div>
            <div>
                <label class="f25">number</label>
                <input class="f75" type=""name="the_phone" placeholder="number">
            </div>
            <div>
                <label class="f25">Age</label>
                <select class="f75" name="the_age">
                    <option value="1900_2000">1900_2000</option>
                    <option value="2000_2010">2000_2010</option>
                    <option value="2010_2015">2010_2015</option>
                    <option value="2015_2020">2015_2020</option>
                </select>

            </div>
            <div>
                <input type="submit" name="" value="save new account">
            </div>
        </form>
        
    </div>
         
        
    </center>
</body>
</html>