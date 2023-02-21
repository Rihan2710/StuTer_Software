<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin</title>
 <style>
 *{
 padding: 0;
 margin: 0;
 }
 .admin{
 width: 100%;
 height: 100vh;
 display: flex;
 align-items: center;
 justify-content: center;
 background: linear-gradient(to right,skyblue,rgb(218, 255, 255));
 }
 .admin div{
 height: 70%;
 background-color: rgb(255, 255, 255);
 width: 30%;
 box-shadow: 10px 10px 50px gray;
 box-decoration-break: slice;
 overflow: scroll;
 overflow-x: hidden;
 overflow-y: hidden;
 }
 .admin div h2{
 color: rgb(206, 152, 81);
 font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans','Helvetica Neue', sans-serif;
 font-size: larger;
 margin-top: 40px;
 margin-bottom: 30px;
 }
 .detail{
 border: none;
 border-bottom: 2px solid rgb(255, 154, 2);
 padding: 5px;
 padding-left: 10px;
 font-size: large;
 font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
 width: 200px;
 margin: 20px;
 border-radius: 20px;
 background-color: rgb(182, 243, 224);
 }
 button{
 background-color: rgb(255, 154, 2);
 border-radius: 20px;
 padding: 10px;
 border: none;
 font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
 font-size: larger;
 margin-top: 40px;
 width: 200px;
 color: white;
 }
 h5{
 color: red;
 font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
 }
 </style>

</head>
<body>
    <form action="" method="post">
        <div class="admin">
            <div>
                <center>
                    <h2>Admin Login</h2><br>
                    <input type="text" name="usernm" class="detail" placeholder="Username"><br>
                    <input type="password" name="pass" class="detail" placeholder="Password"><br>
                    <button type="submit" name="submit">Submit</button><br><br>
                    <h5 style="visibility:
                    if(isset($_POST['submit'])){
                        if(!empty($_POST['usernm'])&&!empty($_POST['pass']))
                        {
                            $unm=$_POST['usernm'];
                            $pass=$_POST['pass'];
                            if($unm=="student_records" && $pass=="@student"){echo
                            'hidden;"';header('Location:admin.php');}
                            else{echo 'visible;"';}
                        }
                        else{echo 'visible;"';}
                        }
                        else{echo 'hidden;"';}
                        
                        ?>
                    ;">Opps! Please Try again...
                    </h5>
                </center>
            </div>
        </div>
    </form>
</body>
</html>



                        

