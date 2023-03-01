<?php

$hostname="localhost";
$username="root";
$password="";
$database="itable";

$conn=mysqli_connect($hostname,$username,$password,$database);

if(!$conn){
    echo "connection unsucessful";

}
//fetch query
$sql="SELECT * FROM 'data'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo "information of student<br>";
    echo $row['username'];
    echo $row['email'];
    echo $row['phone'];
}
//delete query
$sql="DELETE FROM 'data' WHERE 'id'=$id";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "data deleted successfully";
}
else{
    echo "error query failed";
}
//update query
$sql="UPDATE 'data' set username='$username' WHERE 'id'=$id";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "data updated successfully";
}
else{
    echo "error query failed";
}

?>