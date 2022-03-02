<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{ $title ? $title : '' }}</title>
    <meta name="description" content="CÔNG TY TNHH THƯƠNG MẠI XÂY DỰNG - SẢN XUẤT NHÔM KÍNH BẢO KHÁNH">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('img/logo.jpg') }}">
    <?php $cssFiles = [
        'lib/bootstrap.min',
        'lib/bootstrap-theme.min',
        'lib/fontawesome.min',
        'lib/solid.min',
    ];
    $jsFiles = [
        'lib/jquery.min',
        'lib/bootstrap.min',
        'lib/bootstrap.bundle.min',
        'lib/loadingoverlay.min',
        'lib/fontawesome.min',
        'lib/chart.min',
    ];
    ?>
    {!! loadFiles($jsFiles, '', 'js') !!}
    {!! loadFiles($cssFiles) !!}
    @include('layouts.frontend.structures.head_autoload')
    <!--[if lt IE 9]>
    {{Html::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}
    {{Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}
    <![endif]-->
</head>
