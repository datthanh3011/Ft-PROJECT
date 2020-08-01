$(document).ready(function(){
    var position_btn_now = $('.btn-slider.btn-active').index() + 1;
    $('.item:nth-child('+position_btn_now+')').addClass('active');

    var autoload = setInterval(function(){
        //tudongchay();
        
    ;},3000);

    function tudongchay(){
        var vi_tri = $('.btn-active').index() +1;
        if (vi_tri < $('.btn-slider').length) {
            
            var vi_tri_moi = vi_tri + 1;
            $('.btn-active').removeClass('btn-active');
            $('.btn-slider:nth-child('+vi_tri_moi+')').addClass('btn-active');
        }
        if (vi_tri == $('.btn-slider').length ) {
            var vi_tri_moi = 1;
            $('.btn-active').removeClass('btn-active');
            $('.btn-slider:nth-child('+1+')').addClass('btn-active')
        }
        $('.active').addClass('out-right').one('webkitAnimationEnd', function(){
            $(this).removeClass('out-right').removeClass('active');
        });
        $('.item:nth-child('+vi_tri_moi+')').addClass('active').addClass('in-left').one('webkitAnimationEnd',function(){
            $(this).removeClass('in-left')
        });
        
    }
    $('.btn-slider').click(function(){
        clearInterval(autoload);
        var position_btn_now = $('.btn-slider.btn-active').index() + 1;
        var position_click = $(this).index() + 1;
        $('.btn-slider').each(function(){
            
                $(this).removeClass('btn-active');
            
        });
        
        $(this).addClass('btn-active');
        
        if (position_click>position_btn_now) {
            $('.active').addClass('out-right').one('webkitAnimationEnd', function(){
                $(this).removeClass('out-right').removeClass('active');
            });
            $('.item:nth-child('+position_click+')').addClass('active').addClass('in-left').one('webkitAnimationEnd',function(){
                $(this).removeClass('in-left')
            });
        }
        if (position_click<position_btn_now){
            $('.active').addClass('out-left').one('webkitAnimationEnd', function(){
                $(this).removeClass('out-left').removeClass('active');
            });
            $('.item:nth-child('+position_click+')').addClass('active').addClass('in-right').one('webkitAnimationEnd',function(){
                $(this).removeClass('in-right')
            });
        }
    });
    
    $("#btn-next").click(function(){
        for (let i = $(".item-carousel").length; i > 0; i--) {
            if (i>1) {
                $("#item-"+i).html($("#item-"+(i-1)).html());
                
            }
            if (i==1) {
                $("#item-"+i).html($("#item-"+$(".item-carousel").length).html());
            }
        }
    });
    $("#btn-pre").click(function(){
        for (let i = 1; i <= $(".item-carousel").length; i++) {
            if (i<$(".item-carousel").length) {
                $("#item-"+i).html($("#item-"+(i+1)).html());
                
            }
            if (i==$(".item-carousel").length) {
                $("#item-"+i).html($("#item-"+1).html());
            }
        }
    });
});


$(document).ready(function(){
    $(".static-position").find("a").first().css("color","#f55c00");
    $.ajax({
        url: "./home.php",
        success: function(result){
            $('#page-home').html(result);
        }
    })
    $(".static-position").click(function(){
        var name = $(this).find("a").attr("id");
        var url = "./" + name +".php";
        $.ajax({
            url: url,
            success: function(result){
                $('#page-home').html(result);
            }
        })  
        $(".static-position").find("a:first").css("color","#212529");
        $(this).find("a").first().css("color","#f55c00");
    })
})