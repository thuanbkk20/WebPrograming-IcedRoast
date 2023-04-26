<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/news_style.css";?>>
<div class="container1">
  <div class="d-flex flex-column p-2 text-center">
      <div class="border-bottom" >
        <h4 class="fw-bold mb-2">Chuyện nhà</h4>
      </div>
      <div class="mb-2  justify-content-center">
        <span class="text-align-justify "> The IcedRoast sẽ là nơi mọi người xích lại gần nhau,
           đề cao giá trị kết nối con người và sẻ chia thân tình bên những tách cà phê, 
           ly trà đượm hương, truyền cảm hứng về lối sống hiện đại.</span>
      </div>
      <div>
          <ul class="page_tabs">
              <li>
              <a href=<?php echo _WEB_ROOT."/news";?> class="sidebar-link">
                  <button class="filter_button orange active">Tất cả</button>
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
    </div>
    
</div>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gx-lg-7 mx-auto" style="width: 92%;">
  <?php foreach($newsArr as $blog){ ?>
    <div class="col-lg-4 mb-4">
    <a style="text-decoration: none;color:black;" href="<?php echo $blog['link']; ?>"> 
        <div class="card shadow-sm h-100" style="border:none;">
          <!-- Featured image -->
          <div class="d-flex flex-column">
              <div class="bg-image hover-overlay ripple rounded-top" data-mdb-ripple-color="light">
                  <img src="<?php echo $blog['image']; ?>" class="card-img-top" style="width: 100%; height: 380px;"/>
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
              <!-- Title -->
              <div class=" titleCard mt-2  mb-1">
                  <h5><?php echo $blog['title']; ?></h5>
              </div>
          </a>
              <div class="mb-2">
                  <span><?php echo $blog['description']; ?></span>
              </div>
          </div>

          </div>
    </div>
  <?php } ?>
</div>




