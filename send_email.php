<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'includes/PHPMailer/PHPMailer.php';
require 'includes/PHPMailer/SMTP.php';
require 'includes/PHPMailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $result1 = $_POST['result1'] ?? 'N/A';
    $result2 = $_POST['result2'] ?? 'N/A';
    $image1 = $_POST['img1'] ?? '';
    $image2 = $_POST['img2'] ?? '';

    $path1 = __DIR__ . '/' . $image1;
    $path2 = __DIR__ . '/' . $image2;

    if (!file_exists($path1)) {
        echo json_encode(['status' => 'error', 'message' => 'Course image 1 not found.']);
        exit();
    }

    if (!file_exists($path2)) {
        echo json_encode(['status' => 'error', 'message' => 'Course image 2 not found.']);
        exit();
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'degraverytest@gmail.com';
        $mail->Password = 'oqrhirewigccpmyp';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('degraverytest@gmail.com', 'DEGRAVERY Results');
        $mail->addAddress($email);

        $mail->addEmbeddedImage($path1, 'course1img');
        $mail->addEmbeddedImage($path2, 'course2img');

        $mail->isHTML(true);
        $mail->Subject = 'Your Degravery Test Results';
        $mail->Body = "
            <h2 style='color: #2d3748;'>🎓 Your Degravery Course Results</h2>
            <div style='font-family: Arial, sans-serif;'>
                <h3>Course 1: $result1</h3>
                <img src='cid:course1img' style='width:300px; border-radius: 8px;'><br><br>

                <h3>Course 2: $result2</h3>
                <img src='cid:course2img' style='width:300px; border-radius: 8px;'>

                <p style='margin-top: 30px;'>Thank you for using <strong>Degravery</strong>! 🚀</p>
            </div>
        ";

        $mail->send();

        echo json_encode(['status' => 'success']);
        exit();

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => $mail->ErrorInfo]);
        exit();
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit();
}
