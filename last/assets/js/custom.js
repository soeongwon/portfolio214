$(function(){
    //jquery
    $('a[href^="#"]').on('click', function(e){
        e.preventDefault();
        var target = $( $(this).attr('href') )
        $('html, body').animate({ scrollTop : target.offset().top }, 800, 'easeInOutExpo')
    });

    //javascript
    // document.querySelectorAll('a[href^="#"]').forEach(elem => {
    //     elem.addEventListener('click', e => {
    //         e.preventDefault();
    //         const scr = document.querySelector(elem.getAttribute('href'))
    //         scr.scrollIntoView({
    //             behavior: 'smooth'
    //         });
    //     });
    // });


    // document.querySelectorAll('a[href^="#"]').forEach(elem => {
    //     elem.addEventListener('click', e => {
    //         e.preventDefault();
    //         let block = document.querySelector(elem.getAttribute('href')),
    //             offset = elem.dataset.offset ? parseInt(elem.dataset.offset) : 0,
    //             bodyOffset = document.body.getBoundingClientRect().top;
    //         window.scrollTo({
    //             top: block.getBoundingClientRect().top - bodyOffset + offset,
    //             behavior: 'smooth'
    //         }); 
    //     });
    // });


    /* main text */
    let text = $(".main-text").find("h1").text().split("").join("</span><span>");
    text = "<span>" + text + "</span>"
    //alert(text)
    $(".main-text").find("h1").html(text);


    //SCROLL    
    $(window).scroll(function(){
        let wScroll = $(this).scrollTop();
        
        $(".scroll").text(wScroll);

        if(wScroll >= $("#about").offset().top - $(window).height() / 2 ){
            $("#about").find("h2").addClass("show");
            $("#about").addClass("show");
        }
        if(wScroll >= $(".about-intro").offset().top - $(window).height() / 2 ){
            $(".about-intro").addClass("show");
        }
        if(wScroll >= $(".about .skill").offset().top - $(window).height() / 2 ){
            $(".about .skill").addClass("show");
        }
        if(wScroll >= $(".project-item").eq(0).offset().top - $(window).height() / 2 ){
            $(".project-item").eq(0).addClass("show");
        }
        if(wScroll >= $(".project-item").eq(1).offset().top - $(window).height() / 2 ){
            $(".project-item").eq(1).addClass("show");
        }
        if(wScroll >= $(".project-item").eq(2).offset().top - $(window).height() / 2 ){
            $(".project-item").eq(2).addClass("show");
        }
        if(wScroll >= $(".project-item").eq(3).offset().top - $(window).height() / 2 ){
            $(".project-item").eq(3).addClass("show");
        }
        if(wScroll >= $(".project-item").eq(4).offset().top - $(window).height() / 2 ){
            $(".project-item").eq(4).addClass("show");
        }
        if(wScroll >= $(".project-item").eq(5).offset().top - $(window).height() / 2 ){
            $(".project-item").eq(5).addClass("show");
        }
        if(wScroll >= $(".animation-wrap").offset().top - $(window).height() / 2 ){
            $(".animation-wrap").addClass("show");
        }
        if(wScroll >= $(".contact").offset().top - $(window).height() / 2 ){
            $(".contact").addClass("show");
        }
        if(wScroll >= $(".contact-form").offset().top - $(window).height() / 2 ){
            $(".contact-form").addClass("show");
        }



        if(wScroll >= $("#project").offset().top - $(window).height() / 2){
            $("#project").find("h2").addClass("show");
        }
        if(wScroll >= $("#animation").offset().top - $(window).height() / 2){
            $("#animation").find("h2").addClass("show");
        }
        if(wScroll >= $("#contact").offset().top - $(window).height() / 2){
            $("#contact").find("h2").addClass("show");
        }
        if(wScroll >= $("#last").offset().top - $(window).height() / 2){
            $("#last").find(">div").addClass("show");
        }
        let offset1 = ( wScroll - $(".side-text .text").offset().top ) * 0.4
        let offset2 = ( wScroll - $(".contact-side .text").offset().top ) * 0.4

        $(".side-text .text").css({ "transform" : "translateY("+ offset1 +"px)" });
        $(".contact-side .text").css({ "transform" : "translateY("+ offset2 +"px)" });
    });


    //counter
    function counter() {
        if( $('.skill .count').size() ){
            var count = $('.skill .count');

            count.each(function () {
                var $this = $(this);
                $this.data('target', parseInt($this.html()));
                $this.data('counted', false);
                $this.html('0');
            });

            $(window).on('scroll', function () {
                var speed = 3000;

                count.each(function (i) {
                    var target = $(this);
                    if (!target.data('counted') && $(window).scrollTop() + $(window).height() >= target.offset().top) {
                        target.data('counted', true);
                        target.animate({
                            dummy: 1
                        }, {
                            duration: speed,
                            step: function (now) {
                                var $this = $(this);
                                var val = Math.round($this.data('target') * now);
                                $this.html(val);
                            },
                            easing: 'easeInOutQuart'
                        });

                        // easy pie
                        $('.pie').easyPieChart({
                            barColor: '#000000',
                            trackColor: '#ffffff',
                            scaleColor: '#030303',
                            scaleLength: 5,
                            lineWidth: 2,
                            size: 190,
                            lineCap: 'round',
                            animate: { duration: speed, enabled: true }
                        });
                    }
                });
            })
        }
    }
    counter();



    // progress
    function loading(){
        const progress = $(".progress");
        const progressText = $(".progress-text");
        let imgLoad = imagesLoaded("body"),
            imgTotal = imgLoad.images.length,
            imgLoaded = 0,
            imgCurrent = 0,
            progressTimer = setInterval(updateProgress, 1000 / 60);
        
       imgLoad.on("progress",function(){
           imgLoaded++;
       });

       function updateProgress(){
           let target = (imgLoaded / imgTotal) * 100;

           imgCurrent += (target - imgCurrent) * 0.1;
           progressText.text(Math.floor(imgCurrent) + "%");

          
           //이미지 로딩 완료
           if(imgCurrent >= 100){
            clearInterval(progressTimer);
            progress.delay(1000).animate({ top: "-110%" },400,"easeInExpo");
            
            $("body").addClass("show");
            // $(".main-text h1 span").each(function(index){
            //     setTimeout(function(){
            //         //$(".main-text h1 span").eq(index).addClass("show");
                   
            //     }, 100 * (index+1)); 
            // });

            

            let tl = new TimelineMax();
            let navTl = new TimelineMax();
            tl.staggerFromTo(".main-text h1 span", 0.8, 
            {ease: Back.easeOut.config(1.7), delay: 2, opacity: 0, y:80 },
            {ease: Back.easeOut.config(1.7), delay: 2, opacity: 1, y:0}, 0.05) 

            $(".main-text h1 span").eq(1).css("width","4vw");
            $(".main-text h1 span").eq(7).css("width","4vw");
            $(".main-text h1 span").eq(10).css("width","6vw");
            $(".main-text h1 span").eq(21).css("width","6vw");
            $(".main-text h1 span").eq(10).replaceWith("<span></span><br>");
            $(".main-text h1 span").eq(21).replaceWith("<span></span><br>");

            navTl.staggerFromTo(".nav ul li",0.7,
                {ease: "power4.out", delay: 2.5, opacity: 0, x: -200}, 
                {ease: "power4.out", delay: 2.5, opacity: 1, x: 0}, 0.05);
        }
           if(imgCurrent > 99){
            imgCurrent = 100;
            }
            

       }
    }
    loading();

    
});
