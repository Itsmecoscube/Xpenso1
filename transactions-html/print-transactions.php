<?php
                $mysqli = new mysqli('localhost', 'root', '', 'xpenso');
                $var = $_SESSION['user_name'];
                $query = "SELECT * FROM transaction join performs on TID = Transaction_ID where Emailperforms = '$var'";

                echo '<table border="5" cellspacing="2" cellpadding="2" width = "70%" margin:auto> 
      <tr height="60px"> 
          <td bgcolor="#AEF28A" > <font face="Arial">Transaction ID</font> </td> 
          <td bgcolor="#AEF28A" width="20%"> <font face="Arial">Amount</font> </td> 
          <td bgcolor="#AEF28A" width="22%"> <font face="Arial">Mode of Payment</font> </td> 
          <td bgcolor="#AEF28A"> <font face="Arial">Date</font> </td> 
          <td bgcolor="#AEF28A"> <font face="Arial">Time</font> </td> 
          <td bgcolor="#AEF28A"> <font face="Arial">Type</font> </td> 
      </tr>';

                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $field1name = $row["TID"];
                        $field2name = $row["Mode"];
                        $field3name = $row["Date"];
                        $field4name = $row["Type"];
                        $field5name = $row["Amount"];
                        $field6name = $row["time"];
                        $field6name = date("h:m:s a",strtotime($field6name));
                        if($field4name == 'Debit'){
                        echo '<tr> 
                  <td>' . $field1name . '</td> 
                  <td>' . "Rs. " . $field5name . '</td> 
                  <td>' . $field2name . '</td> 
                  <td>' . $field3name . '</td> 
                  <td>' . $field6name . '</td> 
                  <td bgcolor="#FF2A00">' . $field4name . '</td>  
              </tr>';
            }
            else{
                echo '<tr> 
          <td>' . $field1name . '</td> 
          <td>' . "Rs. " . $field5name . '</td> 
          <td>' . $field2name . '</td> 
          <td>' . $field3name . '</td> 
          <td>' . $field6name . '</td> 
          <td bgcolor="#77D500">' . $field4name . '</td> 
      </tr>';
    }
                    }
                    $result->free();
                }
                ?>