$('document').ready(function(){
    $('nav a').click(function(){
        var cont=$(this).attr('content');
        $('.page').hide();
        $('[data="'+cont+'"]').show();
        $('nav a').removeClass('active');
        $(this).addClass('active');
    });
    $('#slide').click(function(){
        var current=$('nav a.active');
        current.parents('li').next('li').find('a').click();
    });
    $('#contactUs').click(function(){
      $('.contact').slideDown();
    });
    $('#signUp').click(function(){
        $('.signup').slideDown();
      });
    
    $('#cont').click(function(){
        $('#step1').hide();
        $('#step2').fadeIn();
        $(this).parents('.popup-cont').addClass('step2-active');
        $('.step1').removeClass('active');
        $('.step2').addClass('active');
        $('.step-label>div:first-of-type').hide();
        $('.step-label>div:last-of-type').show();

    });
});