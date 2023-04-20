<?php 
echo 'Trang này dùng để hiển thị giỏ hàng của người dùng';
foreach($cart as $item){ 
    // echo _WEB_ROOT.'/member/cart/delete?id='.$item['id'];
    echo '<pre>'; print_r($item); echo '</pre>';
}
?>
