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

<div class="container-fluid">
    <div class="row p-4">
        <div class="d-flex justify-content-center col-lg-12 col-md-12 col-sm-12 mb-2">
            <h2>Giỏ hàng của bạn</h2>
        </div>        
        <div class="d-flex justify-content-center col-lg-12 col-md-12 col-sm-12 mb-2">
           <span><?php echo "Có" . " ". $item['quantity'] . " sản phẩm trong giỏ hàng";  ?></span>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-6">
            <div class="row mb-4 p-2" style="border-bottom:1px solid black;">
            <?php foreach($cart as $item){ ?>
            <div class="col-lg-3 col-md-3 col-sm-4"><?php 
            echo "<img src='".$item["image"]."' style='width:90%;height:150px;'>" ?>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 ms-0 ps-0" >
            <div class="d-flex flex-column justify-content-start mt-2">
                <div class="d-flex justify-content-between mb-2">
                    <div><h5 class="card-title"><?php echo $item["name"] ; ?></h5></div>
                    <div class="text-center">
                        <a href=<?php echo _WEB_ROOT.'/member/cart/delete?id='.$item['id'];?>>                 
                            <img
                            src="<?php echo _WEB_ROOT."/public/assets/images/delete.png";?>" 
                            style="height: auto; width: 40%;"
                            alt="arrow"
                            loading="lazy"
                            />
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <div> <h6 class="card-subtitle text-body-secondary"><?php echo $item["price"]  ."đ" ; ?></h6></div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <div><p class="card-text"><?php echo $item["size"] ; ?></p></div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <div>
                            <div class="d-flex flex-row">
                                <div style="border:1px solid black; background-color:aqua">
                                <a href=<?php echo _WEB_ROOT.'/member/cart/updateQuantity?id='.$item['id'].'&sign=-';?> 
                                style="text-decoration-line:none;">
                                -
                                </a>
                                </div>
                                <div style="border:1px solid black; color:brown" id="q1"> <?php echo $item['quantity']; ?> </div>
                                <div style="border:1px solid black; background-color:aqua">
                                <a href=<?php echo _WEB_ROOT.'/member/cart/updateQuantity?id='.$item['id'].'&sign=+';?>
                                style="text-decoration-line:none;">+</a>
                                </div>
                            </div>
                        </div>
                    <div></div>
                    <div>30,000đ</div>
                </div>
            </div>
            </div>
            <?php } ?>     
        </div>
        <div>
      </div>
                <div class="mt-2 row"> 
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <h3>Ghi chú đơn hàng</h3>
                        <form method="post" action=<?php echo _WEB_ROOT."/member/order/addOrder"; ?> id="cartform">
                            <div class="form-group mb-2">
                                <label for="address">Địa chỉ nhận hàng</label>
                                <input type="text" class="form-control"name="address" 
                                placeholder="Địa chỉ nhận hàng" value="">
                            </div>
                            <div class="form-group">
                                <label for="note">Ghi chú đơn hàng</label>
                                <textarea class="form-control" id="note" name="description" rows="3" placeholder="Ghi chú"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger" style="display:none"></button>
                        </form>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6">
                                <h3>Chính sách mua hàng</h3>
                                <div class="d-flex flex-row">
                                    <div class="p-2">
                                        <img
                                        src="<?php echo _WEB_ROOT."/public/assets/images/arrow.png";?>" 
                                        style="height: auto; width: 50%;"
                                        alt="arrow"
                                        loading="lazy"
                                        />
                                    </div>
                                    <div class="p-2"><p>
                                             Quí khách được kiểm tra hàng trước khi thanh toán, giữ lại hóa đơn để tích thêm điểm tích lũy.
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="p-2">
                                        <img
                                        src="<?php echo _WEB_ROOT."/public/assets/images/arrow.png";?>" 
                                        style="height: auto; width: 50%;"
                                        alt="arrow"
                                        loading="lazy"
                                        />
                                    </div>
                                    <div class="p-2">Đổi sản phẩm trong 10' kể từ lúc nhận hàng nếu phát hiện sản phẩm không đúng yêu cầu.
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="p-2">
                                        <img
                                        src="<?php echo _WEB_ROOT."/public/assets/images/arrow.png";?>" 
                                        style="height: auto; width: 50%;"
                                        alt="arrow"
                                        loading="lazy"
                                        />
                                    </div>
                                    <div class="p-2">Giao hàng từ 20'-40' từ lúc đặt hàng, giao hàng từ 7h sáng đến 7h tối các ngày trong tuần.
                                    </div>
                                </div>
                        </div>
                </div>
    </div> 
    <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="d-flex flex-column p-2" style="border:0.5px solid black;">
                <div class="mt-2" style="border-bottom:1px solid black"><h3>Thông tin đơn hàng</h3></div>
                <div class="mt-2 d-flex justify-content-between" style="border-bottom:1px solid black">
                    <div>Tổng tiền:</div>
                    <div style="color:red; font-weight:bold;"><h3>267000</h3></div>
                </div>
                <div>
                    <p>Phí vận chuyển sẽ được tính ở trang thanh toán. <br>
                     Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
                </div>

                <!-- <form method="post" action=<?php echo _WEB_ROOT."/member/order/addOrder"; ?>> -->
                    <div class="d-grid gap-3 mb-2">
                        <button type="submit" class="btn btn-danger" id="payment">Thanh toán</button>
                    </div>
                <!-- </form> -->

                    
            </div>
       </div>
 </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
       $("#payment").click(function() {
        alert("You entered p1!");
       });
    });
    // var x = document.getElementById("q1").value;
    // console.log(x);
</script>
