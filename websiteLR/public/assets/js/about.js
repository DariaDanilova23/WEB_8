localStorage.setItem("Обо мне", "+");
var linc2 = $('.linc2'),
    timeoutId;
$('.link').hover(function() {
    clearTimeout(timeoutId);
    linc2.show();
}, function() {
    timeoutId = setTimeout($.proxy(linc2, 'hide'), 500)
});
linc2.mouseenter(function() {
    clearTimeout(timeoutId);
}).mouseleave(function() {
    linc2.hide();
});