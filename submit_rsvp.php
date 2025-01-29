<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Simulated guest list (can replace this with a database or any other storage)
$guest_list = [
    "Julia Lang",
    "David Botero",
];

// Retrieve the submitted name from the POST request
$full_name = $_POST['full_name'] ?? '';

// Check if the submitted name is in the guest list
if (in_array($full_name, $guest_list)) {

    // If there is a match, redirect to the details page withing the same folder
    header("Location: details.html");
    exit(); // Make sure to exit after redirecting
} else {
    // If there is no match, show an error or redirect to a different page
    echo "Sorry, your name is not on the guest list.";
}
?>