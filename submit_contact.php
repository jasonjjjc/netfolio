<?php
$host = 'localhost';  // your host
$db   = 'portfolio';  // your database name
$user = 'root';   // your database username
$pass = 'root';   // your database password
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$response = ["status" => "", "message" => ""];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (empty($firstName) || empty($lastName) || empty($email) || empty($message)) {
        $response["status"] = "error";
        $response["message"] = "Please fill out all required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response["status"] = "error";
        $response["message"] = "Invalid email format.";
    } else {
        $stmt = $pdo->prepare('INSERT INTO contacts (first_name, last_name, email, subject, message) VALUES (?, ?, ?, ?, ?)');
        if ($stmt->execute([$firstName, $lastName, $email, $subject, $message])) {
            $response["status"] = "success";
            $response["message"] = "Your message has been sent successfully.";
        } else {
            $response["status"] = "error";
            $response["message"] = "There was an error submitting your message.";
        }
    }
}

echo json_encode($response);
?>
