(function ($) {
    $('.content .postlink').each(function() {
        var ogpdata = $(this).data('ogp');
        if (ogpdata.title !== undefined) {
            var block = '<div class="ogpblock">';
            if (ogpdata.image !== undefined) {
                block += '<img src="' + ogpdata.image + '"/>';
            }
            block += '<div class="ogptext"><h4>' + ogpdata.title + '</h4>' + ogpdata.description + '</div></div>';
            $(this).html(block);
            $(this).addClass('ogplink');
            $(this).removeAttr('data-ogp');
        }
    });
})(jQuery);