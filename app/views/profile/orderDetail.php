<header>
<link rel="stylesheet" href=<?php echo _WEB_ROOT."/p"; ?> type="text/css">
</header>
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
                    <!-- <div class="pb-2"><?php echo $user['username'];?></div> -->
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
                    <a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#cafe-submenu" aria-expanded="false" aria-controls="cafe-submenu">
                        Tài khoản của tôi
                    </a>
                    <ul class="list-unstyled collapse" id="cafe-submenu">
                        <li><a href="#">Hồ sơ</a></li>
                        <li><a href="#">Đổi mật khẩu</a></li>
                    </ul>
                    </li>
                    <li class="list-group-item">
                    <a href="#" class="sidebar-link">
                        Đơn mua
                    </a>
                    </li>
                    <li class="list-group-item">
                    <a href="#" class="sidebar-link">
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
                                    echo "<img src='".$item["image"]."' style='width:90%;height:150px;'>";
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
                                                    echo $item['price'];
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
                                        echo $totalPrice;                                           
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