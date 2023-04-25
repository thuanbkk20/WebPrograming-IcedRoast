<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/ad_list.css";?>>

<div>
    <a href=<?php echo _WEB_ROOT."/admin/ProductModify/create"; ?>>Thêm sản phẩm</a>
</div>

<div class="container">
  <table class="table table-warning">
    <tr>
      <th>Tên</th>
      <th>Hình ảnh</th>
      <th>Giá</th>
      <th>Mô tả</th>
      <th>Tình trạng</th>
      <th>Phân loại</th>
      <th>Size</th>
      <th></th>
    </tr>
    <?php
      foreach($productArr as $product){
          echo '<tr>';
          echo '<td class="product-title">'.$product['name'].'</td>';
          echo '<td><img src='.$product['image'].' width="50" height="50"></td>';
          echo '<td>'.$product['price'].'</td>';
          echo '<td>'.$product['description'].'</td>';
          echo '<td>'.$product['status'].'</td>';
          echo '<td>'.$product['category'].'</td>';
          echo '<td>'.$product['size'].'</td>';
          echo '<td>';
          echo "<a href="._WEB_ROOT."/admin/ProductModify/update?id=".$product['id'].">Sửa</a>";
          echo "<a href="._WEB_ROOT."/admin/ProductModify/delete?id=".$product['id'].">Xóa</a>";
          echo '</td></tr>';
      }
    ?>
  </table>
</div>

<?php
  if(isset($curPage)&&(int)$curPage>1){
    echo "<a href = "._WEB_ROOT."/admin/ProductModify?page=".($curPage-1).">Previous</a>";
  }else{
    echo "<a href='#'>Previous</a>";
  }
  for($page = 1; $page<= $number_of_page; $page++) {
    echo "<a href = "._WEB_ROOT."/admin/ProductModify?page=".$page.">".$page."</a>";
  }
  if(isset($curPage)&&(int)$curPage<$number_of_page){
    echo "<a href = "._WEB_ROOT."/admin/ProductModify?page=".($curPage+1).">Next</a>";
  }else{
    echo "<a href='#'>Next</a>";
  }
?>