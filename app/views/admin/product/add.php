<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/ad_list.css";?>>

<div class="row py-3">
    <div class="col-lg-1"></div>

    <div class="col-lg-8 text-middle">
        <h1 class="d-flex justify-content-between">Thêm sản phẩm</h1>
        <form class="p-4 border rounded mx-auto" method="post" action="<?php echo _WEB_ROOT.'/admin/ProductModify/create';?>" style="background-color: #FEF3D7">
            <!-- form content -->
            <div>
                <span >
                    <?php echo (empty($msg)?false:$msg); ?>
                </span>
            </div>
            <!-- form content -->

            <div class="form-outline mb-4">
                <input type="text" id="name" name="name" placeholder="Tên sản phẩm" class="form-control form-control-lg" 
                value="<?php echo (empty($old['name'])?false:$old['name']);?>"/>
                <span >
                    <?php echo (empty($errors['name'])?false:$errors['name']); ?>
                </span>
            </div>

            <div class="form-outline mb-4">
                <input type="text" id="image" name="image"  placeholder="Link hình ảnh" class="form-control form-control-lg" 
                value="<?php echo (empty($old['image'])?false:$old['image']);?>"/>
                <span >
                    <?php echo (empty($errors['image'])?false:$errors['image']); ?>
                </span>
            </div>

            <div class="form-outline mb-4">
                <input type="number" id="price" name="price" placeholder="Giá tiền" class="form-control form-control-lg" 
                value="<?php echo (empty($old['price'])?false:$old['price']);?>"/>
                <span >
                    <?php echo (empty($errors['price'])?false:$errors['price']);?>
                </span>
            </div>

            <div class="form-outline mb-4">
                <input type="text" id="description" name="description" placeholder="Mô tả" class="form-control form-control-lg" 
                value="<?php echo (empty($old['description'])?false:$old['description']);?>"/>
                <span >
                    <?php echo (empty($errors['description'])?false:$errors['description']);?>
                </span>
            </div>

            <div class="form-outline mb-4">
                <select id="size" name="size">
                    <option value="S" <?php if(isset($old['size'])&&$old['size']=='S') echo 'selected="selected"'; ?>>S</option>
                    <option value="M" <?php if(isset($old['size'])&&$old['size']=='M') echo 'selected="selected"'; ?>>M</option>
                    <option value="L" <?php if(isset($old['size'])&&$old['size']=='L') echo 'selected="selected"'; ?>>L</option>
                </select>
            </div>

            <div class="form-outline mb-4">
                <input type="text" id="category" name="category" placeholder="Phân loại" class="form-control form-control-lg" 
                value="<?php echo (empty($old['category'])?false:$old['category']);?>"/>
                <span >
                    <?php echo (empty($errors['category'])?false:$errors['category']); ?>
                </span>
            </div>

            <div class="form-outline mb-4">
                <select id="status" name="status">
                    <option value="Stocking" <?php if(isset($old['status'])&&$old['status']=='Stocking') echo 'selected="selected"'; ?>>Stocking</option>
                    <option value="Out of stock" <?php if(isset($old['status'])&&$old['status']=='Out of stock') echo 'selected="selected"'; ?>>Out of stock</option>
                </select>
            </div>

            </span>
            <div class="d-flex justify-content-center">
                        <button type="submit"
                        class="btn btn-update">Thêm sản phẩm</button>
            </div>
        </div>
                    
        </form>
    </div>

    <div class="col-lg-2">

    </div>
</div>



<br/><br/>




