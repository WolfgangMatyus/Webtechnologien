<?php

require_once 'dbaccess.inc.php';
require_once 'functions.inc.php';

$resultData = getAllUsers($conn);

if ($resultData->num_rows > 0) {
    // output data of each row
    echo '<div class="usersTable d-flex justify-content-center"
        <table>
        <tr>
        <td>ID: </td>
        <td>Username: </td>
        <td>Hashed PW: </td>
        <td>E-mail: </td>
        <td>Full Name: </td>
        <td>Gender: </td>
        <td>Admin?: </td>
        <td>Status: </td>';
    while($row = $resultData->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["usersId"]. " </td>
            <td>" . $row["usersUid"]. " </td>
            <td>" . $row["usersPwd"]. " </td>
            <td>" . $row["usersEmail"]. " </td>
            <td>" . $row["usersName"]. " </td>
            <td>" . $row["usersGender"]. " </td>
            <td><form action='../indlude/change.inc.php' method='POST'><button type='submit' value='Edit' name='edit'></form></td>
            " ?><?php if($row["usersAdmin"] == 0){echo'<td> NO </td>';}else{echo '<td> YES </td>';}; ?><?php "
            " ?><?php if($row["usersStatus"] == 0){echo'<td> active </td>';}else{echo '<td> inactive </td>';}; ?><?php "
            <td><form action='../indlude/change.inc.php' method='POST'><button type='submit' value='Edit' name='edit'></form></td>
            <tr><br>";
    }
    echo '</table>
        </div>';
} else {
      echo "0 results";
}


/*   
    for ($row = 0; $row < $arrlength; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 8; $col++) {
          echo "<li>". $userData[$row][$col] . "</li>";
        }
        echo "</ul>";
      }
*/