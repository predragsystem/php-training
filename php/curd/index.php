<?php 
include('connection.php');

$sqlData = "SELECT * FROM user WHERE isDelete=0";
$result = mysqli_query($connection,$sqlData);
$html = "<table border='1'>";
$html .= "<tr><th>Name</th><th>Email</th></tr>";
if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result)){
        $html .= "<tr>";
         $html .= "<td>".$row['name']."</td>";
         $html .= "<td>".$row['email']."</td>";
         $html .= "<td><a href=edit.php?id=".$row['id'].">Edit</a></td>";
        $html .= '<td><a href="delete.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure?\')">Delete</a></td>';

         
        $html .= "</tr>"; 
    }
    echo $html;
}

?>
<a href="delete.php?id=22" onclick="return confirm('Are you sure?')">Link</a>
