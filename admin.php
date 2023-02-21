<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .ad{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            position: absolute;
            padding-left: 30px;
            margin-top: 20px;
            font-size: 40px;
            font-weight: bold;
            color: green;
        }
        .buttons{
            position: absolute;
            margin-top: 20px;
            margin-left: 60%;
            margin-right: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .row{
            padding: 10px; 
            margin: 5px;
            border-radius: 10px;
            background-color: rgb(151, 223, 199);
            border-bottom: 2px solid rgb(255, 154, 2);
        }
        a{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: rgb(125, 127, 129);
            text-decoration: none;
        }
        .main{
            background: linear-gradient(to right,skyblue,rgb(218, 255, 255));
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .submain{
            height: 60%; 
            background-color: rgb(255, 255, 255);
            width: 30%;
            box-shadow: 10px 10px 50px gray;
            margin: 30px;
        }
        h2{
            color: rgb(206, 152, 81);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans','Helvetica Neue', sans-serif;
            font-size: larger;
            margin-top: 40px;
            margin-bottom: 40px;
        }
        .tbl{
            width: unset;
            overflow: auto;
            margin: 20px;
            border-radius: 20px;
        }
        .ip{
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
            background-color: rgb(255, 154, 98);
            border-radius: 20px;
            padding: 10px;
            border: none;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: larger;
            margin-top: 40px;
            width: 200px;
            color: white;
        }
        button:hover{
            background-color: rgb(255, 176, 124);
            color: black;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2 class="ad">Admin's Desk</h2>
    <div class="buttons">
        <div class="row">
            <a href="display.php">Response Data</a>
        </div>
        <div class="row">
            <a href="login page.php">Response Site</a>
        </div>
        <div class="row">
            <a href="admin_login.php">Log-out</a>
        </div>
    </div>
    <div class="main">
        <div class="submain">
            <form action="" method="post">
                <center><h2>Add Faculty</h2></center>
                <div class="tbl">
                    <center>
                        <input type="text" name="nm" id="nm" class="ip" title="Facultyname" placeholder="Faculty name" required>
                        <input type="text" name="yr" id="ro" class="ip" title="Year" placeholder="Year" required>    
                        <button type="submit" name="Add">Add</button>
                    </center>
                </div>
            </form>
        </div>
        <div class="submain">
            <form action="" method="post">
                <center><h2>Remove Faculty</h2></center>
                <div class="tbl">
                    <center>
                        <input type="text" name="nm1" id="nm" class="ip" title="Facultyname" placeholder="Faculty name" required>
                        <input type="text" name="yr1" id="ro" class="ip" title="Year" placeholder="Year" required>
                        <button type="submit" name="Remove">Remove</button>
                    </center>
                </div>
            </form>
        </div>
    </div>
    <?php
        $host='Localhost';
        $user='root';
        $pass='';
        $db='student_feedback';
        $con=mysqli_connect($host,$user,$pass,$db);
        
        if(isset($_POST['Add']))
        {
            if(!empty($_POST['nm'])&&!empty($_POST['yr']))
            {
            //variables to insert the values
            $nm=$_POST["nm"];
            $yr=$_POST["yr"];
            $sql="insert into teacher values('$nm','$yr')";
            $query=$con->query($sql);
            }
        }
        if(isset($_POST['Remove']))
            {
            if(!empty($_POST['nm1'])&&!empty($_POST['yr1']))
            {
            //variables to insert the values
            $nm=$_POST["nm1"];
            $yr=$_POST["yr1"];
            $sql="DELETE FROM teacher WHERE name='$nm' and year='$yr'";
            $query=$con->query($sql);
            }
        }
    ?>
    
</body>
</html>



