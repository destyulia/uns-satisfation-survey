var $tableOffset = $("#table-1").offset().top,
    $header = $("#table-1 > thead").clone(),
    $fixedHeader = $("#header-fixed").append($header);
$(window).bind("resize", function() {
  $fixedHeader.width($("table").width());
});
$(window).bind("scroll", function() {
    var offset = $(this).scrollTop();
    
    if (offset >= $tableOffset && $fixedHeader.is(":hidden")) {
        $fixedHeader.show().width($("table").width());
    }
    else if (offset < $tableOffset) {
        $fixedHeader.hide();
    }
});