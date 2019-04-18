
<!doctype html>
<head>
    <meta  charset="windows-874">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>user_main_page</title>
    <meta name="description" content="user_main_page">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/assets/css/normalize.css">
    <link rel="stylesheet" href="css/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/assets/css/themify-icons.css">
    <link rel="stylesheet" href="css/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="css/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/assets/scss/style.css">
    <link href="css/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
</head>
<body>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">USER MENU</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">                  
                    <h3 class="menu-title">เม�?ู�?ั�?ทึ�?</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>เม�?ู�?ั�?ทึ�?</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">เ�?ิ�?ม�?ั�?ทึ�?�?ารตรว�?สุ�?ภา�?</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">เ�?ิ�?มราย�?าร�?ารตรว�?สุ�?ภา�?</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">เ�?ิ�?มสถา�?�?ยา�?าล</a></li>                          
                        </ul>
                    </li>                 
                    <h3 class="menu-title">เม�?ู�?าร�?ัด�?าร</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>เม�?ู�?าร�?ัด�?าร</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="index.php?page=menu_user">�?�?�?หา�?ล�?ารตรว�?สุ�?ภา�?</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">�?�?�?หาตามเ�?สตรว�?</a></li>
                             <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">�?�?�?หาตามสถา�?�?ยา�?าล</a></li>
                        </ul>
                    </li> 
                    <h3 class="menu-title">เ�?ิ�?มเติม</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>�?ัด�?าร�?ู�?�?�?�?</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="main.php?page=pass_change">เเ�?�?�?�?รหัส�?�?า�?</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>


    
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
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
