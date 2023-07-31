<!DOCTYPE html>
<html>
<head>
    <title>Tính diện tích hình chữ nhật</title>
</head>
<body>
    <h2>Tính diện tích hình chữ nhật</h2>
    <form method="post" action="">
        <label for="chieudai">Chiều dài:</label>
        <input type="number" id="chieudai" name="chieudai" required><br><br>
        
        <label for="chieurong">Chiều rộng:</label>
        <input type="number" id="chieurong" name="chieurong" required><br><br>
        
        <label for="dientich">Diện tích:</label>
        <input type="text" id="dientich" name="dientich" readonly><br><br>
        
        <input type="submit" value="Tính">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị chiều dài và chiều rộng từ form
        $chieudai = $_POST["chieudai"];
        $chieurong = $_POST["chieurong"];
        
        // Tính diện tích
        $dientich = $chieudai * $chieurong;
        
        // Hiển thị kết quả
        echo "<script>document.getElementById('dientich').value = $dientich;</script>";
    }
    ?>
</body>
</html>