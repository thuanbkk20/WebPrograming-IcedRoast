


            <!-- Table list of user -->
            <div class="user_container mx-auto" style="height: 700px; width: 92%;">
                <div class="row">
                <h1 class="d-flex justify-content-between" style="margin-left: 700px; ">Quản lí thông tin người dùng</h1>
                </div>
                <div style="width:70%;float:right;">
                  <a href=<?php echo _WEB_ROOT."/admin/UserModify/create"; ?>>
                    <button type="button" class="btn btn-primary">Thêm tài khoản</button>

                  </a>
                  
                </div>

                <br/>
                <br/>
                <table class="table table-hover mt-3 mx-auto" id="table_data" style="table-layout: fixed; white-space: nowrap; width:92%;">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Tên</th>
                    <th scope="col">Họ và tên lót</th>
                    <th scope="col">Tên tài khoản</th>
                    <th scope="col">SĐT</th>
                    <th scope="col">Vai trò</th>
                    <th scope="col">Chức năng</th>


                                   
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($userArr as $user){ ?>
                    <tr>
                    <td style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis">
                        <?php echo $user['first_name'] ?>
                    </td>
                    
                   
                    <td style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis">
                        <?php echo $user['last_name'] ?>
                    </td>
                    
                    <td style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis">
                        <?php echo $user['username'] ?>
                    </td>
                    <td style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis">
                        <?php echo $user['phone_number'] ?>
                    </td>
                    <td style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis">
                        <?php echo $user['role'] ?>
                    </td>
                    <td style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis">
                    <?php
                        if($user['role'] != 'admin'){
                            echo '<button class="btn btn-primary mr-2" onclick="location.href=\''. _WEB_ROOT .'/admin/UserModify/update?id='. $user['id'] .'\'" style="margin-right: 20px;">Sửa</button>';
                            echo '<button class="btn btn-danger" onclick="location.href=\''. _WEB_ROOT .'/admin/UserModify/delete?id='. $user['id'] .'\'" style="margin-right: 20px;">Xóa</button>';
                        }
                    ?>



                    </td>
                    
                    
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
                </table>
            </div>
        
            
         
     