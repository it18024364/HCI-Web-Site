<?php

//initializing variables
//$fname = "";
//$lname = "";
//$country = "";




//$id = 0;

// connect to DB
   // $db = mysqli_connect('localhost', 'root', '', 'test');
//Connection has given

//if submit button is clicked INSERTDATA;

  //  if(isset($_POST['submit'])){

  //  $fname  =$_POST['fname'];
   // $lname  =$_POST['lname'];
  //  $country =$_POST['country'];
   



   // $query ="INSERT INTO  candidate (fname, lname, country) VALUES ('$fname','$lname','$country')";

    if (mysqli_query($connection, $query))
    {
        echo"<script> alert('You Have Successfully Registerd '); </script>";
        header("refresh:0.0000000001; url=LetusKnow.HTML");
    }
    else
    {
        echo"<script> alert('Thank You For Your Valuable Response!'); </script>";
        header("refresh:0.000000000001; url=LetusKnow.HTML");
    }






      //  header('location:Login.php');

//}

//RETRIRVR RECORDS

    //$results = mysqli_query($connection,"SELECT * FROM ttt");




//mysqli_close($connection);

?>
