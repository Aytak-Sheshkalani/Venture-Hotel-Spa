<?php
    require('DBConnection.php');

    $query = 'SELECT * FROM feedback;';
    $results = @mysqli_query($dbc,$query);
?>

<html>
    <head>
    <link rel="stylesheet" href="style.css" />
    </head>
    <body style="background-image: url('hotel-view.jpg');">
        <table>
            <thead>
                <tr align="left">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Comments</th>   
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_array($results, MYSQLI_ASSOC)){
                        $str_to_print = "";
                        $str_to_print = "<tr> <td>{$row['id']}</td>";
                        $str_to_print .= "<td> {$row['name']}</td>";
                        $str_to_print .= "<td> {$row['phone']}</td>";
                        $str_to_print .= "<td> {$row['email']}</td>";
                        $str_to_print .= "<td> {$row['comments']}</td>";
                        
                        echo $str_to_print;
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>