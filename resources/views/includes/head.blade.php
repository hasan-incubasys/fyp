<head>
    <script>
        var public_url = {!! json_encode(url('/')) !!};
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{Html::style('css/all.css')}}
    {{Html::style('css/bootstrap.css')}}
    {{Html::style('css/chosen.css')}}
    {{Html::style('css/chosen_style.css')}}
    {{Html::style('css/prism.css')}}
    {{Html::style('css/OlxCSS.css')}}
    {{Html::script('js/jquery.js')}}
    {{Html::script('js/custom.js')}}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1.0" />--}}
    {{--<link rel="stylesheet" href="all.css" />--}}
    {{--<link rel="stylesheet" href="bootstrap.css"/>--}}
    {{--<link rel="stylesheet" href="chosen.css"/>--}}
    {{--<link rel="stylesheet" href="chosen_style.css"/>--}}
    {{--<link rel="stylesheet" href="prism.css"/>--}}
    {{--<link rel="stylesheet" href="style1.css"/>--}}
    <title>Answers.com</title>
</head>