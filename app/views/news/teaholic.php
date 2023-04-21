<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/news_style.css";?>>
</head>
<body>
<div class="container">
    
    <ul class="page_tabs">
        <li>
        <a href=<?php echo _WEB_ROOT."/news";?> class="sidebar-link">
            <button class="filter_button active">Tất cả</button>
        </a>
            
        </li>
        <li>
        <a href=<?php echo _WEB_ROOT."/news/coffeeholic";?> class="sidebar-link">
            <button class="filter_button active">CoffeeHolic</button>
        </a>
            
        </li>
        <li>
        <a href=<?php echo _WEB_ROOT."/news/teaholic";?> class="sidebar-link">
            <button class="filter_button active">TeaHolic</button>
        </a>
            
        </li>
        <li>
        <a href=<?php echo _WEB_ROOT."/news/blog";?> class="sidebar-link">
            <button class="filter_button active">Blog</button>
        </a>
            
        </li>
        
    </ul>
</div>

</body>
</html>
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gx-lg-5">
  <?php foreach($newsArr as $teaholic){ ?>
    <div class="col mb-4">
      <a href="<?php echo $teaholic['link']; ?>"> 
        <div class="card shadow-sm h-100">
          <!-- Featured image -->
          <div class="bg-image hover-overlay ripple rounded-top" data-mdb-ripple-color="light">
            <img src="<?php echo $teaholic['image']; ?>" class="card-img-top" />
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </div>

          <!-- Article data -->
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <a href="" class="text-info">
                <i class="fas fa-plane"></i>
                <?php echo $teaholic['tag']; ?>
              </a>
              <u>15.07.2020</u>
            </div>

            <!-- Article title and description -->
            <h5 class="card-title"><?php echo $teaholic['title']; ?></h5>
            <p class="card-text"><?php echo $teaholic['description']; ?></p>
          </div>
        </div>
      </a>
    </div>
  <?php } ?>
</div>