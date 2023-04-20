<?php 
echo 'Trang này dùng để hiển thị giỏ hàng của người dùng';
foreach($cart as $item){ ?>
    <a href=<?php echo _WEB_ROOT.'/member/cart/delete?id='.$item['id'];?>>Delete</a>
<?php echo '<pre>'; print_r($item); echo '</pre>';
}
?>
