<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="Style1.css">
 <title>Student Response</title>
</head>
<body>
 <form action="" method="post" name="form">
 <center>
 <div id="outer">
 <div id="im1" class="im">
 <img id="i1" src="feedback1.jpg">
 </div> 
 <div id="fm" class="im">
 <h2>response</h2><br>
 <center>
 <input type="text" name="nm" id="nm" class="ip" title="Full name" placeholder="Full name" required>
 <input type="text" name="ro" id="ro" class="ip" title="Roll number" placeholder="Roll number" required>
 </center>
 <select name="Class" class="Class" title="Class" required>
 <option>Class</option>
 <option value="FY">FY</option>
 <option value="SY">SY</option>
 <option value="TY">TY</option>
 </select>
 <select name="Teacher" class="Teacher" title="Teacher" required>
 <option>Teacher</option>
 <?php
    if(isset($_POST["Class"]))
    {
        $class=$_POST['Class'];
        $host='Localhost';
        $user='root';
        $pass='';
        $db='student_feedback';
        $con=mysqli_connect($host,$user,$pass,$db);
    
        $sql="SELECT * FROM teacher WHERE year='$class'";
        $query=$con->query($sql);
        if($query)
        {
            while($fetch=mysqli_fetch_array($query))
            {
                echo '<option value="'.$fetch['name'].'">'.$fetch['name'].'</option>';
                
            }
        }
    }
 ?>
 <select>
 <br>
 <h3 id="l2">Give Rating</h3><br>
 <div class="mcq">
 <table>
 <tr>
 <td>
 <span>Covers the entire syllabus</span>
 </td>
<td>
 <input type="radio" name="q1" class="q1" value="1" id="r1"><label for="r1" class="l1">1</label>
 <input type="radio" name="q1" class="q1" value="2" id="r2"><label for="r2" class="l1">2</label>
 <input type="radio" name="q1" class="q1" value="3" id="r3"><label for="r3" class="l1">3</label>
 </td>
 </tr>
<tr>
 <td>
 <span>Discuss topics in detail</span>
 </td>
<td>
 <input type="radio" name="q2" class="q2" value="1" id="r4"><label for="r4" class="l2">1</label>
 <input type="radio" name="q2" class="q2" value="2" id="r5"><label for="r5" class="l2">2</label>
 <input type="radio" name="q2" class="q2" value="3" id="r6"><label for="r6" class="l2">3</label>
 </td>
 </tr>
<tr>
 <td>
 <span>Communicates clearly</span>
 </td>
<td>
 <input type="radio" name="q3" class="q3" value="1" id="r7"><label for="r7" class="l3">1</label>
 <input type="radio" name="q3" class="q3" value="2" id="r8"><label for="r8" class="l3">2</label>
 <input type="radio" name="q3" class="q3" value="3" id="r9"><label for="r9" class="l3">3</label>
 </td>
 </tr>
<tr>
 <td>
 <span>Motivates you to learn more</span>
 </td>
<td>
 <input type="radio" name="q4" class="q4" value="1" id="r10"><label for="r10" class="l4">1</label>
 <input type="radio" name="q4" class="q4" value="2" id="r11"><label for="r11" class="l4">2</label>
 <input type="radio" name="q4" class="q4" value="3" id="r12"><label for="r12" class="l4">3</label>
 </td>
 </tr>
<tr>
 <td>
 <span>Punctual to lectures in time</span>
 </td>
<td>
 <input type="radio" name="q5" class="q5" value="1" id="r13"><label for="r13" class="l5">1</label>
 <input type="radio" name="q5" class="q5" value="2" id="r14"><label for="r14" class="l5">2</label>
 <input type="radio" name="q5" class="q5" value="3" id="r15"><label for="r15" class="l5">3</label>
 </td>
 </tr>
<tr>
 <td>
 <span>Rescepts your ideas and sugestions</span>
 </td>
<td>
 <input type="radio" name="q6" class="q6" value="1" id="r16"><label for="r16" class="l6">1</label>
 <input type="radio" name="q6" class="q6" value="2" id="r17"><label for="r17" class="l6">2</label>
 <input type="radio" name="q6" class="q6" value="3" id="r18"><label for="r18" class="l6">3</label>
 </td>
 </tr>
 </table>
 </div>
 <textarea title="Addtional suggestions......" placeholder="Addtional suggestions......" name="suggestions"></textarea>
 <br>
 <button type="submit" name="Submit">Submit</button>
 </div>
 </div>
 </center>
 </form>
 <?php
    $host='Localhost';
    $user='root';
    $pass='';
    $db='student_feedback';
    $con=mysqli_connect($host,$user,$pass,$db);
    if(isset($_POST["Submit"]))
    {
        if(!empty($_POST["nm"])&&!empty($_POST["ro"])&&!empty($_POST["Class"])&&!empty($_POST["Teacher"]))
        {
            //variables to insert the values
            $name=$_POST["nm"];
            $roll=$_POST["ro"];
            $class=$_POST["Class"];
            $teacher=$_POST["Teacher"];
            $cover_syllabus=$_POST["q1"];
            $discuss_topic=$_POST["q2"];
            $communicate=$_POST["q3"];
            $motivate=$_POST["q4"];
            $punctual_timings=$_POST["q5"];
            $respects_you=$_POST["q6"];
            $suggestions=$_POST["suggestions"];
            $sql="insert into feedback_details values('$name','$roll','$class','$teacher','$cover_syllabus','$discuss_topic','$communicate','$motivate','$punctual_timings','$respects_you','$suggestions')";
            $query=$con->query($sql);
        }
    }
    ?>
   </body>
   </html

