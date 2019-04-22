<!doctype html>
<head>
    <meta charset="windows-874">
</head>
<body>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" 
                        aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">USER MENU</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">                  
                    <h3 class="menu-title">รายการการตรวจโรค</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <i class="menu-icon fa fa-laptop"></i>รายการการตรวจโรค</a>
                        <ul class="sub-menu children dropdown-menu">
                            <?php
                            include 'connect/dbconnect.php';
                            $showhos = "select * from disease_list";
                            $showemp = "select * from employee";
                            $result = mssql_query($showhos);
                            $result2 = mssql_query($showemp);
                            $record1 = mssql_fetch_array($result2);
                            while ($record = mssql_fetch_array($result)) {
                                ?>
                                <li><i class="fa fa-puzzle-piece"></i>
                                    <a href="<?php
                                    echo"main.php?page=show_result&disease_id=$record[disease_id]"
                                    . "&id_employee=$record1[id_employee]"
                                    ?>">
                                <?php echo "$record[disease_list_name]"; ?></a></li>
                            <?php }
                            ?>
                        </ul>
                    </li>                 
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-tasks"></i>รายชื่อโรงพยาบาล</a>
                        <ul class="sub-menu children dropdown-menu">
                            <?php
                            include 'connect/dbconnect.php';
                            $showhos1 = "select * from hospital";
                            $showdisease = "select * from disease_list";
                            $result3 = mssql_query($showdisease);
                            $result1 = mssql_query($showhos1);
                            $record2 = mssql_fetch_array($result3);
                            while ($record = mssql_fetch_array($result1)) {
                                ?>
                                <li><i class="menu-icon fa fa-fort-awesome"></i>
                                    <a href="<?php
                                    echo"main.php?page=show_hospital&hospital_id=$record[hospital_id]"
                                    . "&disease_id=$record2[disease_id]"
                                    ?>">
                                <?php echo "$record[hospital_name]"; ?>"</a></li>
                            <?php }
                            ?>
                        </ul>
                    </li> 
                    <h3 class="menu-title">เพิ่มเติม</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <i class="menu-icon fa fa-glass"></i>จัดการผู้ใช้</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="main.php?page=pass_change">เเก้ใขรหัสผ่าน</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="main.php?page=logout_code">ออกจากระบบ</a></li>
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
