    <?php

    $mycon=new mysqli("localhost","root","","test");
    if($mycon->connect_error)
    {
        echo "Connection not established!";
    }
    else
    {
       if($_SERVER['REQUEST_METHOD']=="POST")
       {
$Uname=$_POST['uemail'];
$Upass=$_POST['upass'];

$sql="INSERT INTO login VALUES('$Uname','$Upass')";
if($mycon->query($sql))
{
    // echo "data inserted !";
}



       }
     
    }
    
    
    ?>
