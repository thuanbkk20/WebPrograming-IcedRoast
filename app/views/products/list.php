<!-- Set title -->

<title><?=
    !empty($page_title)?$page_title:"No name"
?></title>

<h1 style="text-align: center">PRODUCTS LIST</h1>

<div class="row gy-4">
    <div class="col-12 col-lg-3">
        <!-- sidebar ở đây, ứng với mỗi catagory -->
    </div>
    <div class="col-12 col-lg-9">
        <div class="row">
            <?php foreach ($productArr as $product): ?>
                <div class="col-lg-4 mb-3">
                    <a href='' style="text-decoration:none;">
                        <div class="card shadow-sm">
                            <img src='<?= $product['image'] ?>' alt='<?= $product['name'] ?>' class="card-img-top rounded w-100 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?= $product['name'] ?></h5>
                                <h6 class="card-text"><?= number_format($product['price'], 0, ',', '.') ?>đ</h6>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?php
    echo '<pre>'; print_r($productArr); echo '</pre>';
?>
