<!DOCTYPE html>
<html class="st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l2" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ThemeKit</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="{{url('assets/css/vendor/all.css')}}" rel="stylesheet">
    @yield('styles')
    
    <link href="{{url('assets/css/app/app.css')}}" rel="stylesheet">


</head>

<body>

<!-- Wrapper required for sidebar transitions -->
<div class="st-container">

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#sidebar-menu" data-toggle="sidebar-menu" data-effect="st-effect-3" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a>

            <a href="#sidebar-chat" data-toggle="sidebar-menu" class="toggle pull-right"><i class="fa fa-comments"></i></a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand hidden-xs navbar-brand-primary">Trí Tín</a>
        </div>
        <div class="navbar-collapse collapse" id="collapse">
            <form class="navbar-form navbar-left hidden-xs" role="search">
                <div class="search-2">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-w-150" placeholder="Search ..">
                <span class="input-group-btn">
            <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
        </span>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <!-- notifications -->
                <li class="dropdown notifications updates hidden-xs hidden-sm">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge badge-primary">4</span>
                    </a>
                    <ul class="dropdown-menu" role="notification">
                        <li class="dropdown-header">Notifications</li>
                        <li class="media">
                            <div class="pull-right">
                                <span class="label label-success">New</span>
                            </div>
                            <div class="media-left">
                                <img src="images/people/50/guy-2.jpg" alt="people" class="img-circle" width="30">
                            </div>
                            <div class="media-body">
                                <a href="#">Adrian D.</a> posted <a href="#">a photo</a> on his timeline.
                                <br/>
                                <span class="text-caption text-muted">5 mins ago</span>
                            </div>
                        </li>
                        <li class="media">
                            <div class="pull-right">
                                <span class="label label-success">New</span>
                            </div>
                            <div class="media-left">
                                <img src="images/people/50/guy-6.jpg" alt="people" class="img-circle" width="30">
                            </div>
                            <div class="media-body">
                                <a href="#">Bill</a> posted <a href="#">a comment</a> on Adrian's recent <a href="#">post</a>.
                                <br/>
                                <span class="text-caption text-muted">3 hrs ago</span>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <span class="icon-block s30 bg-grey-200"><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="media-body">
                                <a href="#">Mary D.</a> and <a href="#">Michelle</a> are now friends.
                                <p>
                                    <span class="text-caption text-muted">1 day ago</span>
                                </p>
                                <a href="">
                                    <img class="width-30 img-circle" src="images/people/50/woman-6.jpg" alt="people">
                                </a>
                                <a href="">
                                    <img class="width-30 img-circle" src="images/people/50/woman-3.jpg" alt="people">
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- // END notifications -->
                <!-- messages -->
                <li class="dropdown notifications hidden-xs hidden-sm">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>

                        <span class="badge floating badge-danger">12</span>

                    </a>
                    <ul class="dropdown-menu">
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object thumb" src="images/people/50/guy-2.jpg" alt="people">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="pull-right">
                                    <span class="label label-default">5 min</span>
                                </div>
                                <h5 class="media-heading">Adrian D.</h5>

                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object thumb" src="images/people/50/woman-7.jpg" alt="people">
                                </a>
                            </div>

                            <div class="media-body">
                                <div class="pull-right">
                                    <span class="label label-default">2 days</span>
                                </div>
                                <h5 class="media-heading">Jane B.</h5>
                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object thumb" src="images/people/50/guy-8.jpg" alt="people">
                                </a>
                            </div>

                            <div class="media-body">
                                <div class="pull-right">
                                    <span class="label label-default">3 days</span>
                                </div>
                                <h5 class="media-heading">Andrew M.</h5>
                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- // END messages -->
                <!-- user -->
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="images/people/110/guy-6.jpg" alt="" class="img-circle" /> Bill<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-wrench"></i>Settings</a></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
                <!-- // END user -->
                <!-- country flags -->

                <!-- // END country flags -->
            </ul>
        </div>
    </div>
</div>

<!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
<div class="sidebar sidebar-chat right sidebar-size-2 sidebar-offset-0 chat-skin-white" id=sidebar-chat>
    <div class="split-vertical">
        <div class="chat-search">
            <input type="text" class="form-control" placeholder="Search" />
        </div>

        <ul class="chat-filter nav nav-pills ">
            <li class="active"><a href="#" data-target="li">All</a></li>
            <li><a href="#" data-target=".online">Online</a></li>
            <li><a href="#" data-target=".offline">Offline</a></li>
        </ul>
        <div class="split-vertical-body">
            <div class="split-vertical-cell">
                <div data-scrollable>
                    <ul class="chat-contacts">
                        <li class="online" data-user-id="1">
                            <a href="#">
                                <div class="media">
                                    <div class="pull-left">
                                        <span class="status"></span>
                                        <img src="images/people/110/guy-6.jpg" width="40" class="img-circle" />
                                    </div>
                                    <div class="media-body">

                                        <div class="contact-name">Jonathan S.</div>
                                        <small>"Free Today"</small>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="online away" data-user-id="2">
                            <a href="#">

                                <div class="media">
                                    <div class="pull-left">
                                        <span class="status"></span>
                                        <img src="images/people/110/woman-5.jpg" width="40" class="img-circle" />
                                    </div>
                                    <div class="media-body">
                                        <div class="contact-name">Mary A.</div>
                                        <small>"Feeling Groovy"</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online" data-user-id="3">
                            <a href="#">
                                <div class="media">
                                    <div class="pull-left ">
                                        <span class="status"></span>
                                        <img src="images/people/110/guy-3.jpg" width="40" class="img-circle" />
                                    </div>
                                    <div class="media-body">
                                        <div class="contact-name">Adrian D.</div>
                                        <small>Busy</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline" data-user-id="4">
                            <a href="#">
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="images/people/110/woman-6.jpg" width="40" class="img-circle" />
                                    </div>
                                    <div class="media-body">
                                        <div class="contact-name">Michelle S.</div>
                                        <small>Offline</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline" data-user-id="5">
                            <a href="#">
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="images/people/110/woman-7.jpg" width="40" class="img-circle" />
                                    </div>
                                    <div class="media-body">
                                        <div class="contact-name">Daniele A.</div>
                                        <small>Offline</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online" data-user-id="6">
                            <a href="#">
                                <div class="media">
                                    <div class="pull-left">
                                        <span class="status"></span>
                                        <img src="images/people/110/guy-4.jpg" width="40" class="img-circle" />
                                    </div>
                                    <div class="media-body">
                                        <div class="contact-name">Jake F.</div>
                                        <small>Busy</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online away" data-user-id="7">
                            <a href="#">
                                <div class="media">
                                    <div class="pull-left">
                                        <span class="status"></span>
                                        <img src="images/people/110/woman-6.jpg" width="40" class="img-circle" />
                                    </div>
                                    <div class="media-body">
                                        <div class="contact-name">Jane A.</div>
                                        <small>"Custom Status"</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline" data-user-id="8">
                            <a href="#">
                                <div class="media">
                                    <div class="pull-left">
                                        <span class="status"></span>
                                        <img src="images/people/110/woman-8.jpg" width="40" class="img-circle" />
                                    </div>
                                    <div class="media-body">
                                        <div class="contact-name">Sabine J.</div>
                                        <small>"Offline right now"</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online away" data-user-id="9">
                            <a href="#">
                                <div class="media">
                                    <div class="pull-left">
                                        <span class="status"></span>
                                        <img src="images/people/110/woman-9.jpg" width="40" class="img-circle" />
                                    </div>
                                    <div class="media-body">
                                        <div class="contact-name">Danny B.</div>
                                        <small>Be Right Back</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online" data-user-id="10">
                            <a href="#">
                                <div class="media">
                                    <div class="pull-left">
                                        <span class="status"></span>
                                        <img src="images/people/110/woman-8.jpg" width="40" class="img-circle" />
                                    </div>
                                    <div class="media-body">
                                        <div class="contact-name">Elise J.</div>
                                        <small>My Status</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online" data-user-id="11">
                            <a href="#">
                                <div class="media">
                                    <div class="pull-left">
                                        <span class="status"></span>
                                        <img src="images/people/110/guy-3.jpg" width="40" class="img-circle" />
                                    </div>
                                    <div class="media-body">
                                        <div class="contact-name">John J.</div>
                                        <small>My Status #1</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="chat-window-container"></div>

<!-- sidebar effects OUTSIDE of st-pusher: -->
<!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

<!-- content push wrapper -->
<div class="st-pusher">

<!-- Sidebar component with st-effect-3 (set on the toggle button within the navbar) -->
<div class="sidebar left sidebar-size-2 sidebar-offset-0 sidebar-skin-blue sidebar-visible-desktop" id=sidebar-menu data-type=collapse>
<div class="split-vertical">
<div class="sidebar-block tabbable tabs-icons">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#sidebar-tabs-menu" data-toggle="tab"><i class="fa fa-bars"></i></a></li>
        <li><a href="#sidebar-tabs-2" data-toggle="tab"><i class="fa fa-bar-chart-o"></i></a></li>
    </ul>
</div>
<div class="split-vertical-body">
  @include('admin.share.__menuDashboard')

</div>
<!-- // END .split-vertical-body -->

<ul class="sidebar-menu sm-active-item-bg sm-icons-right sm-icons-block">
    <li><a href="../../../index.html"><i class="fa fa-eyedropper"></i> <span>Themes</span></a></li>
</ul>

</div>
</div>

<!-- sidebar effects INSIDE of st-pusher: -->
<!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

<!-- this is the wrapper for the content -->
<div class="st-content" id="content">

<!-- extra div for emulating position:fixed of the menu -->
<div class="st-content-inner">

<div class="container-fluid">
    @yield("mainbody")
</div>

</div>
<!-- /st-content-inner -->

</div>
<!-- /st-content -->

</div>
<!-- /st-pusher -->

<!-- Footer -->
<footer class="footer">
    <strong>Trí tín</strong> v4.0.0 &copy; Copyright 2015
</footer>
<!-- // Footer -->

</div>
<!-- /st-container -->

<!-- Modal -->
<div class="modal fade image-gallery-item" id="showImageModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-header">
            On my way to the top
        </div>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img class="img-responsive" src="images/place1-full.jpg" alt="Place">
    </div>
</div>

<!-- Inline Script for colors and config objects; used by various external scripts; -->
<script>
    var colors = {
        "danger-color": "#e74c3c",
        "success-color": "#81b53e",
        "warning-color": "#f0ad4e",
        "inverse-color": "#2c3e50",
        "info-color": "#2d7cb5",
        "default-color": "#6e7882",
        "default-light-color": "#cfd9db",
        "purple-color": "#9D8AC7",
        "mustard-color": "#d4d171",
        "lightred-color": "#e15258",
        "body-bg": "#f6f6f6"
    };
    var config = {
        theme: "admin",
        skins: {
            "default": {
                "primary-color": "#3498db"
            }
        }
    };
</script>

<!-- Vendor Scripts Bundle
  Includes all of the 3rd party JavaScript libraries above.
  The bundle was generated using modern frontend development tools that are provided with the package
  To learn more about the development process, please refer to the documentation.
  Do not use it simultaneously with the separate bundles above. -->
<script src="{{url('assets/js/vendor/all.js')}}"></script>

<!-- Vendor Scripts Standalone Libraries -->
<!-- <script src="js/vendor/core/all.js"></script> -->
<!-- <script src="js/vendor/core/jquery.js"></script> -->
<!-- <script src="js/vendor/core/bootstrap.js"></script> -->
<!-- <script src="js/vendor/core/breakpoints.js"></script> -->
<!-- <script src="js/vendor/core/jquery.nicescroll.js"></script> -->
<!-- <script src="js/vendor/core/isotope.pkgd.js"></script> -->
<!-- <script src="js/vendor/core/packery-mode.pkgd.js"></script> -->
<!-- <script src="js/vendor/core/jquery.grid-a-licious.js"></script> -->
<!-- <script src="js/vendor/core/jquery.cookie.js"></script> -->
<!-- <script src="js/vendor/core/jquery-ui.custom.js"></script> -->
<!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
<!-- <script src="js/vendor/core/handlebars.js"></script> -->
<!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
<!-- <script src="js/vendor/core/load_image.js"></script> -->
<!-- <script src="js/vendor/core/jquery.debouncedresize.js"></script> -->
<!-- <script src="js/vendor/tables/all.js"></script> -->
<!-- <script src="js/vendor/forms/all.js"></script> -->
<!-- <script src="js/vendor/media/all.js"></script> -->
<!-- <script src="js/vendor/player/all.js"></script> -->
<!-- <script src="js/vendor/charts/all.js"></script> -->
<!-- <script src="js/vendor/charts/flot/all.js"></script> -->
<!-- <script src="js/vendor/charts/easy-pie/jquery.easypiechart.js"></script> -->
<!-- <script src="js/vendor/charts/morris/all.js"></script> -->
<!-- <script src="js/vendor/charts/sparkline/all.js"></script> -->
<!-- <script src="js/vendor/maps/vector/all.js"></script> -->
<!-- <script src="js/vendor/tree/jquery.fancytree-all.js"></script> -->
<!-- <script src="js/vendor/nestable/jquery.nestable.js"></script> -->
<!-- <script src="js/vendor/angular/all.js"></script> -->

<!-- App Scripts Bundle
  Includes Custom Application JavaScript used for the current theme/module;
  Do not use it simultaneously with the standalone modules below. -->
<script src="{{url('assets/js/app/app.js')}}"></script>
@yield('scripts')
<!-- App Scripts Standalone Modules
  As a convenience, we provide the entire UI framework broke down in separate modules
  Some of the standalone modules may have not been used with the current theme/module
  but ALL the modules are 100% compatible -->

<!-- <script src="js/app/essentials.js"></script> -->
<!-- <script src="js/app/layout.js"></script> -->
<!-- <script src="js/app/sidebar.js"></script> -->
<!-- <script src="js/app/media.js"></script> -->
<!-- <script src="js/app/player.js"></script> -->
<!-- <script src="js/app/timeline.js"></script> -->
<!-- <script src="js/app/chat.js"></script> -->
<!-- <script src="js/app/maps.js"></script> -->
<!-- <script src="js/app/charts/all.js"></script> -->
<!-- <script src="js/app/charts/flot.js"></script> -->
<!-- <script src="js/app/charts/easy-pie.js"></script> -->
<!-- <script src="js/app/charts/morris.js"></script> -->
<!-- <script src="js/app/charts/sparkline.js"></script> -->

</body>

</html>