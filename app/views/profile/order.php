<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/nav.css";?>>

<br><br>
<div class="row gy-4">  
    <div class="col-12 col-lg-3 border-end">
        <div class="sidebar">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                            <h4><?php echo $user['last_name']." ".$user['first_name'];?></h4>
                            <p class="text-secondary mb-1"><?php echo $user['phone_number'];?></p>
                        </div>
                    </div>

                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href=<?php echo _WEB_ROOT."/member/profile"; ?> class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#cafe-submenu" aria-expanded="false" aria-controls="cafe-submenu">
                                Tài khoản của tôi
                            </a>
                            <ul class="collapse submenu" id="cafe-submenu">
                                <li><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/member/profile"; ?>>Hồ sơ</a></li>
                                <li><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/member/profile/change_password"; ?>>Đổi mật khẩu</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <a href=<?php echo _WEB_ROOT."/member/order"; ?> class="sidebar-link">
                                Đơn mua
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href=<?php echo _WEB_ROOT."/member/cart"; ?> class="sidebar-link">
                                Giỏ hàng
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-9">
        <div class="card mb-3">
            <div class="card-body m-5">
                <div class="d-block mb-3">
                <div class="d-block mb-3">
                        <h2 class="d-block fw-bold">Đơn hàng của tôi</h2>
                        <span style="font-style:italic;">Nếu bạn có thắc gì về đơn hàng, vui lòng cho chúng tôi biết qua trang 
                        <a href="<?php echo _WEB_ROOT."/contact"; ?>" style="text-decoration:none;">liên hệ!</a></span>
                    </div>
                    <?php 
                    $len = count($orderArr);
                    if($len==0){
                        echo "<div><h1 style='text-align:center;'>Bạn chưa có đơn hàng nào</h1></div>";
                        echo "<div><a style='text-align:center;text-decoration:none;' href='"._WEB_ROOT."/product'><h2>Tiến hành mua hàng<h2></a></div>";
                    }else{
                        $my_id = $orderArr[0]['id'];
                        $totalPrice = $orderArr[0]['price']*$orderArr[0]['quantity'];
                        $totalQuantity = $orderArr[0]['quantity'];
                        $cur_arr =  0;
                        if($len >= 1){
                            for($i=1; $i<$len; $i++){
                                $cur_arr =  $i;
                                if($orderArr[$i]['id'] == $my_id){ 
                                    $totalQuantity += $orderArr[$i]['quantity'];
                                    $totalPrice += $orderArr[$i]['price']*$orderArr[$i]['quantity'];
                                }
                                else{
                                    echo '<div class="p-2 border-bottom">
                                    <div class="mb-2">
                                    <h4 style="font-style:italic; color:grey">Đơn hàng số '.$my_id.'</h4>';
                                    echo '<span><a style="text-decoration:none;" href='._WEB_ROOT.'/member/order/orderDetail?order_id='.$my_id.'>Xem chi tiết đơn hàng</a></span></div>';
                                    echo '<div class="row">
                                        <div class="col-4">Tổng giá: </div>
                                        <div class="col-8">'.$totalPrice.' đ</div>
                                    </div>';
                                    echo '<div class="row">
                                    <div class="col-4">Tổng số lượng: </div>
                                    <div class="col-8">'.$totalQuantity.' </div>
                                    </div>';
                                    echo '<div class="row">
                                    <div class="col-4">Ngày đặt hàng: </div>
                                    <div class="col-8">'.$orderArr[$i-1]['order_date'].' </div>
                                    </div>';
                                    echo '<div class="row">
                                    <div class="col-4">Tình trạng thanh toán: </div>
                                    <div class="col-8">'.$orderArr[$i-1]['payment_status'].' </div>
                                    </div>';
                                    echo '<div class="row">
                                    <div class="col-4">Trạng thái: </div>
                                    <div class="col-8">'.$orderArr[$i-1]['status'].' </div>
                                    </div>';
                                    echo '<div class="row">
                                    <div class="col-4">Địa chỉ nhận hàng: </div>
                                    <div class="col-8">'.$orderArr[$i-1]['address'].' </div>
                                    </div>';
                                    echo '<div class="row">
                                    <div class="col-4">Ghi chú: </div>
                                    <div class="col-8">'.$orderArr[$i-1]['description'] .' </div>
                                    </div>';
                                    echo "</div>";
                                    $totalPrice = $orderArr[$i]['price']*$orderArr[$i]['quantity'];
                                    $totalQuantity = $orderArr[$i]['quantity'];
                                    $my_id = $orderArr[$i]['id'];
                                }
                            }
                            echo '<div class="p-2">
                            <h4 style="font-style:italic; color:grey">Đơn hàng số '.$my_id.'</h4>';
                            echo '<span><a style="text-decoration:none;" href='._WEB_ROOT.'/member/order/orderDetail?order_id='.$my_id.'>Xem chi tiết đơn hàng</a></span></div>'; 
                            echo '<div class="row">
                                <div class="col-4">Tổng giá: </div>
                                <div class="col-8">'.$totalPrice.' đ</div>
                            </div>';
                            echo '<div class="row">
                            <div class="col-4">Tổng số lượng: </div>
                            <div class="col-8">'.$totalQuantity.' </div>
                            </div>';
                            echo '<div class="row">
                            <div class="col-4">Ngày đặt hàng: </div>
                            <div class="col-8">'.$orderArr[$cur_arr]['order_date'].' </div>
                            </div>';
                            echo '<div class="row">
                            <div class="col-4">Tình trạng thanh toán: </div>
                            <div class="col-8">'.$orderArr[$cur_arr]['payment_status'].' </div>
                            </div>';
                            echo '<div class="row">
                            <div class="col-4">Trạng thái: </div>
                            <div class="col-8">'.$orderArr[$cur_arr]['status'].' </div>
                            </div>';
                            echo '<div class="row">
                            <div class="col-4">Địa chỉ nhận hàng: </div>
                            <div class="col-8">'.$orderArr[$cur_arr]['address'].' </div>
                            </div>';
                            echo '<div class="row">
                            <div class="col-4">Ghi chú: </div>
                            <div class="col-8">'.$orderArr[$cur_arr]['description'] .' </div>
                            </div>';
                            echo "</div>";           
                        }
                    }  
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<br>