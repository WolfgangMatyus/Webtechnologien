<?php

require_once 'dbaccess.inc.php';
require_once 'functions.inc.php';

$resultData = getAllUsers($conn);
echo '
        <tr>
        <td>ID: </td>
        <td>Username: </td>
        <td>Hashed PW: </td>
        <td>E-mail: </td>
        <td>Full Name: </td>
        <td>Gender: </td>
        <td>Admin: </td>
        <td>Status: </td>';
if ($resultData->num_rows > 0) {
    // output data of each row  
    while($row = $resultData->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["usersId"]. " </td>
            <td>" . $row["usersUid"]. " </td>
            <td>" . $row["usersPwd"]. " </td>
            <td>" . $row["usersEmail"]. " </td>
            <td>" . $row["usersName"]. " </td>
            <td>" . $row["usersGender"]. " </td>
            " ?><?php if($row["usersAdmin"] == 0){echo'<td> NO </td>';}else{echo '<td> YES </td>';}; ?><?php "
            " ?><?php if($row["usersStatus"] == 1){echo'<td> active </td>';}else{echo '<td> inactive </td>';}; ?><?php echo"   
            <td><form action='../included/change.inc.php' method='POST'><button type='submit' value='" . $row["usersId"] . "' name='edit'>edit</button></form></td>
            <tr>";
    };
} else {
      echo "0 results";
}