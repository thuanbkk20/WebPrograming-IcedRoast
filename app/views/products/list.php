<!-- Set title -->

<title><?=
    !empty($page_title)?$page_title:"No name"
?></title>

<h1 style="text-align: center">PRODUCTS LIST</h1>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="list.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

  <body>
    <!-- Header -->


    <!-- Body -->
    <div class="row">
        <!-- Left -->
        <div class="flex-shrink-0 m-3 p-3 bg-light text-dark bg-opacity-50" style="width: calc(120px + 2.5%); box-sizing: border-box;">
            <a href="/" class="d-flex pb-4 mb-4 fs-4 fw-bold text-reset text-decoration-none border-bottom "> Options </a>
            <ul class="list-unstyled ps-0">
                <li class="mb-3">
                    <button class="btn btn-toggle rounded collapsed align-items-center fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#" aria-controls="" aria-expanded="true">Sách bán chạy</button>
                </li>
                <li class="mb-5">
                    <button class="btn btn-toggle rounded collapsed align-items-center fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#typebook" aria-controls="typebook" aria-expanded="true">Thể loại</button>
                    <div class="collapse" id="typebook">
                        <ul class="btn-toggle-nav list-unstyled pb-1 small">
                       
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed text-primary fw-semibold" data-bs-toggle="collapse"data-bs-target="#account-collapse" aria-expanded="false">Account</button>
                    <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled pb-1 small">
                            <li><a href="#" class="link-dark rounded text-decoration-none">My Profile</a></li>
                            <li><a href="#" class="link-dark rounded text-decoration-none">Settings</a></li>
                            <li><a href="#" class="link-danger rounded fw-bold text-decoration-none">Sign out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Middle -->
        <section class="mx-3 py-2 col-9">

            
            <h1 class="text-primary fw-semibold my-5"></h1> 
            <div class="container px-3 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-3 row-cols-md-3 row-cols-xl-4 justify-content-center">
                   

                    <div class="col p-2 mx-5">
                        <div class="card h-100">
                            <img class="card-img-top p-2" src="" alt="Top Products image" width="200" height="130" />
                            <div class="card-body p-4 text-center">  
                                <h5 class="fw-semibold">  </h5>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center text-primary">
                                    VND
                                </div>
                                <div class="text-center p-1">
                                    <a href="detail.php?id=" class="btn btn-outline-primary">About product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            

            <div class="row justify-content-end my-5">
                <div class="col-3">
                    <nav aria-label="Page navigation example" id="paginatuion">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Right -->
        <div class="col flex-shrink-0 m-3 p-3 bg-light text-dark bg-opacity-50" style="width: calc(120px + 2.5%); box-sizing: border-box;"> </div>
    </div>

    <!-- Footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>
<?php
    echo '<pre>';
    print_r($product_list);
    echo '</pre>';
?>
