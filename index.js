//index.js
// loading bar
$('.container > div').each(function(){
    var width=$(this).data('width');
    $(this).animate({ width: width }, 2500);
    $(this).after( '<span class="percentage">' + width + '</span>');
    $('.percentage').delay(3000).fadeIn(1000);
}); 