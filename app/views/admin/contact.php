<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/ad_list.css";?>>

<div class="container row">
    <h3 class="col-lg-5">Quản lý thông tin liên hệ</h3>
</div>
<div class="container">
    <table class="table table-striped table-hover mt-3" id="table_data" style="table-layout: fixed; white-space: nowrap;">
        <thead class="table-dark">
            <tr>
                <th scope="col" style="width: 5% !important;">ID</th>
                <th scope="col" style="width: 10% !important;">Họ tên</th>
                <th scope="col" style="width: 10% !important;">SĐT</th>
                <th scope="col" style="width: 15% !important;">Email</th>
                <th scope="col">Lời nhắn</th>
                <th scope="col">Thời gian</th>
                <th style="width: 10% !important;">Xóa liên hệ</th>           
            </tr>
        </thead>

        <tbody>
            <?php foreach($contactArr as $contact){ ?>
            <tr>
                <td>
                    <?php echo $contact['id'] ?>
                </td>
            
                <td style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis">
                    <?php echo $contact['name'] ?>
                </td>
                
                <td style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis">
                    <?php echo $contact['phone_number'] ?>
                </td>
                <td style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis">
                    <?php echo $contact['email'] ?>
                </td>
                <td style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis">
                    <?php echo $contact['detail'] ?>
                </td>
                <td style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis">
                    <?php echo $contact['time'] ?>
                </td>
                <td style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis">
                <?php
                    echo '<button class="btn btn-danger" onclick="location.href=\''. _WEB_ROOT .'/admin/ContactModify/delete?id='. $contact['id'] .'\'" style="margin-right: 20px;">Xóa</button>';
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
      echo "<a class='text-decoration-none mx-2 num-page' href='"._WEB_ROOT."/admin/ContactModify?page=".($curPage-1)."'>Previous</a>";
    }else{
      echo "<a class='text-decoration-none mx-2 num-page disabled'>Previous</a>";
    }
    for($page = 1; $page <= $number_of_page; $page++) {
      if(isset($curPage) && (int)$curPage === $page){
        echo "<strong><a class='text-decoration-none num-page mx-2'>".$page."</a></strong>";
      } else{
        echo "<a class='text-decoration-none mx-2 num-page' href='"._WEB_ROOT."/admin/ContactModify?page=".$page."'>".$page."</a>";
      }
    }
    if(isset($curPage) && (int)$curPage < $number_of_page){
      echo "<a class='text-decoration-none mx-2 num-page' href='"._WEB_ROOT."/admin/ContactModify?page=".($curPage+1)."'>Next</a>";
    }else{
      echo "<a class='text-decoration-none mx-2 num-page disabled'>Next</a>";
    }
  ?>
</div>

        
            
         
     