$(document).ready(function(){
    var webRoot = $("#webRoot").val()
    $('.status').on('change', function() {
        var id = $(this).attr("id");
        var value = this.value;
        $.ajax({url:webRoot+'/admin/OrderModify/status?id='+id+'&status='+value,success: function(result){
            console.log(result)
        }});
    });
    $('.payment_status').on('change', function() {
        var id = $(this).attr("id");
        var value = this.value;
        $.ajax({url:webRoot+'/admin/OrderModify/paymentStatus?id='+id+'&paymentStatus='+value,success: function(result){
            console.log(result)
        }});
    });
});