<script>
    window.izBlogConfigProvider = {};

    @foreach (app()['coreConfig']->initConfig('frontend') as $key => $config)
            window.izBlogConfigProvider['{{$key}}'] ={!! $config !!};
    @endforeach
</script>