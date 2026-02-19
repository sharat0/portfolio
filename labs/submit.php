x<?php
/**
 * AJAX Handler for Waitlist Form Submission
 * USB Data Blocker Waitlist
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

require_once '_config.php';

// Get and sanitize input
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$role = isset($_POST['role']) ? trim($_POST['role']) : '';

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required';
} elseif (strlen($name) < 2) {
    $errors[] = 'Name must be at least 2 characters';
} elseif (strlen($name) > 255) {
    $errors[] = 'Name is too long';
}

if (empty($email)) {
    $errors[] = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format';
} elseif (strlen($email) > 255) {
    $errors[] = 'Email is too long';
}

if (empty($role)) {
    $errors[] = 'Role is required';
} elseif (!in_array($role, ['individual', 'business', 'security-professional', 'developer', 'other'])) {
    $errors[] = 'Invalid role selected';
}

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode('. ', $errors)]);
    exit;
}

// Connect to database
$conn = getDBConnection();

// Prepare statement to check for duplicate email
$stmt = $conn->prepare("SELECT id FROM waitlist WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $stmt->close();
    $conn->close();
    echo json_encode(['success' => false, 'message' => 'This email is already on the waitlist.']);
    exit;
}
$stmt->close();

// Insert new record
$stmt = $conn->prepare("INSERT INTO waitlist (name, email, role) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $role);

if ($stmt->execute()) {
    $response = [
        'success' => true,
        'message' => 'Successfully added to waitlist!'
    ];
} else {
    // Check if it's a duplicate key error
    if ($conn->errno === 1062) {
        $response = [
            'success' => false,
            'message' => 'This email is already on the waitlist.'
        ];
    } else {
        error_log("Database error: " . $conn->error);
        $response = [
            'success' => false,
            'message' => 'An error occurred. Please try again later.'
        ];
    }
}

$stmt->close();
$conn->close();

echo json_encode($response);
?>
