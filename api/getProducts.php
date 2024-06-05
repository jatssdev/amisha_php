<?php

header('Content-Type: application/json');

// Retrieve the raw POST data
$rawData = file_get_contents("php://input");

// Decode the JSON data
$data = json_decode($rawData, true); // The second parameter `true` converts it to an associative array
// Access the 'email' key in the associative array
if (isset($data['email'])) {
    echo $data['email'];
} else {
    echo json_encode(array('error' => 'Email not found in the data'));
}

// include '../conn.php';

// // Check the database connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Define the query
// $q = "SELECT * FROM products";
// $result = mysqli_query($conn, $q);

// // Check if the query was successful
// if (!$result) {
//     die("Query failed: " . mysqli_error($conn));
// }

// $products = array();

// // Fetch data from the result set
// while ($row = mysqli_fetch_assoc($result)) {
//     // Ensure all special characters are properly escaped
//     $row = array_map('htmlspecialchars', $row);
//     $products[] = $row;
// }

// // Close the result set
// mysqli_free_result($result);

// // Close the database connection
// mysqli_close($conn);
// // Set the content type to JSON
// header('Access-Control-Allow-Origin:*');

// // Output the JSON encoded data
// echo json_encode($products, JSON_UNESCAPED_SLASHES);

?>