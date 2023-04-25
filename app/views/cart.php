<div class="container-fluid">
    <div class="row p-4">
        <div class="d-flex justify-content-center col-lg-12 col-md-12 col-sm-12 mb-2">
            <h2>Giỏ hàng của bạn</h2>
        </div>        
        <div class="d-flex justify-content-center col-lg-12 col-md-12 col-sm-12 mb-2">
           <span id="inforCart"></span>
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
                            style="height: auto; width: 25%;"
                            alt="arrow"
                            loading="lazy"
                            />
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <p style='display:none' class="item_price"><?php echo $item["price"]; ?></p>
                    <div> <h6 class="card-subtitle text-body-secondary"><?php echo $item["price"]  ."đ" ; ?></h6></div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <div><p class="card-text"><?php echo $item["size"] ; ?></p></div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <div>
                            <div class="d-flex flex-row">
                                <div style="border:1px solid black;width:20px;" class="text-center">
                                <a href=<?php echo _WEB_ROOT.'/member/cart/updateQuantity?id='.$item['id'].'&sign=-';?> 
                                style="text-decoration-line:none;">
                                -
                                </a>
                                </div>
                                <div style="border:1px solid black;width:25px; background-color: #FFEFD5" class="item_quantity text-center"><?php echo $item['quantity']; ?> </div>
                                <div style="border:1px solid black; width:20px;" class="text-center">
                                <a href=<?php echo _WEB_ROOT.'/member/cart/updateQuantity?id='.$item['id'].'&sign=+';?>
                                style="text-decoration-line:none;">
                                    +
                                </a>
                                </div>
                            </div>
                        </div>
                    <div></div>
                    <div><h6 class="card-subtitle text-body-secondary" id="my_price"><?php $new_price = $item["price"]*$item['quantity'] ; echo $new_price  ."đ" ; ?></h6></div>
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
                                <input type="text" class="form-control"name="address" id="address"
                                placeholder="Địa chỉ nhận hàng" value="">
                                <span id="error" class="text-danger"></span>
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
                    <div style="color:red; font-weight:bold;"><h3 id="priceTotal"></h3></div>
                </div>
                <div>
                    <p>Phí vận chuyển sẽ được tính ở ngoài khu vực thành phố. <br>
                     Bạn cũng có thể nhập mã giảm giá ở trang đặt hành</p>
                </div>
                    <div class="d-grid gap-3 mb-2">
                        <button type="submit" class="btn btn-danger" id="payment">Đặt hàng</button>
                    </div>
                    <div class="text-center" style="font-style:italic;">
                    <a href="<?php echo _WEB_ROOT."/product"; ?>" style="text-decoration:none;">
                    <img
                    src="<?php echo _WEB_ROOT."/public/assets/images/return.png";?>" 
                    style="height: auto; width: 5% !important;"
                    alt="arrow"
                    loading="lazy"
                    />
                    Tiếp tục mua hàng
                    </a>
                </div>
                    
            </div>
       </div>
 </div>
</div>

<script type="text/javascript">
    function validateAddress(address) {
        if(address.length == 0){
            document.getElementById("error").innerText="Vui lòng điền địa chỉ nhận hàng!"
            return false;
        }
        else if(address.length < 5 || address.length > 50){
            document.getElementById("error").innerText="Vui lòng nhập địa chỉ có độ dài từ 5 đến 50 kí tự!"
            return false
        }
        return true;
    }
    var totalPrice = 0;
    var y = document.querySelectorAll(".item_price");
    var x=document.querySelectorAll(".item_quantity");
    var totalItem=0;
    for(var i = 0; i < x.length; i++) {
        totalItem += parseInt(x[i].innerText);
        totalPrice += parseInt(y[i].innerText)*totalItem;
    }
    document.getElementById("inforCart").innerText="Có " + totalItem + " sản phẩm trong giỏ hàng";
    document.getElementById("priceTotal").innerText=totalPrice + "đ";
    $(document).ready(function() {
            $("#payment").click(function() {
                if(totalItem > 0) {
                    console.log("aa")
            var addr = document.getElementById("address").value;
            console.log(addr)
            if(validateAddress(addr)){
                $("#cartform").submit();
            }
        }
       });
    });
</script>
