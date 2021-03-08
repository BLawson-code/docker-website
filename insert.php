<?php
header('Access-Control-Allow-Origin: *');
if(isset($_POST['name'])){
    $conx=mysqli_connect("localhost","root","","restaurant_booking");
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $arrival=$_POST['arrival'];
    $departure=$_POST['departure'];
    $attendees=$_POST['attendees'];
    $sql="INSERT INTO `bookings`(`Name`, `Phone`, `Email`, `Date`, `Arrival`, `Departure`, `Attendees`) VALUES ('$name','$phone','$email','$date','$arrival','$departure', '$attendees');";
    $result=mysqli_query($conx,$sql);

    if($result==true) {
        echo "<h3>inserted!</h3>";
    } if($result==false) {
        echo "shit"
    }
}
$conx->close();
?>