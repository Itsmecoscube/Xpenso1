<?php
$mysqli = new mysqli('localhost', 'root', '', 'safespend-2');
$var = $_SESSION['user_name'];
$query = "SELECT * FROM shopping natural join creates where Email = '$var'";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["item_ID"];
        $field2name = $row["item_name"];
        $field3name = (float)$row["item_price"];
        $field4name = (float)$row["quantity"];
        $field5name = $row["item_cat"];
        echo '<tr> 
                  <td>' . $field1name . '</td> 
                  <td>' . $field2name . '</td> 
                  <td>' . "Rs. " . $field3name . '</td> 
                  <td>' . $field4name . '</td> 
                  <td>' . $field5name . '</td> 
                  <td>' . "Rs. " . ($field3name*$field4name) . '</td>';
    }
    $result->free();
}
?>