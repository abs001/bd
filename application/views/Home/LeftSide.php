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
        <li><a href="<?php echo base_url();?>index.php/Admin/assignRole">Assign role</a></li>
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
                                    <li id="item">
                                        <a href="<?php echo base_url()."index.php/Procurement/item";?>">Item</a>
                                    </li>
                                    <li id="cat">
                                        <a href="<?php echo base_url()."index.php/Procurement/category";?>">Category</a>
                                    </li>
                                    

                                </ul>
                            </li>
                            <li id="purchase">
                                <a href="#" id="damian">Purchase <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li id="po">
                                        <a href="<?php echo base_url()."index.php/Procurement/purchaseOrder";?>">Purchase Order</a>
                                    </li>
                                    <li id="drug">
                                        <a href="<?php echo base_url()."index.php/Procurement/drug";?>">Drug</a>
                                    </li>
                                    <li id="invoice">
                                        <a href="<?php echo base_url()."index.php/Procurement/Invoice";?>">Invoice</a>
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

                    <li class="special_link">
                        <a href="#"><i class="fa fa-database"></i> <span class="nav-label">Diagnostic Center</span></a>
                    </li>

                    <li id="admin">
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Admin </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li id="center">
                                <a href="<?php echo base_url()."index.php/DiagnosticCenter/collectionCenter";?>" id="damian">Collection Center <span class="fa arrow"></span></a>
                            </li>
                            
                            <li id="">
                                <a href="#" id="damian">User Master <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li id="">
                                        <a href="#">Assign New Department</a>
                                    </li>
                                    <li id="">
                                        <a href="#">User Status</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" id="">Test Master <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Department</a>
                                    </li>
                                    <li>
                                        <a href="#">Test</a>
                                    </li>

                                    <li>
                                        <a href="#">Profile</a>
                                    </li>

                                    <li>
                                        <a href="#">Normal Values</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#">Specimen Master</a>
                                    </li>

                                    <li>
                                        <a href="#">Interpretaion Entry</a>
                                    </li>

                                    <li>
                                        <a href="#">Short Form</a>
                                    </li>

                                    <li>
                                        <a href="#">Formula Setting</a>
                                    </li>

                                    <li>
                                        <a href="#">Machine Detail</a>
                                    </li>

                                    
                                    
                                </ul>
                            </li>
                            <li id="lab">
                                        <a href="<?php echo base_url()."index.php/DiagnosticCenter/lab";?>" id="damian">Lab unit<span class="fa arrow"></span></a>
                            </li>

                            <li id="">
                                <a href="#" id="damian">Account <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li id="">
                                        <a href="#">Unlock Center</a>
                                    </li>
                                    <li id="">
                                        <a href="#">Bank</a>
                                    </li>
                                </ul>
                            </li>

                            <li id="test">
                                <a href="#" id="damian">Test Rate <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li id="rate">
                                        <a href="<?php echo base_url()."index.php/DiagnosticCenter/rate";?>">Rate Type</a>
                                    </li>
                                    <li id="">
                                        <a href="#">Rate Type Setting</a>
                                    </li>
                                    <li id="">
                                        <a href="#">Test Rate</a>
                                    </li>
                                    <li id="">
                                        <a href="#">Compliment Master</a>
                                    </li>
                                </ul>
                            </li>

                            <li id="">
                                <a href="#" id="damian">Admin <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li id="">
                                        <a href="#">Marque</a>
                                    </li>
                                    <li id="">
                                        <a href="#">Company Address</a>
                                    </li>
                                    <li id="">
                                        <a href="#">Audit Trail</a>
                                    </li>
                                    <li id="">
                                        <a href="#">Report Setting</a>
                                    </li>
                                    <li id="">
                                        <a href="#">Initial Master</a>
                                    </li>
                                    <li id="">
                                        <a href="#">User Login Info</a>
                                    </li>
                                    <li id="">
                                        <a href="#">Test Value Search</a>
                                    </li>
                                </ul>
                            </li>




                        </ul>   
                    </li> 




                </ul>
            </div>
        </nav>
        <!-- End of LeftSide -->