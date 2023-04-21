<!-- Set title -->
<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/nav.css";?>>

<title><?=
    !empty($page_title)?$page_title:"No name"
?></title>

<br><br>

<div class="row gy-4">    
    <div class="col-12 col-lg-3 border-end">
        <div class="sidebar">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href=<?php echo _WEB_ROOT."/product";?> class="sidebar-link">
                        Tất cả
                    </a>
                </li>                
                <li class="list-group-item">
                    <a id="cafe-icon" href=<?php echo _WEB_ROOT."/product?category=coffee";?> class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#coffee-submenu" aria-expanded="false" aria-controls="coffee-submenu">
                        Cà phê
                    </a>
                </li>
                <div class="collapse submenu" id="coffee-submenu">
                    <li class="list-group-item"><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/product?category=Vietnam_Coffee";?>>Cà phê Việt Nam</a></li>
                    <li class="list-group-item"><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/product?category=Machine_Coffee";?>>Cà phê Máy</a></li>
                    <li class="list-group-item"><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/product?category=Cold_Brew";?>>Cold Brew</a></li>
                </div>

                <li class="list-group-item">
                    <a href=<?php echo _WEB_ROOT."/product?category=CloudFee";?> class="sidebar-link">CloudFee</a>
                </li>
                <li class="list-group-item">
                    <a href=<?php echo _WEB_ROOT."/product?category=CloudTea";?> class="sidebar-link">CloudTea</a>
                </li>

                <li class="list-group-item">
                    <a href=<?php echo _WEB_ROOT."/product?category=tea";?> class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#tra-submenu" aria-expanded="false" aria-controls="tra-submenu">
                        Trà
                    </a>
                </li>
                <div class="collapse submenu" id="tra-submenu">
                    <li class="list-group-item"><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/product?category=Fruit_Tea";?>>Trà Trái Cây</a></li>
                    <li class="list-group-item"><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/product?category=Macchiato";?>>Trà sữa Macchiato</a></li>
                </div>

                <li class="list-group-item">
                    <a href=<?php echo _WEB_ROOT."/product?category=hitea";?> class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#hitea-submenu" aria-expanded="false" aria-controls="hitea-submenu">
                        Hi-Tea Healthy
                    </a>
                </li>
                <div class="collapse submenu" id="hitea-submenu">
                    <li class="list-group-item"><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/product?category=HiteaTra";?>>Hi-Tea Trà</a></li>
                    <li class="list-group-item"><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/product?category=HiteaDa";?>>Hi-Tea Đá Tuyết</a></li>
                </div>

                <li class="list-group-item">
                    <a href=<?php echo _WEB_ROOT."/product?category=cake";?> class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#cake-submenu" aria-expanded="false" aria-controls="cake-submenu">
                        Bánh & Snack
                    </a>
                </li>
                <div class="collapse submenu" id="cake-submenu">
                    <li class="list-group-item"><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/product?category=Pastries";?>>Bánh mặn</a></li>
                    <li class="list-group-item"><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/product?category=Cakes";?>>Bánh ngọt</a></li>
                    <li class="list-group-item"><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/product?category=Snack";?>>Snack</a></li>
                </div>

                <li class="list-group-item">
                    <a href=<?php echo _WEB_ROOT."/product?category=athome";?> class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#athome-submenu" aria-expanded="false" aria-controls="athome-submenu">
                        Tại nhà
                    </a>
                </li>
                <div class="collapse submenu" id="athome-submenu">
                    <li class="list-group-item"><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/product?category=Coffee-at-home";?>>Cà phê tại nhà</a></li>
                    <li class="list-group-item"><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/product?category=Tea-at-home";?>>Trà tại nhà</a></li>
                </div>
                <li class="list-group-item">
                    <a href=<?php echo _WEB_ROOT."/product?category=Chocolate";?> class="sidebar-link">Thức uống khác</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-12 col-lg-9 product-field">
        <div class="row">
            <?php 
            $currentCategory = '';
            foreach ($productArr as $product): 
                if ($product['category'] !== $currentCategory): 
                    if ($product['category'] === 'Vietnam_Coffee') echo "<h3>Cà Phê Việt Nam</h3>";
                    if ($product['category'] === 'Machine_Coffee') echo "<h3>Cà Phê Máy</h3>";
                    if ($product['category'] === 'Cold_Brew') echo "<h3>Cold Brew</h3>";
                    if ($product['category'] === 'CloudFee') echo "<h3>Cloud Fee</h3>";
                    if ($product['category'] === 'CloudTea') echo "<h3>Cloud Tea</h3>";
                    if ($product['category'] === 'Fruit_Tea') echo "<h3>Trà Trái Cây</h3>";
                    if ($product['category'] === 'Macchiato') echo "<h3>Trà Sữa Macchiato</h3>";
                    if ($product['category'] === 'Hi-Tea_Tea') echo "<h3>Hi-Tea Trà</h3>";
                    if ($product['category'] === 'Hi-Tea_Ice') echo "<h3>Hi-Tea Đá Tuyết</h3>";
                    if ($product['category'] === 'Pastries') echo "<h3>Bánh Mặn</h3>";
                    if ($product['category'] === 'Cakes') echo "<h3>Bánh Ngọt</h3>";
                    if ($product['category'] === 'Snack') echo "<h3>Snack</h3>";
                    if ($product['category'] === 'Tea-at-home') echo "<h3>Trà Tại Nhà</h3>";
                    if ($product['category'] === 'Coffee-at-home') echo "<h3>Cà Phê Tại Nhà</h3>";
                    if ($product['category'] === 'Chocolate') echo "<h3>Thức Uống Khác</h3>";
                    $currentCategory = $product['category'];
                    echo "<br><br>";
                endif;
            ?>
            <div class="col-lg-4 mb-4">
                <a href='' style="text-decoration:none;">
                    <div class="card shadow-sm">
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
    
