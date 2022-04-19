<?php

require('DBConnection.php');


if(!empty($_POST['checkIn']))
{
    $date1 =$_POST['checkIn'];
}    
else 
{
   echo "<p style='font-size: large; color:red; font-size: large'>Enter Check-in.</p></br>";
}


if(!empty($_POST['checkOut']))
{
    $date2 =$_POST['checkOut'];
}    
else 
{
   echo "<p style='font-size: large; color:red; font-size: large'>Enter Check-out.</p></br>";
}

if(!empty($_POST['roomType']))
{
    $roomType = $_POST['roomType'];
}    
else 
{
   echo "<p style='font-size: large; color:red; font-size: large'>Enter Room Type.</p></br>";
}

 
$q = "UPDATE Room AS R INNER JOIN Booking AS B SET occupied=1 WHERE ('$date1' <= dateTo AND '$date2' >= dateFrom) AND R.roomID = B.roomID";
$booked = mysqli_query($dbc,$q);
$qu = "SELECT COUNT(*) FROM Room WHERE occupied='1';";
$bookedRows = mysqli_query($dbc,$qu);

$que = "SELECT * FROM Room AS R WHERE occupied != 1 AND R.roomType = '$roomType'";
$notBooked = mysqli_query($dbc,$que);
$que = "SELECT COUNT(*) FROM Room WHERE occupied ='0';";
$notBookedRows = mysqli_query($dbc,$qu);
while ($notBookedOb = mysqli_fetch_assoc($notBooked)) 
{
    echo "<div style='background-color:gold; witdth: 200px; margin-top: 10%'>
     <h2 style='text-align:center; padding: 20px'> Room No " . $notBookedOb['roomID'] .
      " is free for this booking. <br/> </h2> </div> ";
}

?>