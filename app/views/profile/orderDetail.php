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
                    <div class="mb-1">
                            <h2 class="d-block fw-bold">Thông tin chi tiết về đơn hàng <?php echo $orderInfo[0]['id']; ?> </h2>
                            <div style="font-style:italic;" >
                                <a href="<?php echo _WEB_ROOT."/member/order"; ?>" style="text-decoration:none;">       
                                <img
                                    src="<?php echo _WEB_ROOT."/public/assets/images/back.png";?>" 
                                    style="height: auto; width: 2%;"
                                    alt="arrow"
                                    loading="lazy"
                                    />              
                                    Quay lại đơn hàng
                                </a>
                            </div>
                        </div>
                        <?php
                        $totalPrice = 0;
                            foreach($orderInfo as $item){
                                $totalPrice += $item['price']*$item['quantity'];
                                echo '<div class="row p-2" style="border-top:1px solid black"> ';
                                    echo '<div class="col-lg-3 col-md-3 col-sm-6">';
                                        echo '<a href='._WEB_ROOT.'/product/detail?id='.$item['product_id'].'>';
                                    echo "<img src='".$item["image"]."' style='width:90%;height:150px;'>";
                                echo '</a>';
                                    echo '</div>';
                                    echo '<div class="col-lg-9 col-md-9 col-sm-6">';
                                    echo '<div class="d-flex flex-column justify-content-start">';

                                        echo '<div class="d-flex justify-content-between mb-2">'; 
                                            echo '<div>';
                                                echo "Mã sản phẩm";
                                            echo "</div>";
                                            echo '<div>';
                                                echo $item['product_id'];
                                            echo "</div>";
                                        echo "</div>";

                                        echo '<div class="d-flex justify-content-between mb-2">'; 
                                                echo '<div>';
                                                    echo "Số lượng";
                                                echo "</div>";
                                                echo '<div>';
                                                    echo $item['quantity'];
                                                echo "</div>";
                                        echo "</div>";

                                            echo '<div class="d-flex justify-content-between mb-2">'; 
                                                    echo '<div>';
                                                        echo "Giá sản phẩm";
                                                    echo "</div>";
                                                    echo '<div>';
                                                        echo number_format($item['price'], 0, ",", ",") . "đ";
                                                    echo "</div>";
                                            echo "</div>";

                                            echo '<div class="d-flex justify-content-between mb-2">'; 
                                                    echo '<div>';
                                                        echo "Tên sản phẩm";
                                                    echo "</div>";
                                                    echo '<div>';
                                                        echo $item['name'];
                                                    echo "</div>";
                                            echo "</div>";

                                            echo '<div class="d-flex justify-content-between mb-2">'; 
                                                    echo '<div>';
                                                        echo "Kích thước sản phẩm";
                                                    echo "</div>";
                                                    echo '<div>';
                                                        echo $item['size'];
                                                    echo "</div>";
                                            echo "</div>";

                                    echo "</div>";                                   
                                    echo "</div>";
                                echo '</div>';
                            }
                            echo '<div style="border-top:1px solid black"></div>';       
                            echo '<div class="row">';
                                echo '<div class="col-lg-6 col-md-6 col-sm-6">';
                                echo '</div>';
                            echo '<div class="col-lg-6 col-md-6 col-sm-6">';
                                echo '<div class="d-flex flex-column justify-content-start">';

                                echo '<div class="d-flex justify-content-between mb-2">'; 
                                    echo '<div>';
                                        echo 'Ngày đặt hàng: ';                                           
                                    echo '</div>';
                                    echo '<div style="color:blue">';
                                        echo $orderInfo[0]['order_date'];;                                 
                                    echo '</div>';
                                echo '</div>';

                                echo '<div class="d-flex justify-content-between mb-2">'; 
                                    echo '<div>';
                                        echo 'Tình trạng thanh toán: ';                                           
                                    echo '</div>';
                                    echo '<div style="color:blue">';
                                        echo $orderInfo[0]['payment_status'];;                                 
                                    echo '</div>';
                                echo '</div>';

                                echo '<div class="d-flex justify-content-between mb-2">'; 
                                    echo '<div>';
                                        echo 'Trạng thái: ';                                           
                                    echo '</div>';
                                    echo '<div style="color:blue">';
                                        echo $orderInfo[0]['status'];;                                 
                                    echo '</div>';
                                echo '</div>';

                                
                                echo '<div class="d-flex justify-content-between mb-2">'; 
                                    echo '<div>';
                                        echo 'Địa chỉ đơn hàng: ';                                           
                                    echo '</div>';
                                    echo '<div style="color:blue">';
                                        echo $orderInfo[0]['address'];;                                 
                                    echo '</div>';
                                echo '</div>';

                                
                                echo '<div class="d-flex justify-content-between mb-2">'; 
                                    echo '<div>';
                                        echo 'Ghi chú từ khách hàng: ';                                           
                                    echo '</div>';
                                    echo '<div style="color:blue">';
                                        echo $orderInfo[0]['description'];;                                 
                                    echo '</div>';
                                echo '</div>';

                                    echo '<div class="d-flex justify-content-between mb-2">'; 
                                        echo '<div>';
                                            echo 'Tổng tiền hàng: ';                                           
                                        echo '</div>';
                                        echo '<div style="color:red">';
                                            echo number_format($totalPrice, 0, ",", ",")." đ";                                           
                                        echo '</div>';
                                    echo '</div>';

                                echo '</div';
                            echo '</div>';
                        echo '</div>';     
                    echo '</div>';          
                    ?>               
                </div>
            </div>
        </div>
    </div>
</div>
<br>
