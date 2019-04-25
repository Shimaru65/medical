
<html>
    <head>
        <meta charset="windows-874">      
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <aside id="left-panel" class="left-panel">
                    <nav class="navbar navbar-expand-sm navbar-default">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="main.php?page=home">ADMIN MENU</a>
                        </div>

                        <div id="main-menu" class="main-menu collapse navbar-collapse">
                            <ul class="nav navbar-nav">                  
                                <h3 class="menu-title">���ٺѹ�֡</h3><!-- /.menu-title -->
                                <li class="menu-item-has-children dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>���ٺѹ�֡</a>
                                    <ul class="sub-menu children dropdown-menu">
                                        <li><i class="fa fa-puzzle-piece"></i><a href="main.php?page=add_result">�����ѹ�֡��õ�Ǩ�آ�Ҿ</a></li>
                                        <li><i class="fa fa-id-badge"></i><a href="main.php?page=disease_list">������¡�á�õ�Ǩ�آ�Ҿ</a></li>
                                        <li><i class="fa fa-bars"></i><a href="main.php?page=hospital">����ʶҹ��Һ��</a></li>                          
                                    </ul>
                                </li>                 
                                <h3 class="menu-title">���١�èѴ���</h3><!-- /.menu-title -->

                                <li class="menu-item-has-children dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>���١�èѴ���</a>
                                    <ul class="sub-menu children dropdown-menu">
                                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="">���Ҽš�õ�Ǩ�آ�Ҿ</a></li>
                                        <li><i class="menu-icon ti-themify-logo"></i><a href="">���ҵ���ʵ�Ǩ</a></li>
                                        <li><i class="menu-icon ti-themify-logo"></i><a href="">���ҵ��ʶҹ��Һ��</a></li>
                                    </ul>
                                </li> 
                                <h3 class="menu-title">�������</h3><!-- /.menu-title -->
                                <li class="menu-item-has-children dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>�Ѵ��ü����</a>
                                    <ul class="sub-menu children dropdown-menu">
                                        <li><i class="menu-icon fa fa-sign-in"></i><a href="main.php?page=main_config_user">�Ѵ��ü����</a></li>
                                        <li><i class="menu-icon fa fa-sign-in"></i><a href="main.php?page=pass_change">�������ʼ�ҹ</a></li>
                                        <li><i class="menu-icon fa fa-sign-in"></i><a href="main.php?page=logout_code">LOGOUT</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </aside>
            </div>
        </div>
        <script src="css/assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="css/assets/js/plugins.js"></script>
        <script src="css/assets/js/main.js"></script>


        <script src="css/assets/js/lib/chart-js/Chart.bundle.js"></script>
        <script src="css/assets/js/dashboard.js"></script>
        <script src="css/assets/js/widgets.js"></script>
        <script src="css/assets/js/lib/vector-map/jquery.vmap.js"></script>
        <script src="css/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
        <script src="css/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
        <script src="css/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
        <script>
            (function ($) {
                "use strict";

                jQuery('#vmap').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#1de9b6',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#1de9b6', '#03a9f5'],
                    normalizeFunction: 'polynomial'
                });
            })(jQuery);
        </script>
    </body>
</html>
