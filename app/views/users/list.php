<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/ad_list.css";?>>

<!-- Table list of user -->
<div class="container mx-auto">
  <div class="row">
    <h3 class="col-lg-8">Quản lý thông tin người dùng</h3>
    <a class="col-lg-4 text-end my-2" href=<?php echo _WEB_ROOT."/admin/UserModify/create"; ?>>
      <button type="button" class="btn btn-warning">Thêm tài khoản</button>
    </a>
  </div>
  <table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
        <th scope="col">Tên</th>
        <th scope="col">Họ</th>
        <th scope="col">Tên tài khoản</th>
        <th scope="col">SĐT</th>
        <th scope="col">Vai trò</th>
        <th scope="col" style="width:13%!important;">Chức năng</th>           
        </tr>
    </thead>
    <tbody>
        <?php foreach($userArr as $user){ ?>
        <tr>
          <td style>
              <?php echo $user['first_name'] ?>
          </td>
          
          <td style>
              <?php echo $user['last_name'] ?>
          </td>
          
          <td style>
              <?php echo $user['username'] ?>
          </td>

          <td style>
              <?php echo $user['phone_number'] ?>
          </td>

          <td style>
              <?php echo $user['role'] ?>
          </td>
          
          <td>
            <?php
                if($user['role'] != 'admin'){
                    echo '<button class="btn btn-update" onclick="location.href=\''. _WEB_ROOT .'/admin/UserModify/update?id='. $user['id'] .'\'" style="margin-right: 20px;">Sửa</button>';
                    echo '<button class="btn btn-delete" onclick="location.href=\''. _WEB_ROOT .'/admin/UserModify/delete?id='. $user['id'] .'\'" style="margin-right: 20px;">Xóa</button>';
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

<div class="text-end my-3 mx-3">
  <?php
    if(isset($curPage) && (int)$curPage > 1){
      echo "<a class='text-decoration-none mx-2 num-page' href='"._WEB_ROOT."/admin/userModify?page=".($curPage-1)."'>Previous</a>";
    }else{
      echo "<a class='text-decoration-none mx-2 num-page disabled'>Previous</a>";
    }
    for($page = 1; $page <= $number_of_page; $page++) {
      if(isset($curPage) && (int)$curPage === $page){
        echo "<strong><a class='text-decoration-none num-page mx-2'>".$page."</a></strong>";
      } else{
        echo "<a class='text-decoration-none mx-2 num-page' href='"._WEB_ROOT."/admin/userModify?page=".$page."'>".$page."</a>";
      }
    }
    if(isset($curPage) && (int)$curPage < $number_of_page){
      echo "<a class='text-decoration-none mx-2 num-page' href='"._WEB_ROOT."/admin/userModify?page=".($curPage+1)."'>Next</a>";
    }else{
      echo "<a class='text-decoration-none mx-2 num-page disabled'>Next</a>";
    }
  ?>
</div>



