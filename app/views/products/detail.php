
<!-- Set title -->
<title><?=
    !empty($page_title)?$page_title:"No name"
?></title>

<!-- <h1>Chào bạn, đây là trang product detail</h1> -->

<?php
    echo '<pre>'; print_r($data); echo '</pre>';
?>
<form action=<?php echo _WEB_ROOT."/member/cart"; ?>>
    <input type="hidden" name="product_id" value=<?php echo $data['mainProduct']['id'];?>>
    <select name="size">
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
    </select>
    <input type="number" name="price" value=<?php echo $data['mainProduct']['price'];?>>
    <input type="number" name="quantity" value=1>
<button type="submit">Thêm vào giỏ hàng</button>
</form>

