<?php 
include('header.php');
include('connection.php');

$sqlData = "SELECT * FROM user WHERE isDelete=0";
$result = mysqli_query($connection,$sqlData);
$html = "<table class='table table-bordered table-danger' id='userData'>";
$html .= "<thead><tr><th>Name</th><th>Email</th><th>Action</th></tr></thead>";
if(mysqli_num_rows($result)> 0){
    $html .= "<tbody>";
    while($row = mysqli_fetch_assoc($result)){
        $html .= "<tr>";
         $html .= "<td>".$row['name']."</td>";
         $html .= "<td>".$row['email']."</td>";
         $html .= "<td><a href=edit.php?id=".$row['id']."><i class='fa-solid fa-pen fa-1x'></i></a>
         <a href=delete.php?id=".$row['id'].'" onclick=return confirm(\'Are you sure?\')><i class="fa-solid fa-trash"></i></a></td>';

         
        $html .= "</tr>"; 
    }
    $html .= "</tbody></table>";
    echo $html;
}

include('footer.php');
?>
