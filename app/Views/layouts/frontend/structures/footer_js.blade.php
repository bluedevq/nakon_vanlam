<?php
$jsFiles = [
    'common/min',
    'common/xhr',
    'common/common',
];
?>
{!! loadFiles($jsFiles, '', 'js') !!}
@include('layouts.frontend.structures.footer_autoload')
