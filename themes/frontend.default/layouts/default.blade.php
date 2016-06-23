<!DOCTYPE html>
<html>
<head>
    <title>{!! Theme::get('title') !!}</title>
    <meta charset="utf-8">
    <meta name="keywords" content="{!!  Theme::get('keywords') !!}">
    <meta name="description" content="{!! Theme::get('description') !!}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="author" content="">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    {{--Assets style in bower--}}
    {!! Theme::asset()->styles() !!}

    {{--Assest style of custom--}}
    {!! Theme::asset()->container('custom-assets')->styles() !!}
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
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
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
</body>
</html>