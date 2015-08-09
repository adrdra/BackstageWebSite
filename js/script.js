$(document).ready(function(){
    
    $('.demoreel iframe').hide();
    $('.menu').hide();
    jQuery.scrollSpeed(100, 800);

    var $inputs = $('input[name="cat"]');

    $inputs.change(function()
                   {
        $inputs.not(this).prop('checked', false);
    });

    $('.height').css('height',''+$(window).height()+'px');
    $('.doc-height').css('height',''+$(document).height()+'px');

    $('.project-desc').hide();
    
    $(window).on("scroll", function() {
        if($('.bg-project').hasClass('col-lg-12') && $(window).scrollTop() > $('.bg-project').position().top){
            $('.bg-project').removeClass('col-lg-12');
            $('.bg-project').addClass('col-lg-6');
            $('.bg-project').addClass('fixed');            
            $('.project-desc').fadeIn();
            

        }else if($('.bg-project').hasClass('col-lg-6') && $(window).scrollTop() <= $('.bg-project').position().top){
            $('.bg-project').removeClass('col-lg-6');
            $('.bg-project').removeClass('fixed');
            $('.bg-project').addClass('col-lg-12');
            $('.project-desc').fadeOut();
            
        }
        scrollBottom = $(window).scrollTop() + $(window).height();
        //alert($('.project-desc').height());
        if( scrollBottom >= $(document).height() - 100){
            $('footer').addClass('abs-footer');
        }else{
            $('footer').removeClass('abs-footer');
        }
    });
    
    $('#categories-wrap').click(function(event) {
        // Retrieve the 'name' data attribute of the <a/> tag that the user clicked.
        var name = $(event.target).closest('label').attr('for');
        console.log("You clicked on:", name);
    });
    
    /* BUTTON */
    $("#back").click(function(event) {
            event.preventDefault();
            history.back();
        });
    /* */
    
});


$(function(){
    var activateHamburger = function(event) {
        var el = $(this);
        if (el.hasClass('active')){
            el.addClass('active-end');
            el.one('transitionend', function(){
                el.removeClass('active active-end');
            });
            $('.navigation').removeClass('active');
            $('.menu').fadeOut();
        } else {
            el.addClass('active');
            $('.navigation').addClass('active');
            $('.menu').delay(800).fadeIn();
        }
    };
    $('.hamburger').click(activateHamburger);
});


/*
if( $('.page-laboratoire input').is(':checked') ){
    idInput = $(this).attr('id');
    
    alert($(this).attr("width"));
}else{
    $idInput = $this.attr('id');
    $('.project:not(.'+$idInput+')').removeClass('deactivate');
}


    if($('#fiction').is(':checked')){

        $('.project:not(.fiction)').addClass('deactivate');

    }else{
        $('.project:not(.fiction)').removeClass("deactivate");
    }
    
    if($('#musique').is(':checked')){

        $('.project:not(.musique)').addClass('deactivate');

    }else{
        $('.project:not(.musique)').removeClass("deactivate");
    }
    
    if($('#communication').is(':checked')){

        $('.project:not(.communication)').addClass('deactivate');

    }else{
        $('.project:not(.communication)').removeClass("deactivate");
    }
    
    if($('#journalisme').is(':checked')){

        $('.project:not(.journalisme)').addClass('deactivate');

    }else{
        $('.project:not(.journalisme)').removeClass("deactivate");
    }*/


/* Démoreel autoplay */
$(document).scroll(function(){
    positionDemoreel = $('.demoreel').position().top;
    demiHeight = $('.demoreel').height() / 2;
    if($(".demoreel iframe").attr('src') == 'https://www.youtube.com/embed/rxJCQ3m4miA?rel=0&amp;controls=0&amp;showinfo=0;autoplay=1'){
        if($(window).scrollTop() >= positionDemoreel + demiHeight || $(window).scrollTop() <= positionDemoreel - demiHeight){
            $(".demoreel iframe").fadeOut('slow');
            $(".demoreel iframe").attr('src', 'https://www.youtube.com/embed/rxJCQ3m4miA?rel=0&amp;controls=0&amp;showinfo=0;autoplay=0');
        }

    }else{
        if($(window).scrollTop() >= positionDemoreel - 200 && $(window).scrollTop() <= positionDemoreel + 200){
            demoreelHeight = $('.demoreel').height();
            $(".demoreel iframe").fadeIn('slow');
            $(".demoreel iframe").attr('src', 'https://www.youtube.com/embed/rxJCQ3m4miA?rel=0&amp;controls=0&amp;showinfo=0;autoplay=1');
            $(".demoreel iframe").css("height", +demoreelHeight+"px");
        }
    }
});

/* */

