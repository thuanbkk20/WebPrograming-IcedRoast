<?php 
echo 'Trang này dùng để hiển thị giỏ hàng của người dùng';
echo '<pre>';
foreach($cart as $item){ ?>
    <!-- Đây là nút delete tương ứng với từng sản phẩm, chỉnh sửa lại để nhìn đẹp hơn, còn link thì vẫn giữ nguyên -->
    <a href=<?php echo _WEB_ROOT.'/member/cart/delete?id='.$item['id'];?>>Delete</a>
    </pre>
    <!-- Đây là nút để thay đổi số lượng của từng sản phẩm -->
    <a href=<?php echo _WEB_ROOT.'/member/cart/updateQuantity?id='.$item['id'].'&sign=-';?>>-</a>
    <?php echo $item['quantity']; ?>
    <a href=<?php echo _WEB_ROOT.'/member/cart/updateQuantity?id='.$item['id'].'&sign=+';?>>+</a>
<?php echo '<pre>'; print_r($item); echo '</pre>';
}
?>

<form method="post" action=<?php echo _WEB_ROOT."/member/order/addOrder"; ?>>
<label>Địa chỉ nhận hàng</label>
<input type="text" name="address">
<label>Ghi chú đơn hàng</label>
<textarea name="description" placeholder="Ghi chú"></textarea>
<button type="submit">Đặt hàng</button>
</form>
