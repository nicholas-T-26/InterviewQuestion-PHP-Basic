<?php
// Disable error display to prevent output interference
ini_set('display_errors', '0');
// Enable output buffering to capture any unintended output
ob_start();

// Set content type to JSON
header('Content-Type: application/json; charset=UTF-8');
// Add header for debugging response length
header('X-Response-Length: ' . ob_get_length());

// Initialize response array
$response = [];

// Check if username is provided in the POST request
if (isset($_POST['username'])) {
    $username = trim($_POST['username']);
    
    // Verify if the username matches 'abc'
    if ($username === 'abc') {
        $response = [
            'status' => 'success',
            'message' => 'Verified'
        ];
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Error'
        ];
    }
} else {
    // Handle missing username input
    $response = [
        'status' => 'error',
        'message' => 'No username provided.'
    ];
}

// Clear any buffered output to ensure clean JSON
ob_end_clean();

// Output the JSON response and exit
echo json_encode($response);
exit;
?>
