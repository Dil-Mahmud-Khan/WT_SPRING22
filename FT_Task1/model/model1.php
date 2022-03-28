<?php
class DB
{
function opencon(){
$DBHostname="localhost";
$DBUsername="root";
$DBPass=""; 
$DBName="task1";

$conn=new mysqli($DBHostname, $DBUsername, $DBPass, $DBName);
if($conn->connect_error)
{
    echo "couldn't connect object".$conn->connect_error;
}
return $conn;
    }
    function InsertData($firstname, $lastname, $age, $designation, $programming_language, $email, $password, $filename, $tablename, $conn){
$sqlstr="INSERT INTO registration (firstname, lastname, age, designation, programming_language, email, password, filename) values ('$firstname', '$lastname', $age, '$designation', '$programming_language', '$email', '$password', '$filename')";

if($conn->query($sqlstr)==TRUE)
{
echo "Data Inserted Successfully";
}
else{
    echo "cant insert".$conn->err;
}
    }
function closecon($conn){
    $conn->close();
}
}
?>