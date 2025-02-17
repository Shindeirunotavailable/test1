<?php
include 'db.php';

if (isset($_GET['id'])) {
    $customerId = $_GET['id'];

    try {
        // เตรียมคำสั่ง SQL เพื่อทำการลบข้อมูลจากฐานข้อมูล
        $stmt = $pdo->prepare("DELETE FROM customers WHERE id = ?");
        $stmt->execute([$customerId]);

        // ส่งผู้ใช้กลับไปที่หน้าหลักหลังจากการลบ
        header("Location: examination.php?success=1");
        exit();
    } catch (PDOException $e) {
        // ถ้ามีข้อผิดพลาด เกิดขึ้น ส่งข้อผิดพลาดไปยังหน้าหลัก
        header("Location: examination.php?error=" . urlencode($e->getMessage()));
        exit();
    }
}
?>
