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
});