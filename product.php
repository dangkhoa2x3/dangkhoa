<!DOCTYPE html>
<html>

<head>
  <title>Chi tiết sản phẩm</title>
  <link rel="stylesheet" href="./csss.css">
</head>
<style>
body {
  text-align: center;
}

img {
  width: 300px;
}

p {
  padding: 0 239px;
  text-align: justify;
}

h3 {
  position: relative;
}
</style>

<body>
  <?php
        include 'data.php';

        // Lấy ID sản phẩm từ tham số truy vấn
        $productId = $_GET['id'];

        // Tìm sản phẩm có ID tương ứng
        $product = null;
        foreach ($products as $p) {
            if ($p['mahh'] == $productId) {
                $product = $p;
                break;
            }
        }

        // Hiển thị chi tiết sản phẩm
        if ($product) {
            echo '<h1>' . $product['tenhh'] . '</h1>';
            echo '<img src="hinh/' . $product['hinh'] . '" alt="' . $product['tenhh'] . '">';
            echo '<h3> Giá: ' . number_format($product['gia'], 0, ',', '.') . ' VNĐ</h3>';
            echo '<p>Mô tả: ' . nl2br($product['mota']) . '</p>';
        } else {
            echo '<p>Không tìm thấy sản phẩm.</p>';
        }
    ?>

</body>

</html>