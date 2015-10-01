<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Tools Shop</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/font-awesome.css')}}" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('js/boxOver.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".button-show-bar i").click(function(){
                $("ul.menu").slideToggle("slow");
            });
        });
    </script>
    @yield("styles")
</head>
<body>
<div class="pull-container width-100">
<div id="main_container">
<div id="header">
    <img src="{{url('images/tritin.vn/logo.png')}}">
</div>
<div id="main_content">
<div id="menu_tab">
   @include('share.__menu')
</div>
<div class="main-content row">
<!-- end of menu tab -->
@include('share.__leftLayout')
<!-- end of left content -->
@yield("center")
<!-- end of center content -->
@include('share.__rightLayout')
</div>
<!-- end of right content -->
</div>
</div>
<!-- end of main content -->
<div class="footer">
    <div class="left_footer"> <img src="images/tritin.vn/footer_logo.png" alt="" width="89" height="42"/> </div>
    <div class="center_footer"> Template name. All Rights Reserved 2008<br />
        <a href="http://csscreme.com"><img src="images/product/csscreme.jpg" alt="csscreme" title="csscreme" border="0" /></a><br />
        <img src="images/product/payment.gif" alt="" /> </div>
    <div class="right_footer"> <a href="#">home</a> <a href="#">about</a> <a href="#">sitemap</a> <a href="#">rss</a> <a href="#">contact us</a> </div>
</div>
</div>
<!-- end of main_container -->
<div align=center>This template  downloaded form <a href='#'>free website templates</a></div>
</div>
@yield("scripts")
</body>
</html>