<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/nav.css";?>>

<br><br>
<div class="row gy-4">  
    <div class="col-12 col-lg-3 border-end">
        <div class="sidebar">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                            <h4><?php echo $user['last_name']." ".$user['first_name'];?></h4>
                            <p class="text-secondary mb-1"><?php echo $user['phone_number'];?></p>
                            <p class="text-muted font-size-sm">Quản Trị Viên</p>
                        </div>
                    </div>

                    <ul class="list-group">
                        <span class="list-group-item">Vui lòng chọn thao tác:</span>
                        <li class="list-group-item">
                            <a href=<?php echo _WEB_ROOT."/admin/userModify";?> class="sidebar-link">
                                Quản lý người dùng
                            </a>
                        </li>                
                        <li class="list-group-item">
                            <a href=<?php echo _WEB_ROOT."/admin/productModify";?> class="sidebar-link">
                                Quản lý sản phẩm
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href=<?php echo _WEB_ROOT."/admin/orderModify";?> class="sidebar-link">
                                Quản lý đơn hàng
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href=<?php echo _WEB_ROOT."/admin/contactModify";?> class="sidebar-link">
                                Quản lý liên hệ
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-9">
        <?php $this->render($content, $sub_content);?>
    </div>
</div>