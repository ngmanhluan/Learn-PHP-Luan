<!DOCTYPE html>
<html>
<head>
    <title>Kết quả học tập</title>
</head>
<body>
    <h2>Kết quả học tập</h2>
    <form method="post" action="">
        <label for="diemhk1">Điểm HK1:</label>
        <input type="number" id="diemhk1" name="diemhk1" required><br><br>
        
        <label for="diemhk2">Điểm HK2:</label>
        <input type="number" id="diemhk2" name="diemhk2" required><br><br>
        
        <label for="diemtrungbinh">Điểm trung bình:</label>
        <input type="text" id="diemtrungbinh" name="diemtrungbinh" readonly><br><br>
        
        <label for="ketqua">Kết quả:</label>
        <input type="text" id="ketqua" name="ketqua" readonly><br><br>
        
        <label for="xeploai">Xếp loại học lực:</label>
        <input type="text" id="xeploai" name="xeploai" readonly><br><br>
        
        <input type="submit" value="Xem kết quả">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị điểm HK1 và HK2 từ form
        $diemhk1 = $_POST["diemhk1"];
        $diemhk2 = $_POST["diemhk2"];
        
        // Tính điểm trung bình
        $diemtrungbinh = ($diemhk1 + $diemhk2) / 2;
        
        // Xử lý kết quả học tập và xếp loại học lực
        if ($diemtrungbinh >= 9 && $diemtrungbinh <= 10) {
            $ketqua = "Được lên lớp";
            $xeploai = "Giỏi";
        } elseif ($diemtrungbinh >= 7 && $diemtrungbinh < 9) {
            $ketqua = "Được lên lớp";
            $xeploai = "Khá";
        } else {
            $ketqua = "Không được lên lớp";
            $xeploai = "Trung bình";
        }
        
        // Hiển thị kết quả
        echo "<script>document.getElementById('diemtrungbinh').value = $diemtrungbinh;</script>";
        echo "<script>document.getElementById('ketqua').value = '$ketqua';</script>";
        echo "<script>document.getElementById('xeploai').value = '$xeploai';</script>";
    }
    ?>
</body>
</html>