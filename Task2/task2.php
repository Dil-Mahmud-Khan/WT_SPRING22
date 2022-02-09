<?php
$fname="";
$lname="";
$pass="";
$namer="";
$namerr="";
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$checkbox=$_REQUEST[""]

if(strlen($fname<2)){
    $namer="Please input minimum 2 character name";
}
else{
    $namer="Invalid name";
}
if(strlen($lname<3)){
    $namerr="Please input minimum 3 character name";
}
else{
    $namerr="Invalid name";
}

if(isset($_POST["box1"] || $_POST["box2"] $_POST["box3"]  )){
    
    echo $seck="You have selected the checkbox";
}
else{
    echo $seck="You havent selected any checkbox";
}

if(isset($_POST["radio1"]|| $_POST["radio1"]|| $_POST["radio1"] ) ){
    echo $rad="You have selected radio button";
}
else{
    echo $rad="You haven't selected radio button";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
    <form action="" method="post"></form>
    <table>
        <tr>
    <td> First Name:</label></td>
    <td><input type="text" name="fname" id="fname"></td>
</tr>
<?php
echo $namer;
?>
    <br>
    <tr><td>Last Name:</td></label>
        <td><input type="text" name="lname" id="lname"></td><br></tr>
    <tr>
    <?php
echo $namerr;
?>        
        <td>Age:</td>
        <td><input type="text" name="age" id="age" value="age"></td>
    </tr>

    <br>
    <tr>
    <td>Designation:</td>
    <td>
    <input type="radio" name="radio1" value="radio1">
    <label for="junior programer">Junior Programmer</label>
    <?php
    echo $rad;
    ?>
    <input type="radio" name="radio1" value="radio2">
    <label for="senior programer">Senior Programmer</label>
    <?php
    echo $rad;
    ?>
    <input type="radio" name="radio1" value="radio3">
    <label for="Project lead">Project Lead</label>
    <?php
    echo $rad;
    ?>
    </td>
    </tr>
    <br>
    <tr>
    <td>Preferred Language:</td>
    <td>
    <input type="checkbox" name="box1" value="box1">
    <label for="java">JAVA</label>
    <?php
    echo $seck;
    ?>
    <input type="checkbox"name="box1" value="box2">
    <label for="PHP">PHP</label>
    <?php
    echo $seck;
    ?>
    <input type="checkbox" name="box1" value="box3">
    <label for="C++">C++</label>
    <?php
    echo $seck;
    ?>
</td>
</tr>
    <br>
    <tr>
    <td>Email:</td>
    <td><input type="text" name="email" id="email"><br></td>
</tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="" id=""></td>
    </tr>
    
    <br>
    <tr>
        <td>Please Choose a file</td>
        <td><input type="file" id="myfile" name="myfile"></td>
    </tr>
   
    
    <br>
    <tr>
        <td><input type="submit" value="Submit"></td>
        <td><input type="reset" value="Reset"></td>
    </tr>
</form>
</table>
</body>
</html>
