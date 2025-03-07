<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'portfolio';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo json_encode(["errors" => ["Database connection failed"]]);
    exit;
}

$errors = [];

$email = $_POST['email'] ?? null;
$name = $_POST['name'] ?? null;
$topic = $_POST['topic'] ?? null;
$comments = $_POST['comments'] ?? null;

if (!$email) $errors[] = "Email field is empty.";
if (!$name) $errors[] = "Name field is empty.";
if (!$topic) $errors[] = "Topic field is empty.";
if (!$comments) $errors[] = "Comments field is empty.";

if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "\"$email\" is not a valid email address.";
}

if ($errors) {
    echo json_encode(["errors" => $errors]);
    exit;
}

try {
    $stmt = $pdo->prepare("INSERT INTO contact (email, name, topic, comments) VALUES (:email, :name, :topic, :comments)");
    $stmt->execute([
        ":email" => $email,
        ":name" => $name,
        ":topic" => $topic,
        ":comments" => $comments
    ]);

    echo json_encode(["message" => "Form submitted. Thank you for your interest!"]);
} catch (PDOException $e) {
    echo json_encode(["errors" => ["Database error"]]);
}
?>