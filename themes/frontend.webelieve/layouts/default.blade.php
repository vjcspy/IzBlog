<!DOCTYPE html>
<html>
<head>
    <title>{!! Theme::get('title') !!}</title>
    <meta charset="utf-8">
    <meta name="keywords" content="{!!  Theme::get('keywords') !!}">
    <meta name="description" content="{!! Theme::get('description') !!}">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <!-- Loading Source Sans Pro, Cambay, Teko font that is used in this theme-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    {{--Assets style in bower--}}
    {!! Theme::asset()->styles() !!}

    {{--Assest style of custom--}}
    {!! Theme::asset()->container('custom-assets')->styles() !!}
</head>
<body class="sidebar-hide">

{{--Inject SVg--}}
{!! Theme::partial('svgData') !!}
{{--View--}}
{!! Theme::content() !!}

{{--ConfigProvider--}}
{!! Theme::partial('izBlogConfigProvider') !!}

{{--Assets scripts in bower--}}
{!! Theme::asset()->container('footer')->scripts() !!}

{{--Core js: app.js/config.js/config.lazyload/config.router.js--}}
{{--{!! Theme::partial('appCoreJs') !!}--}}

{{--Assets scripts of custom--}}
{!! Theme::asset()->container('custom-assets')->scripts() !!}
<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places"></script>
</body>
</html>