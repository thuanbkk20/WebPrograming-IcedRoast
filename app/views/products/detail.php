<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/detail.css";?>>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>

<div class="container mt-4 mb-4">
    <input type="hidden" id="webRoot" value=<?php echo _WEB_ROOT; ?>>
    <input type="hidden" id="currentQuantity" value=<?php echo Session::data('cartQuantity'); ?>>
    <h6 class="container mx-2">
        <a class="text-decoration-none" style="color: #000" href=<?php echo _WEB_ROOT."/product";?>>Sản phẩm</a>
        <span style="color: #b3b3b3"> / </span>
        <span>
            <?php
                if ($data['mainProduct']['category'] === 'Vietnam_Coffee') 
                {
                    echo '<a class="text-decoration-none"  style="color: #000" href="' . _WEB_ROOT . '/product?category=Vietnam_Coffee">Cà Phê Việt Nam</a>';
                }
                if ($data['mainProduct']['category'] === 'Machine_Coffee')
                {
                    echo '<a class="text-decoration-none"  style="color: #000" href="' . _WEB_ROOT . '/product?category=Machine_Coffee">Cà Phê Máy</a>';
                }
                if ($data['mainProduct']['category'] === 'Cold_Brew') 
                {
                    echo '<a class="text-decoration-none" style="color: #000" href="' . _WEB_ROOT . '/product?category=Cold_Brew">Cold Brew</a>';
                }
                if ($data['mainProduct']['category'] === 'CloudFee') 
                {
                    echo '<a class="text-decoration-none" style="color: #000" href="' . _WEB_ROOT . '/product?category=CloudFee">Cloud Fee</a>';
                }
                if ($data['mainProduct']['category'] === 'CloudTea') 
                {
                    echo '<a class="text-decoration-none" style="color: #000" href="' . _WEB_ROOT . '/product?category=CloudTea">Cloud Tea</a>';
                }
                if ($data['mainProduct']['category'] === 'Fruit_Tea') 
                {
                    echo '<a class="text-decoration-none" style="color: #000" href="' . _WEB_ROOT . '/product?category=Fruit_Tea">Trà Trái Cây</a>';
                }
                if ($data['mainProduct']['category'] === 'Macchiato') 
                {
                    echo '<a class="text-decoration-none" style="color: #000" href="' . _WEB_ROOT . '/product?category=Macchiato">Trà Sữa Macchiato</a>';
                }
                if ($data['mainProduct']['category'] === 'Hi-Tea_Tea') 
                {
                    echo '<a class="text-decoration-none" style="color: #000" href="' . _WEB_ROOT . '/product?category=HiteaTra">Hi-Tea Trà</a>';
                }
                if ($data['mainProduct']['category'] === 'Hi-Tea_Ice') 
                {
                    echo '<a class="text-decoration-none" style="color: #000" href="' . _WEB_ROOT . '/product?category=HHiteaDa">Hi-Tea Đá Tuyết</a>';
                }
                if ($data['mainProduct']['category'] === 'Pastries') 
                {
                    echo '<a class="text-decoration-none" style="color: #000" href="' . _WEB_ROOT . '/product?category=Pastries">Bánh Mặn</a>';
                }
                if ($data['mainProduct']['category'] === 'Cakes') 
                {
                    echo '<a class="text-decoration-none" style="color: #000" href="' . _WEB_ROOT . '/product?category=Cakes">Bánh Ngọt</a>';
                }
                if ($data['mainProduct']['category'] === 'Snack') 
                {
                    echo '<a class="text-decoration-none" style="color: #000" href="' . _WEB_ROOT . '/product?category=Snack">Snack</a>';
                }
                if ($data['mainProduct']['category'] === 'Tea-at-home') 
                {
                    echo '<a class="text-decoration-none" style="color: #000" href="' . _WEB_ROOT . '/product?category=Tea-at-home">Trà Tại Nhà</a>';
                }
                if ($data['mainProduct']['category'] === 'Coffee-at-home') 
                {
                    echo '<a class="text-decoration-none" style="color: #000" href="' . _WEB_ROOT . '/product?category=Coffee-at-home">Cà Phê Tại Nhà</a>';
                }
                if ($data['mainProduct']['category'] === 'Chocolate') 
                {
                    echo '<a class="text-decoration-none" style="color: #000 href="' . _WEB_ROOT . '/product?category=Chocolate">Thức uống khác</a>';
                }                  
            ?>
        </span>
        <span style="color: #b3b3b3"> / </span>
        <span style="color: #b3b3b3"><?php echo $data['mainProduct']['name'];?></span>
    </h6>

    <div class="row flex-wrap justify-content-center">
        <div class="col-md-6 col-lg-6">
            <div class="product-images p-3">
                <div class="product-image">
                <img src=<?php echo $data['mainProduct']['image']?> alt=<?php echo $data['mainProduct']['name']?> width="100%" />
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-6">
            <div class="product-info px-4" method="post">
                <input type="hidden" name="product_id" value="<?php echo $data['mainProduct']['id']; ?>" id="productId">
                <h1 class="product-title"><?php echo $data['mainProduct']['name'] ?></h1>

                <?php 
                    $price = $data['mainProduct']['price'];
                ?>
                <h4 class="product-price act-price"><?php echo number_format($price, 0, '.', '.') ?> đ</h4>

                <div class="product-options">
                    <h6 class="c-size">Chọn Size (bắt buộc)</h6>
                    <label class="radio">
                        <input type="radio" name="size" value="S" data-price="<?php echo number_format($data['mainProduct']['price'], 0, '.', '.') ?>" checked>
                        <span>Nhỏ + 0 đ</span>
                    </label>
                    <label class="radio">
                        <?php 
                            $price_m = $data['mainProduct']['price'] + 6000;
                            $price = $price_m;
                        ?>
                        <input type="radio" name="size" value="M" data-price="<?php echo number_format($price_m, 0, '.', '.'); ?>" >
                        <span>Vừa + 6.000đ</span>
                    </label>
                    <label class="radio">
                        <?php 
                            $price_l = $data['mainProduct']['price'] + 10000;
                            $price = $price_l;
                        ?>
                        <input type="radio" name="size" value="L" data-price="<?php echo number_format($price_l, 0, '.', '.'); ?>" >
                        <span>Lớn + 10.000đ</span>
                    </label>
                </div>
                            
                <input type="hidden" name="price" value=<?php echo $data['mainProduct']['price']; ?> id="totalPrice">

                <h4 class="mt-3 mb-3">Mô tả sản phẩm</h4>
                <p>- <?php echo $data['mainProduct']['description'] ?></p>

                <h5 class="mt-3 mb-3">Số lượng</h5>
                <input class="form-control w-25" type="number" name="quantity" value="1" id="quantity">
                <span id="quantityError" style="color:red"></span>
                <div class="product-cart mt-4 align-items-center">
                    <button class="btn text-uppercase mr-2 px-4 text-white" style="background-color: #E57905" id="addtoCart"><strong>Thêm vào giỏ hàng</strong></button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h4 class="container-fluid">Sản phẩm liên quan</h4>
        <div class="related-product container-fluid row">
            <?php 
            $currentCategory = '';
            foreach ($data['relatedProduct'] as $product): 
            ?>
                <div class="col-lg-2">
                    <a href=<?php echo _WEB_ROOT."/product/detail?id=$product[id]"?> style="text-decoration:none;">
                        <div class="card shadow-sm" style="width: 10rem">
                            <img src='<?= $product['image'] ?>' alt='<?= $product['name'] ?>' class="card-img-top rounded w-100 shadow-sm">
                            <div class="card-body text-center">
                                <h6 class="card-title"><?= $product['name'] ?></h6>
                                <h6 class="card-text text-black-50"><?= number_format($product['price'], 0, ',', ',') ?> đ</h6>
                            </div>
                        </div>
                    </a>
                </div>      
            <?php endforeach; ?>
        </div>
    </div>
</div>


<script type="text/javascript" src=<?php echo _WEB_ROOT."/public/assets/js/productDetail.js";?>></script>
