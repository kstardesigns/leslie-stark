


$('.info1 .bottom a').click(function(e){
    e.preventDefault();
    $(this).closest('.info1').toggle();
    $(this).closest('.info1').siblings().toggle();
});

$('.info2 .bottom a').click(function(e){
    e.preventDefault();
    $(this).closest('.info2').toggle();
    $(this).closest('.info2').siblings().toggle();
});

$('.imageblock .dots img').click(function() {
    var dotindex = $(this).index();

    $(this).attr('src','assets/dotactive.png');
    $(this).addClass('active');
    $(this).siblings().removeClass('active').attr('src','assets/dot.png');
    $(this).closest('.dots').siblings('.cardpic.active').removeClass('active');
    $(this).closest('.dots').siblings('.cardpic').eq(dotindex).addClass('active');

});

var bclicks = 0;
$('.buyingexpand').click(function() {
    $('.buyingmore').toggle();
    
    if  (bclicks % 2 !== 0)  {
          $(this).html('Expand +');
    } else { 
          $(this).html('Show less');
    }
    bclicks++;
return false;
});

var sclicks = 0;
$('.sellingexpand').click(function() {
    $('.sellingmore').toggle();
    
    if  (sclicks % 2 !== 0)  {
          $(this).html('Expand +');
    } else { 
          $(this).html('Show less');
    }
    sclicks++;
return false;
});