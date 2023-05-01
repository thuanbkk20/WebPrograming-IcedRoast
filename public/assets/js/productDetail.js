let radioBtns = document.querySelectorAll('input[name="size"]');
let priceDisplay = document.querySelector('.product-price');
radioBtns.forEach((btn) => {
    btn.addEventListener('change', () => {
        let newPrice = btn.getAttribute('data-price');
        priceDisplay.textContent = newPrice.toLocaleString('vi-VN') + ' đ';
    });
});

const radioButtons = document.querySelectorAll('input[type="radio"][name="size"]');
radioButtons.forEach((radioButton) => {
    radioButton.addEventListener('change', () => {
        const selectedSize = document.querySelector('input[type="radio"][name="size"]:checked');
        const priceInput = document.querySelector('input[name="price"]');
        const price = selectedSize.getAttribute('data-price');
        priceInput.value = price*1000;
    });
});

$(document).ready(function(){
    var relatedProductCount = $('.related-product .col-lg-2').length;
    var slidesToShow = (relatedProductCount > 6) ? 6 : relatedProductCount;
    
    $('.related-product').slick({
        slidesToShow: slidesToShow,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        draggable: true,
        touchThreshold: 10, // thêm thuộc tính touchThreshold
        variableWidth: true, // thêm thuộc tính variableWidth
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 0.2,
                    infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 0.2
            }
        }]
    });

    $('#addtoCart').on("click", function(){
        let quantity = $("#quantity").val();
        let loginFlag = $("#loginFlag").val();
        let webRoot = $('#webRoot').val();
        if(loginFlag==0){
            window.location.replace(webRoot+'/site/login');
        }
        if(Number(quantity)<=0){
            $("#quantityError").html("Số lượng sản phẩm phải lớn hơn 0");
        }else{
            $("#quantityError").html("");
            let selectedSize = document.querySelector('input[type="radio"][name="size"]:checked');
            let size = selectedSize.getAttribute('value');
            let price = $('#totalPrice').val();
            let id = $("#productId").val();
            let currentQuantity = $("#currentQuantity").val();

            $.ajax({                    
                url: webRoot+"/product/addToCart?product_id",     
                type: 'post', // performing a POST request
                data : {
                    product_id : id,    // will be accessible in $_POST['product_id']
                    size : size,
                    price : price,
                    quantity : quantity
                },                  
                success: function(result)         
                {
                    console.log("Add to cart successfully")
                    //Cập nhật lại giỏ hàng trên header
                    newQuantity = Number(quantity)+Number(currentQuantity);
                    $("#cartQuantity").html(newQuantity);
                    $("#currentQuantity").val(newQuantity);
                } 
            });
        } 
    });
});