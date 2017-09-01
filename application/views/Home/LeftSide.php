<!-- LeftSide start -->
<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url();?>assets/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION['admin'];?></strong>
                             </span> <span class="text-muted text-xs block">Options <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="<?php echo base_url();?>index.php/Admin/logout">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            BloodClinic
                        </div>
                    </li>
                    <li id="dashboard">
                        <a href="<?php echo base_url();?>index.php/Welcome"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                    </li>
                    <li id="employee">
                        <a href="index.html"><i class="fa fa-users"></i> <span class="nav-label">Emplployee</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
        <li><a href="<?php echo base_url();?>index.php/Admin/createEmployee">Create Employee</a></li>
        <li><a href="<?php echo base_url();?>index.php/Admin/createUser">Create User</a></li>
        <li><a href="<?php echo base_url();?>index.php/Admin/role">Role</a></li>
        <li><a href="<?php echo base_url();?>index.php/Admin/department">Departments</a></li>
        <li><a href="<?php echo base_url();?>index.php/Admin/designation">Designations</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End of LeftSide -->