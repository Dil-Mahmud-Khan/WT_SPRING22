<?php
   include ("../model/model1.php");

   $firstname= $lastname=$age=$email=$password=$confirmpassword=$programming_language=$designation=$filename=$a=$b=$c=$d=$f=$g=$h="";
   
   if(isset($_POST["submit"]))
   {
   $firstname= $_REQUEST['firstname']; 
   
   if(empty($firstname) || strlen($firstname)<2)
   {
       $a= "Please enter a valid name ";
   }
   else
   {
       $a= "First name = ".$firstname;
   }
   
   
   $lastname= $_REQUEST['lastname'];
   if(empty($lastname) || strlen($lastname)<2)
   {
       $b= "Please enter a valid name ";
   }
   else
   {
       $b= "Last name = ".$lastname;
   }
   
   
   $age= $_REQUEST['age'];
   if(empty($age))
   {
       $c= "select your age";
   }
   else
   {
       $c= "Age =".$age;
   }
   
   $designation=$_POST["designation"];
   if(isset($_POST["designation"]))
   {
       $d= "Designation =".$designation ;
   }
   else{
       $d= "select designation ";
   }
   
   if(isset($_POST["JAVA"]) && isset($_POST["PHP"]) && isset($_POST["C++"])){
        $programming_language= "  ".$_POST["JAVA"]."  ".$_POST["PHP"]."  ".$_POST["C++"];
        } 
       else if(isset($_POST["PHP"]) && isset($_POST["C++"]))
       {
        $programming_language= "  ".$_POST["PHP"]."  ".$_POST["C++"];
           
       }
       else if(isset($_POST["JAVA"]) && isset($_POST["C++"]))
       {
           
        $programming_language= "  ".$_POST["JAVA"]."  ".$_POST["C++"];
       }
       else if(isset($_POST["JAVA"]) && isset($_POST["PHP"]))
       {
        $programming_language= "  ".$_POST["JAVA"]."  ".$_POST["PHP"];
           
       }
       else if(isset($_POST["C++"]))
       {
        $programming_language= "  ".$_POST["C++"];
           
       }
       else if(isset($_POST["PHP"]))
       {
        $programming_language= "  ".$_POST["PHP"];
           
       }
       else if(isset($_POST["JAVA"]))
       {
        $programming_language= "  ".$_POST["JAVA"];
            
       }
   else
   {
    $programming_language= "No Language Selected";
   }
   
   $email= $_REQUEST['email'];
   
       if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
       {
           $f= "Please enter a valid email";
       }
       else
       {
           $f= "Email Address = ".$email;
       }
       
   $password= $_REQUEST['password']; 
   $confirmpassword=$_REQUEST['confirmpassword'];
   
   if(empty($password) || strlen($password)<5)
   {
       $g=  "Please enter a valid password";
   }
   else if($password != $confirmpassword)
   {
       $g= "Password didn't match";
   }
   else
   {
       $g= "Password is valid";
   }
      
   
    if(empty($password) || strlen($password)<6)
    {
        $h=  "Enter a valid password";
    }
    else
    {
        $h= "Password is valid";
    }

    $filename=$_FILES["myfile"]["name"];
    if (($file_size = $_FILES['myfile']['size'] > 2097152)){
           $h= 'File must be under 2 mb'; 
    }
   
    else{
       if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Files/".$_FILES["myfile"]["name"]))
       {
           $h= "File Uploaded";
       }
       else
       {
           $h= "File Cannot Upload";
       }
   }

   if(empty($firstname) || strlen($firstname)<2 || empty($lastname) || strlen($lastname)<2 || empty($age) || empty($_POST["designation"]) || 
   (empty($_POST["JAVA"])  && empty($_POST["PHP"]) && empty($_POST["C++"]))  || empty($email) || 
   !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email) || 
   empty($password) || strlen($password)<5 || $password != $confirmpassword)
   {
   echo "No data Saved";
   }
      else{
    $mydb=new DB();
    $connobj=$mydb->opencon();
    $mydb->InsertData($firstname, $lastname, $age, $designation, $programming_language, $email, $password, $filename, "registration",$connobj);
    $mydb->closecon($connobj);
   }
   
   }   
?>