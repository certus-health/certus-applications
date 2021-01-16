  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="main/index" class="site_title"><img src="../img/rsz_1certuslogowatermark.png"><span>Certus</span></a>            
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="main/index"><i class="fa fa-calendar"></i> Calendar</a></li>
                  <li><a href="clients"><i class="fa fa-user"></i> Screeners</a></li>
                  <li><a><i class="fa fa-usd"></i> Billing</a></li>
                  <li><a href="insights"><i class="fa fa-bar-chart"></i> Insights</a></li>                  
                  <li><a><i class="fa fa-bookmark-o"></i> Activity</a></li>
                  <li><a href="reminders" ><i class="fa fa-check-square-o"></i> Reminders</a></li>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <!-- <img src="images/img.jpg" alt=""> -->
                    <?php echo $userFirstName;?> <?php echo $userLastName?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"><?php echo $userRole; ?></a></li>
                    <?php foreach ($options as $key => $option){ ?>
                      <li><a href="<?php echo $href[$key] ?>"><i class="fa fa-<?php echo $font[$key] ?> pull-right"></i><?php echo $option?></a></li>
                    <?php } ?>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">1</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <!-- <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span> -->
                        <span>
                          <span>Dr. Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          They were where...
                        </span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->