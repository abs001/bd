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
                        <a href=""><i class="fa fa-users"></i> <span class="nav-label">Emplployee</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
        <li><a href="<?php echo base_url();?>index.php/Admin/createEmployee">Create Employee</a></li>
        <li><a href="<?php echo base_url();?>index.php/Admin/createUser">Create User</a></li>
        <li><a href="<?php echo base_url();?>index.php/Admin/role">Role</a></li>
        <li><a href="<?php echo base_url();?>index.php/Admin/department">Departments</a></li>
        <li><a href="<?php echo base_url();?>index.php/Admin/designation">Designations</a></li>
                        </ul>
                    </li>
                    <li id="procurement">
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Procurement </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li id="master">
                                <a href="#" id="damian">Master <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li id="supplier">
                                        <a href="<?php echo base_url()."index.php/Procurement/supplier";?>">Supplier</a>
                                    </li>
                                    <li id="manufactur">
                                        <a href="<?php echo base_url()."index.php/Procurement/manufactur";?>">Manufacture Company</a>
                                    </li>
                                    <li>
                                        <a href="#">Item</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#" id="damian">Purchase <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Add New Order</a>
                                    </li>
                                    <li>
                                        <a href="#">Order Tracking</a>
                                    </li>
                                    <li>
                                        <a href="#">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="#">Stock Adjustment</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#" id="damian">Report <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Stock Ledger</a>
                                    </li>
                                    <li>
                                        <a href="#">Current Stock</a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>   
                    </li> 
                </ul>
            </div>
        </nav>
        <!-- End of LeftSide -->