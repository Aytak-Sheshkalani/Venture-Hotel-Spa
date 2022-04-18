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
    echo "Room No " . $notBookedOb['roomID'] . " is free for this booking. <br />";
}

// function dateCheck($date1, $date2) {
//     global $mysqli;
//     global $roomType;
//     $booked = $mysqli->query("UPDATE Rooms AS R INNER JOIN Bookings AS B SET occupied=1 WHERE ('$date1' <= dateTo AND '$date2' >= dateFrom) AND R.roomID = B.roomID") or die($mysqli->error);
//     $bookedRows = $booked->num_rows;
//     $notBooked = $mysqli->query("SELECT * FROM Rooms AS R WHERE occupied != 1 AND R.roomType = '$roomType'");
//     $notBookedRows = $notBooked->num_rows;
//     while($notBookedOb = $notBooked->fetch_object()) {
//         echo "Room No " . $notBookedOb->roomID . " is free for this booking. <br />"; 
//     }
// }

?>