<div class="container-fluid" style="background-color: rgb(245,245,245);">
    <div class="row g-0 page-body mx-1 p-2 ">
        <div class="col-lg-3 col-md-3 col-sm-2 mt-0 ms-3">
            <div class="d-flex flex-row mb-3 col-12">
            <div class="pe-3">                  
                <img
                  src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                  class="rounded-circle"
                  height="50"
                  alt="Black and White Portrait of a Man"
                  loading="lazy"
                />
            </div>
                <div class="d-flex flex-column pe-2"> 
                    <div class="pb-2"><?php echo $user['username'];?></div>
                    <div>                
                    <img
                    src="<?php echo _WEB_ROOT."/public/assets/images/pen.png";?>" 
                  class="rounded-circle"
                  height="20"
                  alt="Black and White Portrait of a Man"
                  loading="lazy"
                /> Sửa hồ sơ</div>
                </div>
            </div>
            <div class="d-flex flex-column mb-3 col-12">
                <ul class="list-group">
                    <li class="list-group-item">
                    <a href=<?php echo _WEB_ROOT."/member/profile"; ?> class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#cafe-submenu" aria-expanded="false" aria-controls="cafe-submenu">
                        Tài khoản của tôi
                    </a>
                    <ul class="list-unstyled collapse" id="cafe-submenu">
                        <li><a href=<?php echo _WEB_ROOT."/member/profile"; ?>>Hồ sơ</a></li>
                        <li><a href=<?php echo _WEB_ROOT."/member/profile/change_password"; ?>>Đổi mật khẩu</a></li>
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
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('.sidebar .list-group-item').on('click', function() {
                        $(this).toggleClass('active').siblings().removeClass('active');
                        $(this).next('.sub-menu').slideToggle(200).siblings('.sub-menu').slideUp(200);
                    });
                });
            </script>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-10 mt-0 ms-4 p-3" style="background-color: rgb(255,255,255);">
            <div class="d-flex flex-column">
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
                                    echo '<div class="p-2" style="border-bottom:1px solid black;">
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