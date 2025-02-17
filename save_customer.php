
<?php
include 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    if (!empty($fullname) && !empty($email) && !empty($address)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO customers (fullname, email, address) VALUES (?, ?, ?)");
            $stmt->execute([$fullname, $email, $address]);
            header("Location: examination.php?success=1");
            exit();
        } catch (PDOException $e) {
            header("Location: examination.php?error=" . urlencode($e->getMessage()));
            exit();
        }
    } else {
        header("Location: examination.php?error=กรุณากรอกข้อมูลให้ครบถ้วน");
        exit();
    }
}
?>