<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <!-- Title -->
    <title>{{ $title ? $title : '' }}</title>
    <meta name="description" content="{{ $title ? $title : '' }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700;800&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&amp;display=swap"
          rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ public_url('img/logo.jpg') }}">

    <?php $cssFiles = [
        'lib/bootstrap.min',
        'lib/animate.min',
        'lib/fontawesome.min',
        'lib/brands.min',
        'lib/solid.min',
        'lib/flickity',
        'frontend/assets/responsive',
        'frontend/assets/style',
    ];
    ?>
    {!! loadFiles($cssFiles) !!}
    @include('layouts.frontend.structures.head_autoload')
</head>
