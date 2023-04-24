<?php
    echo '<pre>'; print_r($contactArr); echo '</pre>';
?>
<table>
  <tr>
    <th>Tên</th>
    <th>Số điện thoại</th>
    <th>Email</th>
    <th>Lời nhắn</th>
    <th>Xóa liên hệ</th>
  </tr>
  <?php
    foreach($contactArr as $contact){
        echo '<tr>';
        echo '<td>'.$contact['name'].'</td>';
        echo '<td>'.$contact['phone_number'].'</td>';
        echo '<td>'.$contact['email'].'</td>';
        echo '<td>'.$contact['detail'].'</td>';
        echo '<td>';
        echo "<a href="._WEB_ROOT."/admin/ContactModify/delete?id=".$contact['id'].">Xóa</a>";
        echo '</td></tr>';
    }
  ?>
</table>