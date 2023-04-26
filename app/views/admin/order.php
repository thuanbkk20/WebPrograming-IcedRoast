<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/ad_list.css";?>>

<?php
    //$orderArr là array chứa danh sách toàn bộ order
    //Các record có cùng giá trị của cột id là thuộc cùng 1 order, ứng với mỗi order sẽ được hiển thị dưới dạng 1 cột trong bảng
    //Admin có các nút chức năng chỉnh sửa payment_status và status của order ứng với đường link sau
    ///////// Chỉnh payment_status: _WEB_ROOT."/admin/OrderModify/paymentStatus dữ liệu cần truyền cho chức năng này là id của đơn hàng ứng với name là 'id' và paymentStatus mới ứng với name là 'paymentStatus'
    ///////// Chỉnh status: _WEB_ROOT."/admin/OrderModify/status dữ liệu cần truyền cho chức năng này là id của đơn hàng ứng với name là 'id' và status mới ứng với name là 'status'
?>
<!-- Đừng xóa cái này -->
<input type="hidden" id="webRoot" value=<?php echo _WEB_ROOT;?>>
  <div class="container row">
    <h3 class="col-lg-8">Quản lý đơn hàng</h3>
  </div>
<div class="container mx-auto">
<table class="table table-striped table-hover">
  <thead class="table-dark">
    <tr>
      <th scope="col" style="width: 7% !important;">Mã đơn</th>
      <th scope="col">Mã khách</th>
      <th scope="col">Thời gian</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Đơn hàng</th>
      <th scope="col">Thanh toán</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Tổng giá</th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach($orderArr as $order){
        echo '<tr>';
        echo '<th>'.$order['id'].'</th>';
        echo '<td>'.$order['user_id'].'</td>';
        echo '<td>'.$order['time'].'</td>';
        echo '<td>'.$order['address'].'</td>';
        //Đoạn này tạo một dropdown list cho admin chỉnh status
        echo '<td>';
        echo "<select class='status form-select' name='status' id='".$order['id']."'>";
          echo "<option value='Chưa xác nhận'";
          if($order['status']=='Chưa xác nhận') echo "selected>Chưa xác nhận</option>"; else echo ">Chưa xác nhận</option>";
          echo "<option value='Đã xác nhận'";
          if($order['status']=='Đã xác nhận') echo "selected>Đã xác nhận</option>"; else echo ">Đã xác nhận</option>";
          echo "<option value='Đang giao hàng'";
          if($order['status']=='Đang giao hàng') echo "selected>Đang giao hàng</option>"; else echo ">Đang giao hàng</option>";
          echo "<option value='Đã nhận hàng'";
          if($order['status']=='Đã nhận hàng') echo "selected>Đã nhận hàng</option>"; else echo ">Đã nhận hàng</option>";
        echo "</select>";
        echo '</td>';
        //Đoạn này tạo một dropdown list cho admin chỉnh payment status
        echo '<td>';
        echo "<select class='payment_status form-select' name='payment_status' id='".$order['id']."'>";
        echo "<option value='Chưa thanh toán'";
        if($order['payment_status']=='Chưa thanh toán') echo "selected>Chưa thanh toán</option>"; else echo ">Chưa thanh toán</option>";
        echo "<option value='Đã thanh toán'";
        if($order['payment_status']=='Đã thanh toán') echo "selected>Đã thanh toán</option>"; else echo ">Đã thanh toán</option>";
        echo "</select>";
        echo '</td>';
        echo '<td>'.$order['quantity'].'</td>';
        echo '<td class="text-danger">'.number_format($order['price'], 0, ",", ",")." đ".'</td>';
        echo '</tr>';
    }
  ?>
  </tbody>
</table>
</div>

<div class="text-end my-3 mx-3">
  <?php
    if(isset($curPage) && (int)$curPage > 1){
      echo "<a class='text-decoration-none mx-2 num-page' href='"._WEB_ROOT."/admin/OrderModify?page=".($curPage-1)."'>Previous</a>";
    }else{
      echo "<a class='text-decoration-none mx-2 num-page disabled'>Previous</a>";
    }
    for($page = 1; $page <= $number_of_page; $page++) {
      if(isset($curPage) && (int)$curPage === $page){
        echo "<strong><a class='text-decoration-none num-page mx-2'>".$page."</a></strong>";
      } else{
        echo "<a class='text-decoration-none mx-2 num-page' href='"._WEB_ROOT."/admin/OrderModify?page=".$page."'>".$page."</a>";
      }
    }
    if(isset($curPage) && (int)$curPage < $number_of_page){
      echo "<a class='text-decoration-none mx-2 num-page' href='"._WEB_ROOT."/admin/OrderModify?page=".($curPage+1)."'>Next</a>";
    }else{
      echo "<a class='text-decoration-none mx-2 num-page disabled'>Next</a>";
    }
  ?>
</div>

<script type="text/javascript" src=<?php echo _WEB_ROOT."/public/assets/js/order.js";?>></script>