<?php
    //$orderArr là array chứa danh sách toàn bộ order
    //Các record có cùng giá trị của cột id là thuộc cùng 1 order, ứng với mỗi order sẽ được hiển thị dưới dạng 1 cột trong bảng
    //Admin có các nút chức năng chỉnh sửa payment_status và status của order ứng với đường link sau
    ///////// Chỉnh payment_status: _WEB_ROOT."/admin/OrderModify/paymentStatus dữ liệu cần truyền cho chức năng này là id của đơn hàng ứng với name là 'id' và paymentStatus mới ứng với name là 'paymentStatus'
    ///////// Chỉnh status: _WEB_ROOT."/admin/OrderModify/status dữ liệu cần truyền cho chức năng này là id của đơn hàng ứng với name là 'id' và status mới ứng với name là 'status'
?>
<!-- Đừng xóa cái này -->
<input type="hidden" id="webRoot" value=<?php echo _WEB_ROOT;?>>
<div class="table-responsive">
<table  class="table table-secondary table-hover table-striped align-middle">
  <thead style="text-align:center;">
    <tr class="table-active table-danger">
      <th scope="col">Mã đơn hàng</th>
      <th scope="col">Mã người dùng</th>
      <th scope="col">Thời gian đặt hàng</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Tình trạng đơn hàng</th>
      <th scope="col">Tình trạng thanh toán</th>
      <th scope="col">Số lượng sản phẩm</th>
      <th scope="col">Tổng giá</th>
    </tr>
  </thead>
  <tbody style="text-align:center;">
  <?php
    foreach($orderArr as $order){
        echo '<tr class="table-primary">';
        echo '<th scope="row">'.$order['id'].'</th>';
        echo '<td>'.$order['user_id'].'</td>';
        echo '<td>'.$order['time'].'</td>';
        echo '<td>'.$order['address'].'</td>';
        //Đoạn này tạo một dropdown list cho admin chỉnh status
        echo '<td>';
        echo "<select class='status' name='status' id='".$order['id']."'>";
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
        echo "<select class='payment_status' name='payment_status' id='".$order['id']."'>";
        echo "<option value='Chưa thanh toán'";
        if($order['payment_status']=='Chưa thanh toán') echo "selected>Chưa thanh toán</option>"; else echo ">Chưa thanh toán</option>";
        echo "<option value='Đã thanh toán'";
        if($order['payment_status']=='Đã thanh toán') echo "selected>Đã thanh toán</option>"; else echo ">Đã thanh toán</option>";
        echo "</select>";
        echo '</td>';
        echo '<td>'.$order['quantity'].'</td>';
        echo '<td>'.$order['price'].'</td>';
        echo '</tr>';
    }
  ?>
  </tbody>
</table>
</div>
<!-- <?php
 if(isset($curPage)&&(int)$curPage>1){
  echo "<a href = "._WEB_ROOT."/admin/OrderModify?page=".($curPage-1).">Previous</a>";
}
else{
  echo "<a href='#'>Previous</a>";
}
  for($page = 1; $page<= $number_of_page; $page++) {
    echo "<a href = "._WEB_ROOT."/admin/OrderModify?page=".$page.">".$page."</a>";
  }
  if(isset($curPage)&&(int)$curPage<$number_of_page){
    echo "<a href = "._WEB_ROOT."/admin/OrderModify?page=".($curPage+1).">Next</a>";
  }else{
    echo "<a href='#'>Next</a>";
  }
?> -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item">
      <?php 
      if(isset($curPage)&&(int)$curPage>1){
        echo '<a class="page-link" href = '._WEB_ROOT.'/admin/OrderModify?page='.($curPage-1).'>';
        echo 'Previous';
        echo '</a>';
      }
      else{
        echo '<a class="page-link" page href="#">';
        echo 'Previous';
        echo '</a>';
      }
      ?>
    </li>
    <li class="page-item">
      <?php  
      for($page = 1; $page<= $number_of_page; $page++) {
            echo '<a class="page-link" href = '._WEB_ROOT.'/admin/OrderModify?page='.$page.'>';
            echo $page;
            echo '</a>';
          }
     ?>
    </li>
    <li class="page-item">
          <?php 
            if(isset($curPage)&&(int)$curPage<$number_of_page){
              echo '<a class="page-link" href = '._WEB_ROOT.'/admin/OrderModify?page='.($curPage+1).'>';
              echo 'Next';
              echo '</a>';
            }else{
              echo '<a class="page-link" href="#">';
              echo 'Next';
              echo '</a>';
            }
          ?>
    </li>
  </ul>
</nav>  
<script>
    $(document).ready(function(){
        var webRoot = $("#webRoot").val()
        $('.status').on('change', function() {
            var id = $(this).attr("id");
            var value = this.value;
            $.ajax({url:webRoot+'/admin/OrderModify/status?id='+id+'&status='+value,success: function(result){
                console.log(result)
            }});
        });
        $('.payment_status').on('change', function() {
            var id = $(this).attr("id");
            var value = this.value;
            $.ajax({url:webRoot+'/admin/OrderModify/paymentStatus?id='+id+'&paymentStatus='+value,success: function(result){
                console.log(result)
            }});
        });
    });
</script>