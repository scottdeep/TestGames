
<?php
// URL of the JSON file
$json_file_url = 'https://magnetcents.com/coupons/database/pushnotifications/data_spit.php'; // Replace with the actual URL of your JSON file

// Fetch JSON data from the file
$json_data = file_get_contents($json_file_url);

// Set the appropriate content type for JSON
header('Content-Type: application/json');

// Output the JSON data in the response
echo $json_data;
?>
