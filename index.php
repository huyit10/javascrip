<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Form GET - Bài 1</title>
</head>

<body>

    <!-- Form nhập dữ liệu -->
    <form action="" method="GET">
        <label>Nhập tên:</label>
        <input type="text" name="name" required><br><br>

        <label>Nhập tuổi:</label>
        <input type="number" name="age" required><br><br>

        <button type="submit">Gửi</button>
    </form>

    <hr>

    <?php
    // Kiểm tra nếu tồn tại dữ liệu GET
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = htmlspecialchars($_GET['name']); // Xử lý chống XSS
        $age = (int)$_GET['age']; // Ép kiểu tuổi thành số nguyên

        echo "Chào <strong>$name</strong>, bạn <strong>$age</strong> tuổi.";
    }
    ?>

</body>

</html>