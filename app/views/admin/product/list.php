<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/ad_list.css";?>>


<div class="container row">
    <h3 class="col-lg-4">Quản lý sản phẩm</h3>
    <a class="col-lg-8 text-end text-decoration-none add-product" href=<?php echo _WEB_ROOT."/admin/ProductModify/create"; ?>>Thêm sản phẩm</a>
</div>

<div class="container">
  <table class="table table-striped table-hover">
    <tr class="table-dark">
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
        echo '<td class="product-title-sm">'.$product['name'].'</td>';
        echo '<td><img src='.$product['image'].' width="100" height="100"></td>';
        echo '<td>'.number_format($product['price'], 0, '.', ',').'</td>';
        echo '<td class="product-description-sm">'.$product['description'].'</td>';
        echo '<td>'.$product['status'].'</td>';
        echo '<td>'.$product['category'].'</td>';
        echo '<td>'.$product['size'].'</td>';
        echo '<td>';
        echo "<a href="._WEB_ROOT."/admin/ProductModify/update?id=".$product['id']." class='btn btn-update'>Sửa</a>";
        echo "<a href="._WEB_ROOT."/admin/ProductModify/delete?id=".$product['id']." class='btn btn-delete'>Xóa</a>";
        echo '</td></tr>';
      }
    ?>
  </table>
</div>

<div class="text-end my-3 mx-3">
  <?php
    if(isset($curPage) && (int)$curPage > 1){
      echo "<a class='text-decoration-none mx-2 num-page' href='"._WEB_ROOT."/admin/ProductModify?page=".($curPage-1)."'>Previous</a>";
    }else{
      echo "<a class='text-decoration-none mx-2 num-page disabled'>Previous</a>";
    }
    for($page = 1; $page <= $number_of_page; $page++) {
      if(isset($curPage) && (int)$curPage === $page){
        echo "<strong><a class='text-decoration-none num-page mx-2'>".$page."</a></strong>";
      } else{
        echo "<a class='text-decoration-none mx-2 num-page' href='"._WEB_ROOT."/admin/ProductModify?page=".$page."'>".$page."</a>";
      }
    }
    if(isset($curPage) && (int)$curPage < $number_of_page){
      echo "<a class='text-decoration-none mx-2 num-page' href='"._WEB_ROOT."/admin/ProductModify?page=".($curPage+1)."'>Next</a>";
    }else{
      echo "<a class='text-decoration-none mx-2 num-page disabled'>Next</a>";
    }
  ?>
</div>



