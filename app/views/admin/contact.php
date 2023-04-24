<!-- Table list of contact -->
<div class="user_container mx-auto" style="height: 700px; width: 92%;">
    <div class="row">
    <h1 class="d-flex justify-content-between" style="margin-left: 700px; ">Quản lí thông tin liên hệ</h1>
    </div>

    
    <table class="table table-hover mt-3" id="table_data" style="table-layout: fixed; white-space: nowrap;">
    <thead class="table-dark">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Họ tên</th>
        <th scope="col">SĐT</th>
        <th scope="col">Email</th>
        <th scope="col">Lời nhắn</th>
        <th scope="col">Thời gian</th>
        <th>Xóa liên hệ</th>
                        
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
    <?php
    if(isset($curPage)&&(int)$curPage>1){
        echo "<a href = "._WEB_ROOT."/admin/ContactModify?page=".($curPage-1).">Previous</a>";
    }else{
        echo "<a href='#'>Previous</a>";
    }
    for($page = 1; $page<= $number_of_page; $page++) {
        echo "<a href = "._WEB_ROOT."/admin/ContactModify?page=".$page.">".$page."</a>";
    }
    if(isset($curPage)&&(int)$curPage<$number_of_page){
        echo "<a href = "._WEB_ROOT."/admin/ContactModify?page=".($curPage+1).">Next</a>";
    }else{
        echo "<a href='#'>Next</a>";
    }
    ?>
</div>


        
            
         
     