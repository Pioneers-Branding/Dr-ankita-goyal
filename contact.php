<?php
/**
 * Contact Form Handler
 * Dr. Ankita Laparoscopy Website
 */

header('Content-Type: application/json');

// Enable error reporting for debugging (disable in production)
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Configuration
$config = [
    'clinic_name' => 'Dr. Ankita Goyal Bansal - Laparoscopy Clinic',
    'clinic_email' => 'info@drankitalaparoscopy.in',
    'clinic_phone' => '+91 96912 12570',
    'address' => 'Sankalp Hospital, Ambikapur, Chhattisgarh'
];

// Response helper
function jsonResponse($success, $message, $data = []) {
    echo json_encode(array_merge([
        'success' => $success,
        'message' => $message
    ], $data));
    exit;
}

// Validate request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jsonResponse(false, 'Invalid request method.');
}

// Sanitize input
function sanitize($input) {
    if (is_array($input)) {
        return array_map('sanitize', $input);
    }
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// Get and sanitize form data
$name = sanitize($_POST['name'] ?? '');
$phone = sanitize($_POST['phone'] ?? '');
$email = sanitize($_POST['email'] ?? '');
$service = sanitize($_POST['service'] ?? '');
$message = sanitize($_POST['message'] ?? '');

// Validate required fields
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required.';
} elseif (strlen($name) < 2) {
    $errors[] = 'Name must be at least 2 characters.';
}

if (empty($phone)) {
    $errors[] = 'Phone number is required.';
} elseif (!preg_match('/^[0-9+\-\s]{10,}$/', $phone)) {
    $errors[] = 'Please enter a valid phone number.';
}

if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

// If there are validation errors, return them
if (!empty($errors)) {
    jsonResponse(false, implode(' ', $errors));
}

// Build email content
$emailSubject = "New Appointment Request from {$name}";

// Email body (HTML)
$emailBody = "
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #0F2E57; color: white; padding: 20px; text-align: center; }
        .content { background: #f9f9f9; padding: 20px; border-radius: 5px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #0F2E57; }
        .value { margin-top: 5px; }
        .footer { text-align: center; padding: 20px; color: #666; font-size: 12px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>New Appointment Request</h2>
            <p>{$config['clinic_name']}</p>
        </div>
        <div class='content'>
            <div class='field'>
                <div class='label'>Patient Name:</div>
                <div class='value'>{$name}</div>
            </div>
            <div class='field'>
                <div class='label'>Phone Number:</div>
                <div class='value'><a href='tel:{$phone}'>{$phone}</a></div>
            </div>
            " . (!empty($email) ? "
            <div class='field'>
                <div class='label'>Email Address:</div>
                <div class='value'><a href='mailto:{$email}'>{$email}</a></div>
            </div>
            " : "") . "
            <div class='field'>
                <div class='label'>Service Interested:</div>
                <div class='value'>" . (!empty($service) ? ucwords(str_replace('-', ' ', $service)) : 'General Inquiry') . "</div>
            </div>
            " . (!empty($message) ? "
            <div class='field'>
                <div class='label'>Message:</div>
                <div class='value'>{$message}</div>
            </div>
            " : "") . "
            <div class='field'>
                <div class='label'>Submitted At:</div>
                <div class='value'>" . date('F j, Y g:i A') . "</div>
            </div>
        </div>
        <div class='footer'>
            <p>This email was sent from the contact form on {$config['clinic_name']}</p>
            <p>Address: {$config['address']}</p>
        </div>
    </div>
</body>
</html>
";

// Email headers
$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/html; charset=UTF-8',
    'From: noreply@drankitalaparoscopy.in',
    'Reply-To: ' . ($email ?: $config['clinic_email']),
    'X-Mailer: PHP/' . phpversion()
];

// Try to send email (commented out - uncomment when email is configured)
// if (mail($config['clinic_email'], $emailSubject, $emailBody, implode("\r\n", $headers))) {
//     jsonResponse(true, 'Your message has been sent successfully!');
// } else {
//     jsonResponse(false, 'Failed to send email. Please try again or contact us directly.');
// }

// For demo purposes, save to a local file instead
$logFile = __DIR__ . '/contact_submissions.log';
$logEntry = sprintf(
    "[%s] Name: %s | Phone: %s | Email: %s | Service: %s | Message: %s\n",
    date('Y-m-d H:i:s'),
    $name,
    $phone,
    $email ?: 'N/A',
    $service ?: 'N/A',
    $message ?: 'N/A'
);

// Append to log file
file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);

// Success response
jsonResponse(true, 'Thank you! Your appointment request has been submitted. We will contact you shortly.', [
    'redirect' => 'thank-you.php'
]);
