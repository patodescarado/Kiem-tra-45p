<?php

$products = [
    ['name' => 'Laptop', 'price' => 15000000, 'quantity' => 2],
    ['name' => 'Chuột không dây', 'price' => 250000, 'quantity' => 10],
    ['name' => 'Bàn phím cơ', 'price' => 900000, 'quantity' => 5],
];

function totalValue(array $products): int|float
{
    $total = 0;
    foreach ($products as $p) {
        $total += $p['price'] * $p['quantity'];
    }
    return $total;
}

// Hiển thị thông tin tất cả sản phẩm
foreach ($products as $p) {
    echo "Tên: {$p['name']} | Giá: " . number_format($p['price'])
        . " | Số lượng: {$p['quantity']}<br>";
}

echo "<strong>Tổng giá trị: " . number_format(totalValue($products)) . " VNĐ</strong>";

?>
