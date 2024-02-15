<?php
// Set CORS headers
header("Access-Control-Allow-Origin: https://www.amazon.in");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Load and output the actual HTML file
readfile("receive_data.html");
?>
