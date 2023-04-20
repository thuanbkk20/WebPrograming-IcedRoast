<!-- Set title -->
<title><?=
    !empty($page_title)?$page_title:"No name"
?></title>

<!-- <h1>Chào bạn, đây là trang product detail</h1> -->

<?php
    echo '<pre>'; print_r($data); echo '</pre>';
?>
<form action=<?php echo _WEB_ROOT."/member/cart"; ?>>

<button type="submit">Thêm vào giỏ hàng</button>
</form>

