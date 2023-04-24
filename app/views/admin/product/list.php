<div>
    <a href=<?php echo _WEB_ROOT."/admin/ProductModify/create"; ?>>Thêm sản phẩm</a>
</div>
<table>
  <tr>
    <th>Tên</th>
    <th>Hình ảnh</th>
    <th>Giá</th>
    <th>Mô tả</th>
    <th>Tình trạng</th>
    <th>Phân loại</th>
    <th>Size</th>
  </tr>
  <?php
    foreach($productArr as $product){
        echo '<tr>';
        echo '<td>'.$product['name'].'</td>';
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