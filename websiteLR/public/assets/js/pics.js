localStorage.setItem("Фотоальбом", "+");
setCookie('Фотоальбом', '', 12);

function setCookie(name, value, days) {
    var date = new Date;
    date.setDate(date.getDate() + days);
    value = encodeURIComponent(value);
    document.cookie = name + "=" + value + ";path=/; expires=" + date.toUTCString();
};
(function($) {
    var $li = $('.img-list').find('> li'),
        $links = $li.find('> a'),
        $lightbox = $('.lightbox'),
        $next = $('.next'),
        $prev = $('.prev'),
        $overlay = $('.overlay'),
        liIndex,
        targetImg;
    //preload images
    var imgSources = ['nicki minaj.jpg', 'riri.jpg', 'beyonce.jpg', 'sza.jpg', 'aaliyah.jpg', 'saweetie.jpg', 'rico.jpg', 'kehlani.jpg', 'selena gomez.jpg', 'ariana grande.jpg', 'flo milli.jpg', 'dua lipa.jpg', 'halsey.jpg', 'zendaya.jpg', 'bella hadid.jpg', 'irina shayk.jpg'];
    var imgs = [];
    for (var i = 0; i < imgSources.length; i++) {
        imgs[i] = new Image();
        imgs[i].src = imgSources[i];
    }

    function replaceImg(src) {
        $lightbox.find('img').attr('src', src);
    }

    function getHref(index) {
        return $li.eq(index).find('>a').attr('href');
    }

    function closeLigtbox() {
        $lightbox.fadeOut();
    }
    $overlay.click(closeLigtbox);
    $links.click(function(e) {
        e.preventDefault();
        targetImg = $(this).attr('href');
        liIndex = $(this).parent().index();
        replaceImg(targetImg);
        $lightbox.fadeIn();
    });
    $next.click(function() {
        if ((liIndex + 1) < $li.length) {
            targetImg = getHref(liIndex + 1);
            liIndex++;
        } else {
            targetImg = getHref(0);
            liIndex = 0;
        }
        replaceImg(targetImg);
    });
    $prev.click(function() {
        if ((liIndex) > 0) {
            targetImg = getHref(liIndex - 1);
            liIndex--;
        } else {
            targetImg = getHref($li.length - 1);
            liIndex = $li.length - 1;
        }
        replaceImg(targetImg);
    });
})(jQuery);