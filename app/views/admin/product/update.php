<h1>Chỉnh sửa sản phẩm</h1>
<form method="post" action=<?php echo _WEB_ROOT.'/admin/ProductModify/update';?>>
    <div>
        <span >
            <?php echo (empty($msg)?false:$msg); ?>
        </span>
    </div>
    <div>
        <h3>Id sản phẩm: <?php echo $productToUpdate['id'];?></h3>
        <input type="hidden" name="id" value="<?php echo $productToUpdate['id'];?>"/>
    </div>
    <div>

    <div class="form-outline mb-4">
        <input type="text" id="name" name="name" placeholder="Tên sản phẩm" class="form-control form-control-lg" 
        value="<?php echo (empty($old['name'])?$productToUpdate['name']:$old['name']);?>"/>
        <span >
        <?php echo (empty($errors['name'])?false:$errors['name']); ?>
        </span>
    </div>

    </div>
    <div class="form-outline mb-4">
        <input type="text" id="image" name="image"  placeholder="Link hình ảnh" class="form-control form-control-lg" 
        value="<?php echo (empty($old['image'])?$productToUpdate['image']:$old['image']);?>"/>
    <span >
        <?php echo (empty($errors['image'])?false:$errors['image']); ?>
    </span>
    </div>

    <div class="form-outline mb-4">
        <input type="number" id="price" name="price"  placeholder="Giá sản phẩm" class="form-control form-control-lg" 
        value="<?php echo (empty($old['price'])?$productToUpdate['price']:$old['price']);?>"/>
    <span >
        <?php echo (empty($errors['price'])?false:$errors['price']); ?>
    </span>
    </div>

    <div class="form-outline mb-4">
        <select id="status" name="status">
            <option value="Stocking" 
            <?php if(isset($old['status'])&&$old['status']=='Stocking') echo 'selected="selected"';?>>Stocking</option>
            <option value="Out of stock" <?php if(isset($old['status'])&&$old['status']=='Out of stock') echo 'selected="selected"'; ?>>Out of stock</option>
        </select>
    </div>

    <div class="form-outline mb-4">
        <input type="text" id="category" name="category" placeholder="category" class="form-control form-control-lg" 
        value="<?php echo (empty($old['category'])?$productToUpdate['category']:$old['category']);?>"/>
        <span >
        <?php echo (empty($errors['category'])?false:$errors['category']); ?>
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
        <textarea type="text" id="description" name="description" row="3" class="form-control form-control-lg">
        <?php echo trim((empty($old['description'])?$productToUpdate['description']:$old['description']));?>
        </textarea>
        <span >
        <?php echo (empty($errors['description'])?false:$errors['description']); ?>
    </span>
    </div>

    <div class="d-flex justify-content-center">
        <button type="submit"
        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Cập nhật</button>
    </div>
</form>