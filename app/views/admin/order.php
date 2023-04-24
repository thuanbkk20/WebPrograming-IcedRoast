<?php
    //Đây là array chứa danh sách toàn bộ order
    echo '<pre>'; print_r($orderArr); echo '</pre>';
    //Các record có cùng giá trị của cột id là thuộc cùng 1 order, ứng với mỗi order sẽ được hiển thị dưới dạng 1 cột trong bảng
    //Admin có các nút chức năng chỉnh sửa payment_status và status của order ứng với đường link sau
    ///////// Chỉnh payment_status: _WEB_ROOT."/admin/OrderModify/paymentStatus dữ liệu cần truyền cho chức năng này là id của đơn hàng ứng với name là 'id' và paymentStatus mới ứng với name là 'paymentStatus'
    ///////// Chỉnh status: _WEB_ROOT."/admin/OrderModify/status dữ liệu cần truyền cho chức năng này là id của đơn hàng ứng với name là 'id' và status mới ứng với name là 'status'
?>