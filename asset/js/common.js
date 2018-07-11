
$(function(){
    $('.swich').on('click', function(){
    $(this).children().toggleClass('nohide');
    $(this).toggleClass('on');
});
})
