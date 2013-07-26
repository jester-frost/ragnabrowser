$(function() {
    $(".main .jCarouselLite").jCarouselLite({
        btnNext: ".main .next",
        btnPrev: ".main .prev",
        speed: 1,
        easing: "easeinout"
    });       
    
    $("#jCarouselLiteDemo").tabs();
    
    $("a.tabClient").click(function() {
        $("#jCarouselLiteDemo").triggerTab($(this).attr("href").substring(1));
        $("#header").ScrollTo(1);
        return false;
    });
    
    $("a.demo").click(function() {
    
        $(this).parents("ul").find("a").removeClass("selected");
        $(this).addClass("selected");
        
        var demo = $("#demo"), loading = $("#loadingDemo");
        
        $("#jCarouselLiteDemo").triggerTab(5);
        demo.show(); // this is because triggerTab takes time to trigger the demo
        $("#demo, #demo .carousel, #demo .jCarouselLite").css("visibility", "hidden");
        loading.show();
        
        var url = "include/jCarouselLiteDemo/"+this.id+".php"
        demo.load(url, function() {
            demo.css("visibility", "visible");
            loading.hide();
        });
        $("#header").ScrollTo(1);
        return false;

    });
});
