$(function(){
    let text = $(".mtext").find("h1").text().split("").join("</span><span>");
    text = "<span>" + text + "</span>"
    //alert(text)
    $(".mtext").find("h1").html(text);
   
    let text2 = $(".label-tit").eq(0).find(".label-tit-left").text().split("").join("</span><span>");
    text2 = "<span>" + text2 + "</span>"
    //alert(text)
    $(".label-tit").eq(0).find(".label-tit-left").html(text2);
    
    let text3 = $(".label-tit").eq(1).find(".label-tit-left").text().split("").join("</span><span>");
    text3 = "<span>" + text3 + "</span>"
    //alert(text)
    $(".label-tit").eq(1).find(".label-tit-left").html(text3);
    
    let text4 = $(".label-tit").eq(2).find(".label-tit-left").text().split("").join("</span><span>");
    text4 = "<span>" + text4 + "</span>"
    //alert(text)
    $(".label-tit").eq(2).find(".label-tit-left").html(text4);
    
    let text5 = $(".label-tit").eq(3).find(".label-tit-left").text().split("").join("</span><span>");
    text5 = "<span>" + text5 + "</span>"
    //alert(text)
    $(".label-tit").eq(3).find(".label-tit-left").html(text5);
    
    let text6 = $(".label-tit").eq(4).find(".label-tit-left").text().split("").join("</span><span>");
    text6 = "<span>" + text6 + "</span>"
    //alert(text)
    $(".label-tit").eq(4).find(".label-tit-left").html(text6);
    
    let text7 = $(".label-tit").eq(5).find(".label-tit-left").text().split("").join("</span><span>");
    text7 = "<span>" + text7 + "</span>"
    //alert(text)
    $(".label-tit").eq(5).find(".label-tit-left").html(text7);

    let text8 = $(".label-tit").eq(6).find(".label-tit-left").text().split("").join("</span><span>");
    text8 = "<span>" + text8 + "</span>"
    //alert(text)
    $(".label-tit").eq(6).find(".label-tit-left").html(text8);


    $(window).scroll(function () {
        var wScroll = parseInt($(this).scrollTop());
        $(".scroll").text(wScroll);
        if(wScroll >= $(".sec2").offset().top - $(window).height() / 2){
            $(".sec2").addClass("show");
        }
        if(wScroll >= $(".project").offset().top - $(window).height() / 2){
            $(".project").addClass("show");
        }
        if(wScroll >= $(".label-wrap").eq(0).offset().top - $(window).height() / 2){
            $(".label-wrap").eq(0).addClass("show");
            $(".pimg-wrap").eq(0).addClass("show");
            $(".more").eq(0).addClass("show");
            // $(".label-tit-right h3 span").each(function(index){
            //     setTimeout(function(){
            //       $(".label-tit-right h3 span").eq(index).addClass("show");
            //     }, 100 * (index+1));
            //   });
        }
        if(wScroll >= $(".label-wrap").eq(1).offset().top - $(window).height() / 2){
            $(".label-wrap").eq(1).addClass("show");
            $(".pimg-wrap2").addClass("show");
            $(".more").eq(1).addClass("show");
        }
        if(wScroll >= $(".label-wrap").eq(2).offset().top - $(window).height() / 2){
            $(".label-wrap").eq(2).addClass("show");
            $(".pimg-wrap3").addClass("show");
            $(".more").eq(2).addClass("show");
        }
        if(wScroll >= $(".label-wrap").eq(3).offset().top - $(window).height() / 2){
            $(".label-wrap").eq(3).addClass("show");
            $(".pimg-wrap4").addClass("show");
            $(".more").eq(3).addClass("show");
        }
        if(wScroll >= $(".label-wrap").eq(4).offset().top - $(window).height() / 2){
            $(".label-wrap").eq(4).addClass("show");
            $(".pimg-wrap5").addClass("show");
            $(".more").eq(4).addClass("show");
        }
        if(wScroll >= $(".label").eq(5).offset().top - $(window).height() / 2){
            $(".label-wrap").eq(5).addClass("show");
            $(".pimg-wrap6").addClass("show");
            $(".more").eq(5).addClass("show");
        }
        if(wScroll >= $(".label").eq(6).offset().top - $(window).height() / 2){
            $(".label-wrap").eq(6).addClass("show");
            $(".pimg-wrap7").addClass("show");
            $(".more").eq(6).addClass("show");
        }
        if(wScroll >= $(".sec5").offset().top - $(window).height() / 2){
            $(".sec5").addClass("show");
        }
        
    });
    $(window).load(function () {
        $(".loading").fadeOut();
        $(".sec1").addClass("show"); 
    });

    let tl = new TimelineMax();
    tl.staggerFromTo(".mtext h1 span", 0.8, {
        ease: Back.easeOut.config(1.7),
        delay: 2,
        opacity: 0,
        y: 80
    }, {
        ease: Back.easeOut.config(1.7),
        delay: 2,
        opacity: 1,
        y: 0
    }, 0.05)
    


    $(".mtext h1 span").eq(9).css("width","8vw");
    $(".mtext h1 span").eq(10).css("margin-left","4vw");
});
