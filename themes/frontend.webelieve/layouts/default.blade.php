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
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&subset=vietnamese" rel="stylesheet">
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
<script>
    jQuery(document).ready(function ($) {

        var jssor_1_SlideoTransitions = [
            [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
            [{b:1900,d:2000,x:-379,e:{x:7}}],
            [{b:1900,d:2000,x:-379,e:{x:7}}],
            [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
        ];

        var jssor_1_options = {
            $AutoPlay: true,
            $SlideDuration: 800,
            $SlideEasing: $Jease$.$OutQuint,
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 1920);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places"></script>
</body>
</html>