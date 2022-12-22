<?php
$mysqli = new mysqli('localhost', 'root', '', 'xpenso');
$var = $_SESSION['user_name'];
$query = "SELECT * FROM budget join keeps on BID = Budget_ID where Emailkeeps = '$var'";

echo '<table border="5" cellspacing="2" cellpadding="2" width = "70%" margin:auto style="border:5px solid black; border-radius:10px;"> 
      <tr height="60px"> 
          <td bgcolor="#AEF28A" > <font face="Arial">Budget ID</font> </td> 
          <td bgcolor="#AEF28A" width="20%"> <font face="Arial">Total Amount</font> </td> 
          <td bgcolor="#AEF28A" width="22%"> <font face="Arial">Spent Amount</font> </td> 
          <td bgcolor="#AEF28A"> <font face="Arial">Remaining Amount</font> </td> 
          <td bgcolor="#AEF28A"> <font face="Arial">Category</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["BID"];
        $field2name = (int) $row["Total_amount"];
        $field3name = (int) $row["Spent_amount"];
        $field4name = $field2name - $field3name;
        $field5name = $row["category"];
        echo '<tr> 
                  <td>' . $field1name . '</td> 
                  <td>' . "Rs. " . $field2name . '</td> ';
                  
        if ($field2name < $field3name)
            echo '<td bgcolor="red">' . "Rs. " . $field3name . '</td> ';
        else if (($field3name > ((8 / 10) * $field2name)) && ($field3name <= $field2name))
            echo '<td bgcolor="#FFA600">' . "Rs. " . $field3name . '</td> ';
        else
            echo '<td bgcolor="#8EFF00">' . "Rs. " . $field3name . '</td> ';

        echo '<td>' . "Rs. " . $field4name . '</td> 
              <td>' . $field5name . '</td> 
          </tr>';

    }
    $result->free();
}
?>