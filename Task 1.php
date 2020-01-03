<?php 
// PHP program to add days to $Date 
  
// Declare a date 
$Date = date("Y-m-d"); 
  
// Add days to date and display it 
echo date('Y-m-d', strtotime($Date. ' + 30 days')); 
  
?> 