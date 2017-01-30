<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>EduMat :: @yield('title')</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{asset('theme/css/fonts.googleapis.com.css')}}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('theme/css/ace.min.css')}}" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{asset('theme/css/ace-part2.min.css')}}" />
    <![endif]-->
    <link rel="stylesheet" href="{{asset('theme/css/ace-rtl.min.css')}}" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{asset('theme/css/ace-ie.min.css')}}" />
    <![endif]-->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="{{asset('theme/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('theme/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body class="login-layout light-login">
<div class="main-container">
<div class="main-content">
<div class="row">
<div class="col-sm-10 col-sm-offset-1">
<div class="login-container">
<div class="center">

    <h1>
        <i class="ace-icon fa fa-university green"></i>
        <span class="blue" id="id-text2">EduMart</span>
    </h1>

</div>
<div class="space-6"></div>

    @yield('content')


</div>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{asset('theme/js/jquery-2.1.4.min.js')}}"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="{{asset('theme/js/jquery-1.11.3.min.js')}}"></script>
<![endif]-->

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        $('#blah').css('display','none');
        $(document).on('click', '.toolbar a[data-target]', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('.widget-box.visible').removeClass('visible');//hide others
            $(target).addClass('visible');//show target
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                    $('#blah').css('display','block');
                    var filename = $('input[type=file]').val();//.replace(/.*(\/|\\)/, '');
                    $('.ace-file-name').attr('data-title', filename); // sets

                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#id-input-file-2").change(function(){
            readURL(this);
        });

        $( "button:reset").click(function(){
            $( "input:file").val("");
            $('.ace-file-name').attr('data-title', '');
            $('#blah').attr('src', '');
            $('#blah').css('display','none');
        });
    });

    //you don't need this, just used for changing background


</script>
</body>
</html>
