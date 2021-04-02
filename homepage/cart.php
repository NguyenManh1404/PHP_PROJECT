<?php
include '../connect.php';
$conn = new connect();
$conn->connect();





if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($conn->connect, "SELECT * from products where id='$id'");

    
if ($query) {
    
    $product = mysqli_fetch_assoc($query);
    $item = [
        'id' => $product['id'],
        'name' => $product['name_product'],
        'img' => $product['image_products'],
        'price' => $product['price_products'],
        'detail' => $product['detail'],
        'quantity' => 1
    ];
    // $_SESSION['soluong'][]=$item;
     
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] += 1;
    } else {
        $_SESSION['cart'][$id] = $item;
    }
}
}


?>