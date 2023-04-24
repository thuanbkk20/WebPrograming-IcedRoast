<?php
class Product extends Controller{

    public $data = [], $model;

    public function __construct(){
        $this->model['CartModel'] = $this->model("CartModel");
        $this->model['ProductModel'] = $this->model('ProductModel');
        $this->data['user'] = [];
        $this->data['user']['first_name'] = 'User';
        //Lấy user để hiện thông tin trên header
        if(Session::data('user_id')!=null){
            $this->db = new Database();
            $query = $this->db->query("SELECT * FROM user WHERE id = '".Session::data('user_id')."';");
            $this->data['user'] = $query->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function index(){
        $this->data['sub_content']['productArr'] =  $this->model['ProductModel']->getAllProduct();
        $request = new Request();
        if($request->isGet()){
            if(isset($_GET['category'])){
                if($_GET['category']=='coffee'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getCoffee();
                }
                else if($_GET['category']=='tea'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getTea();
                }
                else if($_GET['category']=='hitea'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getHitea();
                }
                else if($_GET['category']=='cake'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getCake();
                }
                else if($_GET['category']=='atHome'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getAtHome();
                }
                else if($_GET['category']=='other'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getChocolate();
                }
                else if($_GET['category']=='Vietnam_Coffee'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('Vietnam_Coffee');
                }
                else if($_GET['category']=='Machine_Coffee'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('Machine_Coffee');
                }
                else if($_GET['category']=='Cold_Brew'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('Cold_Brew');
                }
                else if($_GET['category']=='CloudFee'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('CloudFee');
                }
                else if($_GET['category']=='CloudTea'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('CloudTea');
                }
                else if($_GET['category']=='Fruit_Tea'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('Fruit_Tea');
                }
                else if($_GET['category']=='Macchiato'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('Macchiato');
                }
                else if($_GET['category']=='HiteaTra'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('Hi-Tea_Tea');
                }
                else if($_GET['category']=='HiteaDa'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('Hi-Tea_Ice');
                }
                else if($_GET['category']=='Pastries'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('Pastries');
                }
                else if($_GET['category']=='Cakes'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('Cakes');
                }
                else if($_GET['category']=='Snack'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('Snack');
                }
                else if($_GET['category']=='Coffee-at-home'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('Coffee-at-home');
                }
                else if($_GET['category']=='Tea-at-home'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('Tea-at-home');
                }
                else if($_GET['category']=='Chocolate'){
                    $this->data['sub_content']['productArr'] = $this->model['ProductModel']->getByCategory('Chocolate');
                }
            }  
        }   
        $this->data["content"] = 'products/list';
        //Render view
        $this->render('layouts/client_layout', $this->data);
    }

    public function detail(){
        $request = new Request();
        if($request->isGet()){
            $this->data['sub_content']['mainProduct'] =  $this->model['ProductModel']->getProductById($_GET['id']);
            $category = $this->data['sub_content']['mainProduct']['category'];
            $this->data['sub_content']['relatedProduct'] = $this->model['ProductModel']->getByCategory($category);
            $this->data["content"] = 'products/detail';
            //Render view
            $this->render('layouts/client_layout', $this->data);
        }
    }

    public function addToCart(){
        //Check xem da dang nhap chua
        if(!Session::data('user_id')){
            $response = new Response();
            $response->reDirect('site/login');
        }
        $request = new Request();
        if($request->isPost()){
            $product_id = $_POST['product_id'];
            $size = $_POST['size'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];

            $productInCart = $this->model['CartModel']->getProductInCart(Session::data('user_id'),$product_id,$size);
            //Trường hợp trong giỏ hàng chưa có sản phẩm này
            if(!$productInCart){
                //
                $item['user_id'] = Session::data('user_id');
                $item['product_id'] = $product_id;
                $item['name'] = $this->model['ProductModel']->getProductName($product_id);
                $item['price'] = $price;
                $item['size'] = $size;
                $item['quantity'] = $quantity;
                $item['image'] = $this->model['ProductModel']->getProductImage($product_id);

                $this->model['CartModel']->addToCart($item);
            }else{
                $item['quantity'] = $quantity + $this->model['CartModel']->getProductQuantity(Session::data('user_id'),$product_id,$size);;
                $this->model['CartModel']->updateProduct(Session::data('user_id'),$product_id,$size,$item);
            }
            //Cập nhật thông tin giỏ hàng trên header
            $quantity = $this->model['CartModel']->getCartQuantity($this->data['user']['id']);
            Session::data('cartQuantity',$quantity);

            $this->data['sub_content']['mainProduct'] = $this->model['ProductModel']->getProductById($product_id);
            $category = $this->data['sub_content']['mainProduct']['category'];
            $this->data['sub_content']['relatedProduct'] = $this->model['ProductModel']->getByCategory($category);
            $this->data["content"] = 'products/detail';
            //Render view
            $this->render('layouts/client_layout', $this->data);
        }
    }
}