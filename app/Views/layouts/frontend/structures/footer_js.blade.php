<?php
$jsFiles = [
    'lib/jquery.min',
    'lib/popper.min',
    'lib/bootstrap.min',
    'lib/jquery.magnific-popup.min',
    'lib/isotope.pkgd.min',
    'lib/jquery-scrolltofixed.min',
    'lib/flickity.pkgd.min',
    'frontend/assets/main',
];
?>
{!! loadFiles($jsFiles, '', 'js') !!}
<script type="application/javascript">
    $('.main-carousel').flickity({
        // options
        cellAlign: 'center',
        autoPlay: 3000,
        pauseAutoPlayOnHover: true,
        lazyLoad: true,
        freeScroll: true,
        contain: true,
        pageDots: false,
    });
</script>
@include('layouts.frontend.structures.footer_autoload')
