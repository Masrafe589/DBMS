
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sponsorship";


$con= new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($con->connect_error){
    die("Connection failed");
}

$query="select * from insrt";
$var=$con->query($query);

while($row=$var->fetch_assoc()){
   echo"<tr>
   <td> $row[name]</td>
   <td> $row[email]</td>
   <td> $row[phone]</td>
   <td> $row[Idea]</td>

   </tr>";
}



