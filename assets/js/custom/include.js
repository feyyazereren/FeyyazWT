$(function () {
    var includes = $('[data-include]');
    jQuery.each(includes, function(){
        var file = 'blocks/'+$(this).data('include') + '.html';
        $(this).load(file);
    });
});