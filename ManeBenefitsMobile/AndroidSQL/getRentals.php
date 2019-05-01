<?php 
$user = "root";  
$password = "";  
$host ="localhost";  
$db_name ="businessDBAndroid";  
$con = mysqli_connect($host,$user,$password,$db_name);  
$sql = "select * from businesses where category= 'Rentals'"; 
// Confirm there are results
if ($result = mysqli_query($con, $sql))
{
 // We have results, create an array to hold the results
        // and an array to hold the data
 $resultArray = array();
 $tempArray = array();
 
 // Loop through each result
 while($row = $result->fetch_object())
 {
 // Add each result into the results array
 $tempArray = $row;
     array_push($resultArray, $tempArray);
 }
 
 // Encode the array to JSON and output the results
 echo json_encode($resultArray);
}
 
// Close connections
mysqli_close($con);
?>   