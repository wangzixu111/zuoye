<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:81:"D:\phpStudy\WWW\xinwen\public/../application/admin\view\administrator\create.html";i:1510309473;s:67:"D:\phpStudy\WWW\xinwen\public/../application/admin\view\layout.html";i:1489681872;s:67:"D:\phpStudy\WWW\xinwen\public/../application/admin\view\header.html";i:1489681872;s:65:"D:\phpStudy\WWW\xinwen\public/../application/admin\view\left.html";i:1510296463;s:74:"D:\phpStudy\WWW\xinwen\public/../application/admin\view\custom-fields.html";i:1510300557;s:67:"D:\phpStudy\WWW\xinwen\public/../application/admin\view\footer.html";i:1489681872;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo \think\Config::get('object_name'); ?> | 后台管理系统</title>
        <link rel="icon" type="image/ico" href="__PUBLIC__/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="__PUBLIC__/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="__PUBLIC__/css/vendor/docs.min.css">
        <link rel="stylesheet" href="__PUBLIC__/css/vendor/animate.css">
        <link rel="stylesheet" href="__PUBLIC__/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="__PUBLIC__/js/vendor/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="__PUBLIC__/js/vendor/daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="__PUBLIC__/js/vendor/morris/morris.css">
        <link rel="stylesheet" href="__PUBLIC__/js/vendor/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="__PUBLIC__/js/vendor/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="__PUBLIC__/js/vendor/rickshaw/rickshaw.min.css">
        <link rel="stylesheet" href="__PUBLIC__/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="__PUBLIC__/js/vendor/datatables/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="__PUBLIC__/js/vendor/datatables/datatables.bootstrap.min.css">
        <link rel="stylesheet" href="__PUBLIC__/js/vendor/chosen/chosen.css">
        <link rel="stylesheet" href="__PUBLIC__/js/vendor/summernote/summernote.css">
        <link rel="stylesheet" href="__PUBLIC__/js/vendor/touchspin/jquery.bootstrap-touchspin.min.css">
        <link rel="stylesheet" href="__PUBLIC__/js/vendor/colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="__PUBLIC__/js/vendor/nestable/css/style.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="__PUBLIC__/css/main.css">
        <!--/ stylesheets -->

        <link rel="stylesheet" href="__PUBLIC__/css/custom.css">

        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="__PUBLIC__/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->

        <script src="__PUBLIC__/js/vendor/jquery/jquery-1.11.2.min.js"></script>

        <script src="__PUBLIC__/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="__PUBLIC__/js/vendor/jRespond/jRespond.min.js"></script>


    </head>
    <body id="minovate" class="appWrapper">


        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">


            <!-- ===============================================
            ================= HEADER Content ===================
            ================================================ -->
            <section id="header">
                <header class="clearfix">

                    <!-- Branding -->
                    <div class="branding">
                        <a class="brand" href="<?php echo url('/admin'); ?>" target="_blank">
                            <span><?php echo \think\Config::get('object_name'); ?></span>
                        </a>
                        <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->

                    <!-- Right-side navigation -->
                    <ul class="nav-right pull-right list-inline">

                        <li class="dropdown nav-profile">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span><?php echo \think\Session::get('admin_nickname'); ?> <i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">

                                <li>
                                    <a role="button" tabindex="0" href="<?php echo url('/admin/administrator/'); ?><?php echo \think\Session::get('uid'); ?>">
                                        <i class="fa fa-user"></i>管理员信息
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo url('/admin/logout'); ?>" role="button" tabindex="0">
                                        <i class="fa fa-sign-out"></i>登出
                                    </a>
                                </li>

                            </ul>

                        </li>
                    </ul>
                    <!-- Right-side navigation end -->



                </header>

            </section>
            <!--/ HEADER Content  -->

<!-- =================================================
================= CONTROLS Content ===================
================================================== -->
<div id="controls">

    <!-- ================================================
    ================= SIDEBAR Content ===================
    ================================================= -->
    <aside id="sidebar">


        <div id="sidebar-wrap">

            <div class="panel-group slim-scroll" role="tablist">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#sidebarNav">
                                Navigation <i class="fa fa-angle-up"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                        <div class="panel-body">
                            <script>
                                $(window).load(function(){
                                    var moduleUrl = '<?php echo !empty($data['module_slug'])?$data['module_slug'] : "admin"; ?>';
                                    if(moduleUrl){
                                        var currentMenuItem = $('#navigation .'+moduleUrl);
                                        if(currentMenuItem.hasClass('dropdown')){
                                            currentMenuItem.addClass('open');
                                            currentMenuItem.find('ul').show();

                                        }else{
                                            currentMenuItem.addClass('active');
                                        }
                                    }
                                });
                            </script>
                            <!-- ===================================================
                            ================= NAVIGATION Content ===================
                            ==================================================== -->
                            <ul id="navigation">
                                <li class="manage"><a class="ajax-link" href="<?php echo url('/admin'); ?>"><i class="fa fa-home" aria-hidden="true"></i>
                					起始页</a>
                				</li>
                                <li class="administrator">
                                    <a role="button" tabindex="0"><i class="fa fa-user-secret" aria-hidden="true"></i> <span>管理员管理</span></a>
                                    <ul>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/administrator'); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> 管理员列表</a></li>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/administrator/create'); ?>"><i class="fa fa-caret-right"></i> 新增管理员</a></li>
                                    </ul>
                                </li>
                                <li class="posts">
                                    <a role="button" tabindex="0"><i class="fa fa-list" aria-hidden="true"></i> <span>新闻管理</span></a>
                                    <ul>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/posts'); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> 新闻列表</a></li>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/posts/create'); ?>"><i class="fa fa-caret-right"></i> 新增新闻</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!--/ NAVIGATION Content -->
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </aside>
    <!--/ SIDEBAR Content -->

</div>
<!--/ CONTROLS Content -->

<section id="content">

    <div class="page page-fullwidth-layout">

        <div class="pageheader">

            <h2><?php echo $data['module_name']; ?></h2>

            <div class="page-bar">

                <ul class="page-breadcrumb">
                    <li>
                        <a href="<?php echo url('/admin'); ?>"><i class="fa fa-home"></i> 起始页</a>
                    </li>
                    <li>
                        <a href="<?php echo url('/admin/administrator'); ?>"><?php echo $data['module_name']; ?></a>
                    </li>
                    <li>
                        新增<?php echo $data['module_name']; ?>
                    </li>

                </ul>

            </div>

        </div>

        <div class="pagecontent">



            <div class="add-nav">
                <div class="nav-heading">
                    <h3>新增<?php echo $data['module_name']; ?></h3>
                    <span class="controls pull-right">
                        <a href="<?php echo url($data['module_url']); ?>" class="btn btn-ef btn-ef-1 btn-ef-1-default btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip" title="返回"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                    </span>
                </div>

                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-md-12">


                        <!-- tile -->
                        <section class="tile">

                            <!-- tile header -->
                            <div class="tile-header dvd dvd-btm">
                                <h1 class="custom-font"><strong>新增 </strong> 基本信息</h1>
                            </div>
                            <!-- /tile header -->



                            <!-- tile body -->
                            <div class="tile-body">

                                <form role="form" enctype="multipart/form-data" action="<?php echo url($data['module_url']).'add'; ?>" method="post">
                                    <div class="row">
<?php if(is_array($data['edit_fields']) || $data['edit_fields'] instanceof \think\Collection): if( count($data['edit_fields'])==0 ) : echo "" ;else: foreach($data['edit_fields'] as $key=>$field): switch($name=$field['type']): case "text": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="form-group">
                    <?php if(isset($field['label']) AND $field['label']): ?><label><?php echo $field['label']; ?></label><?php endif; ?>

                    <input type="<?php echo $field['type']; ?>"
                        <?php if(isset($field['id']) AND $field['id']): ?>id="<?php echo $field['id']; ?>"<?php endif; if(isset($field['disabled']) AND $field['disabled']): ?>disabled="disabled"<?php endif; ?>
                        class="form-control <?php if(isset($field['class']) AND $field['class']): ?><?php echo $field['class']; endif; ?>"
                        <?php if(isset($field['extra']['data']['format'])): ?>data-format="<?php echo $field['extra']['data']['format']; ?>"<?php endif; ?>
                        name="<?php echo $key; ?>" value="<?php if(isset($item[$key])): ?><?php echo $item[$key]; endif; ?>">

                    <?php if(isset($field['notes']) AND $field['notes']): ?><p class="help-block"><?php echo $field['notes']; ?></p><?php endif; ?>
                </div>
            </div>
        <?php break; case "password": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="form-group">
                    <?php if(isset($field['label']) AND $field['label']): ?><label><?php echo $field['label']; ?></label><?php endif; ?>

                    <input type="<?php echo $field['type']; ?>"
                    <?php if(isset($field['id']) AND $field['id']): ?>id="<?php echo $field['id']; ?>"<?php endif; if(isset($field['disabled']) AND $field['disabled']): ?>disabled="disabled"<?php endif; ?>
                    class="form-control" name="<?php echo $key; ?>" value="">

                    <?php if(isset($field['notes']) AND $field['notes']): ?><p class="help-block"><?php echo $field['notes']; ?></p><?php endif; ?>
                </div>
            </div>
        <?php break; case "file": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="form-group">
                    <?php if(isset($field['label']) AND $field['label']): ?><label><?php echo $field['label']; ?></label><?php endif; ?>

                    <input type="<?php echo $field['type']; ?>"
                        <?php if(isset($field['id']) AND $field['id']): ?>id="<?php echo $field['id']; ?>"<?php endif; if(isset($field['disabled']) AND $field['disabled']): ?>disabled="disabled"<?php endif; ?>
                        name="<?php echo $key; ?>">

                    <?php if(isset($item[$key]) AND $item[$key] != ""): ?>
                        <a href="__UPLOADS__/<?php echo $item[$key]; ?>" target="_blank"><img src="__UPLOADS__/<?php echo $item[$key]; ?>" class="img-responsive img-thumbnail"></a>
                        <a href="<?php echo url($data['module_url'] . 'delete_image/' . $item['id']); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                    <?php endif; if(isset($field['notes']) AND $field['notes']): ?><p class="help-block"><?php echo $field['notes']; ?></p><?php endif; ?>
                </div>
            </div>
        <?php break; case "radio": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="checkbox">
                    <?php if(isset($field['label']) AND $field['label']): ?><span><?php echo $field['label']; ?></span><?php endif; foreach($field['default'] as $ov => $ol): ?>
                        <label>
                            <input type="<?php echo $field['type']; ?>" name="<?php echo $key; ?>"
                                <?php if(isset($field['disabled']) AND $field['disabled']): ?>disabled="disabled"<?php endif; ?>
                                value="<?php echo $ov; ?>" <?php if((isset($item[$key]) && $item[$key] == $ol)): ?>
                                checked="checked" <?php endif; ?>> <?php echo $ol; ?>
                        </label>
                    <?php endforeach; if(isset($field['notes']) AND $field['notes']): ?><p class="help-block"><?php echo $field['notes']; ?></p><?php endif; ?>
                </div>
            </div>
        <?php break; case "checkbox": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="checkbox">
                    <?php if(isset($field['label']) AND $field['label']): ?><span><?php echo $field['label']; ?></span><?php endif; foreach($field['default'] as $ov => $ol): ?>
                        <label>
                            <input type="<?php echo $field['type']; ?>" name="<?php echo $key; ?>[]"
                                <?php if(isset($field['disabled']) AND $field['disabled']): ?>disabled="disabled"<?php endif; ?>
                                value="<?php echo $ov; ?>" <?php if((isset($item[$key]) && $item[$key] == $ol)): ?>
                                checked="checked" <?php endif; ?>> <?php echo $ol; ?>
                        </label>
                    <?php endforeach; if(isset($field['notes']) AND $field['notes']): ?><p class="help-block"><?php echo $field['notes']; ?></p><?php endif; ?>
                </div>
            </div>
        <?php break; case "select": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="form-group">
                    <?php if(isset($field['label']) AND $field['label']): ?><label><?php echo $field['label']; ?></label><?php endif; ?>

                    <select  name="<?php echo $key; ?>"
                        <?php if(isset($field['id']) AND $field['id']): ?>id="<?php echo $field['id']; ?>"<?php endif; if(isset($field['disabled']) AND $field['disabled']): ?>disabled="disabled"<?php endif; ?>
                        class="form-control" style="max-width: 300px;">

                            <?php foreach($field['default'] as $ov => $ol): ?>
                                <option value="<?php echo $ov; ?>" <?php if(isset($item[$key]) AND $item[$key] == $ol): ?>selected="selected"<?php endif; ?>><?php echo $ol; ?></option>
                            <?php endforeach; ?>
                    </select>

                    <?php if(isset($field['notes']) AND $field['notes']): ?><p class="help-block"><?php echo $field['notes']; ?></p><?php endif; ?>
                </div>
            </div>
        <?php break; case "textarea": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="form-group">
                    <?php if(isset($field['label']) AND $field['label']): ?><label><?php echo $field['label']; ?></label><?php endif; ?>

                    <textarea
                        class="form-control <?php if(isset($field['class']) AND $field['class']): ?><?php echo $field['class']; endif; ?>"
                        <?php if(isset($field['id']) AND $field['id']): ?>id="<?php echo $field['id']; ?>"<?php endif; ?>
                        name="<?php echo $key; ?>"
                        <?php if(isset($field['disabled']) AND $field['disabled']): ?>disabled="disabled"<?php endif; ?>><?php if(isset($item[$key]) AND $item[$key]): ?><?php echo $item[$key]; endif; ?></textarea>
                    <?php if((isset($data['ckeditor']) and $data['ckeditor'])): ?><?php echo display_ckeditor($data['ckeditor']);; endif; if(isset($field['notes']) AND $field['notes']): ?><p class="help-block"><?php echo $field['notes']; ?></p><?php endif; ?>
                </div>
            </div>
        <?php break; case "alert": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="alert <?php if(isset($field['class']) AND $field['class']): ?><?php echo $field['class']; else: ?>alert-info<?php endif; ?>">
                    <?php if(isset($field['default'])): ?><?php echo $field['default']; endif; ?>
                </div>
            </div>
        <?php break; case "hr": ?>
             <div class="clearfix hr b-b mb-20 pb-20"></div>
        <?php break; case "clearfix": ?>
             <div class="clearfix"></div>
        <?php break; default: endswitch; endforeach; endif; else: echo "" ;endif; ?>
</div>
                                    <button class="btn btn-lg btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i>&nbsp;提交</button>
                    			</form>

                            </div>
                            <!-- /tile body -->

                        </section>
                        <!-- /tile -->
                    </div>
                </div>
            </div>



        </div>

    </div>

</section>
<!--/ CONTENT -->
        </div>
        <!--/ Application Content -->



        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->


        <script src="__PUBLIC__/js/vendor/d3/d3.min.js"></script>
        <script src="__PUBLIC__/js/vendor/d3/d3.layout.min.js"></script>

        <script src="__PUBLIC__/js/vendor/rickshaw/rickshaw.min.js"></script>

        <script src="__PUBLIC__/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="__PUBLIC__/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="__PUBLIC__/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="__PUBLIC__/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="__PUBLIC__/js/vendor/daterangepicker/daterangepicker.js"></script>

        <script src="__PUBLIC__/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="__PUBLIC__/js/vendor/flot/jquery.flot.min.js"></script>
        <script src="__PUBLIC__/js/vendor/flot/jquery.flot.resize.min.js"></script>
        <script src="__PUBLIC__/js/vendor/flot/jquery.flot.orderBars.js"></script>
        <script src="__PUBLIC__/js/vendor/flot/jquery.flot.stack.min.js"></script>
        <script src="__PUBLIC__/js/vendor/flot/jquery.flot.pie.min.js"></script>
        <script src="__PUBLIC__/js/vendor/flot-spline/jquery.flot.spline.min.js"></script>
        <script src="__PUBLIC__/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>

        <script src="__PUBLIC__/js/vendor/gaugejs/gauge.min.js"></script>

        <script src="__PUBLIC__/js/vendor/raphael/raphael-min.js"></script>
        <script src="__PUBLIC__/js/vendor/d3/d3.v2.js"></script>
        <script src="__PUBLIC__/js/vendor/rickshaw/rickshaw.min.js"></script>



        <script src="__PUBLIC__/js/vendor/morris/morris.min.js"></script>

        <script src="__PUBLIC__/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>



        <script src="__PUBLIC__/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="__PUBLIC__/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

        <script src="__PUBLIC__/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="__PUBLIC__/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>

        <script src="__PUBLIC__/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="__PUBLIC__/js/vendor/summernote/summernote.min.js"></script>

        <script src="__PUBLIC__/js/vendor/coolclock/coolclock.js"></script>
        <script src="__PUBLIC__/js/vendor/coolclock/excanvas.js"></script>

        <script src="__PUBLIC__/js/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <script src="__PUBLIC__/js/vendor/touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <!--/ vendor javascripts -->


        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="__PUBLIC__/js/main.js"></script>
        <!--/ custom javascripts -->








        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){
                // Initialize Statistics chart
                var data = [{
                    data: [[1,15],[2,40],[3,35],[4,39],[5,42],[6,50],[7,46],[8,49],[9,59],[10,60],[11,58],[12,74]],
                    label: 'Unique Visits',
                    points: {
                        show: true,
                        radius: 4
                    },
                    splines: {
                        show: true,
                        tension: 0.45,
                        lineWidth: 4,
                        fill: 0
                    }
                }, {
                    data: [[1,50],[2,80],[3,90],[4,85],[5,99],[6,125],[7,114],[8,96],[9,130],[10,145],[11,139],[12,160]],
                    label: 'Page Views',
                    bars: {
                        show: true,
                        barWidth: 0.6,
                        lineWidth: 0,
                        fillColor: { colors: [{ opacity: 0.3 }, { opacity: 0.8}] }
                    }
                }];

                var options = {
                    colors: ['#e05d6f','#61c8b8'],
                    series: {
                        shadowSize: 0
                    },
                    legend: {
                        backgroundOpacity: 0,
                        margin: -7,
                        position: 'ne',
                        noColumns: 2
                    },
                    xaxis: {
                        tickLength: 0,
                        font: {
                            color: '#fff'
                        },
                        position: 'bottom',
                        ticks: [
                            [ 1, 'JAN' ], [ 2, 'FEB' ], [ 3, 'MAR' ], [ 4, 'APR' ], [ 5, 'MAY' ], [ 6, 'JUN' ], [ 7, 'JUL' ], [ 8, 'AUG' ], [ 9, 'SEP' ], [ 10, 'OCT' ], [ 11, 'NOV' ], [ 12, 'DEC' ]
                        ]
                    },
                    yaxis: {
                        tickLength: 0,
                        font: {
                            color: '#fff'
                        }
                    },
                    grid: {
                        borderWidth: {
                            top: 0,
                            right: 0,
                            bottom: 1,
                            left: 1
                        },
                        borderColor: 'rgba(255,255,255,.3)',
                        margin:0,
                        minBorderMargin:0,
                        labelMargin:20,
                        hoverable: true,
                        clickable: true,
                        mouseActiveRadius:6
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: '%s: %y',
                        defaultTheme: false,
                        shifts: {
                            x: 0,
                            y: 20
                        }
                    }
                };




                // Initialize owl carousels
                $('#todo-carousel, #feed-carousel, #notes-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true,
                    responsive: true
                });

                $('#appointments-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    navigation: true,
                    navigationText : ['<i class=\'fa fa-chevron-left\'></i>','<i class=\'fa fa-chevron-right\'></i>'],
                    singleItem : true
                });
                //* Initialize owl carousels


                //Initialize mini calendar datepicker
                $('#mini-calendar').datetimepicker({
                    inline: true
                });
                //*Initialize mini calendar datepicker

                //todo's
                $('.widget-todo .todo-list li .checkbox').on('change', function() {
                    var todo = $(this).parents('li');

                    if (todo.hasClass('completed')) {
                        todo.removeClass('completed');
                    } else {
                        todo.addClass('completed');
                    }
                });
                //* todo's


                //initialize datatable
                $('#project-progress').DataTable({
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ],
                });
                //*initialize datatable

                //load wysiwyg editor
                $('#summernote').summernote({
                    toolbar: [
                        //['style', ['style']], // no style button
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        //['insert', ['picture', 'link']], // no insert buttons
                        //['table', ['table']], // no table button
                        //['help', ['help']] //no help button
                    ],
                    height: 143   //set editable area's height
                });
                //*load wysiwyg editor
            });
        </script>
        <!--/ Page Specific Scripts -->


    </body>
</html>
