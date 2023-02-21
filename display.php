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
 .main{
 width: 100%;
 height: 100vh;
 display: flex;
 align-items: center;
 justify-content: center;
 background: linear-gradient(to right,skyblue,rgb(218, 255, 255));
 }
 .submain{
 height: 75%;
 background-color: rgb(255, 255, 255); 
 width: 50%;
 box-shadow: 10px 10px 50px gray;
 box-decoration-break: slice;
 overflow: scroll;
 overflow-x: hidden;
 overflow-y: hidden;
 }
 h2{
 color: blue;
 font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans','Helvetica Neue', sans-serif;
 font-size: larger;
 margin-top: 40px;
 margin-bottom: 40px;
 }
 .tbl{
 width: unset;
 height: 250px;
 overflow: auto;
 margin: 20px;
 border-radius: 20px;
 }
 table{
 width: max-content;
 border: none;
 border-collapse: collapse;
 border-spacing: 0px;
 border-radius: 20px;
 font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
 background: linear-gradient(to right,rgb(247, 233, 176),rgb(247, 213, 176),rgb(247, 181, 176),rgb(176, 231, 247),rgb(176, 199, 247));
 }
 .hed{
 background: linear-gradient(to right,rgb(252, 223, 3),rgb(230, 162, 89),rgb(247, 144, 137),rgb(89, 230, 204), rgb(3, 103, 252));
 box-shadow: 5px 5px 5px gray;
 }
 td{
 width: max-content;
 padding: 10px;
 }
 .btn{
 align-items: center;
 justify-content: center;
 display: flex;
 margin-top: 30px;
 }
 .row{
 background-color: rgb(255, 154, 2);
 border-radius: 20px;
 padding: 10px;
 border: none;
 width: 150px;
 margin: 5px;
 } 
 .row:hover{
 background-color: rgb(255, 176, 124);
 color: black;
 cursor: pointer;
 }
 a{
 font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
 font-size: larger;
 color: white; 
 text-decoration: none;
 }
 </style>
</head>
<body>
 <div class="main">
 <div class="submain">
 <center><h2>Response Records</h2></center>
 <div class="tbl">
 <table>
 <tr class="hed">
 <td>Name</td>
 <td>Roll no</td>
 <td>Class</td>
 <td>Teacher</td>
 <td>Covers the entire syllabus</td>
 <td>Discuss topics in detail</td>
 <td>Communicates clearly</td>
 <td>Motivates you to learn more</td>
 <td>Punctual to class timings</td>
 <td>Rescepts your ideas and suggestions </td>
 <td>Additional suggestions</td>
 </tr>
    <?php
    $host='Localhost';
    $user='root';
    $pass='';
    $db='student_feedback';
    $con=mysqli_connect($host,$user,$pass,$db);
    $sql="select * from feedback_details";
    $query=$con->query($sql);
        if($query)
        {
            while($fetch=mysqli_fetch_array($query))
            {
            echo "<tr>";
            echo "<td>".$fetch['name']."</td>";
            echo "<td>".$fetch['rollno']."</td>";
            echo "<td>".$fetch['class']."</td>";
            echo "<td>".$fetch['teacher']."</td>";
            echo "<td>".$fetch['covers_the_entire_syllabus']."</td>";
            echo "<td>".$fetch['discuss_topics_in_detail']."</td>";
            echo "<td>".$fetch['communicates_clearly']."</td>";
            echo "<td>".$fetch['motivates_you_to_learn_more']."</td>";
            echo "<td>".$fetch['punctual_to_class_timings']."</td>";
            echo "<td>".$fetch['rescepts_your_ideas_and_suggestions']."</td>";
            echo "<td>".$fetch['additional_suggestions']."</td>";
            echo "</tr>";
            }
        }
    ?>
 
 </table>
 </div>
 <center>
 <div class="btn">
 <div class="row">
 <a href="admin.php">Admin Desk</a>
 </div>
 <div class="row">
 <a href="login page.php">Response Portal</a>
 </div>
 </div>
 </center>
 </div>
 </div>
</body>
</html>