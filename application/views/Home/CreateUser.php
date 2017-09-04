<div class="row">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Employee / Create User</h5>
                        <div class="text-right">    
                            <button type="button" class="btn btn-primary" id="openForm" data-toggle="modal" data-target="#createUserModal">
                                Add User
                            </button>
                        </div>
                    </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="roleTable" >
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Department</th>
                        <th>Employee name</th>
                        <th>Lab Unit</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Mobile</th>
                        <th>Type</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
<?php 
    foreach ($employeeResult as $value) {
?>
    <tr class="gradeX">
        <td><?php echo $value['username']?></td>
        <td><?php echo $value['password']?></td>
        <td><?php echo $value['department']?></td>
        <td><?php echo $value['employee_name']?></td>
        <td><?php echo $value['lab_unit']?></td>
        <td><?php echo $value['emailid']?></td>
        <td><?php echo $value['phone']?></td>
        <td><?php echo $value['mobile']?></td>
        <td><?php echo $value['usertype']?></td>
        <td><?php echo $value['role']?></td>
        <td>
<button class="btn btn-warning" id="userEdit" data-toggle="modal" onclick="userEdit(<?php echo $value['id']?>);" data-target="#editUserModal"><i class="fa fa-pencil"></i></span></button></td>
        <td><button class="btn btn-danger" id="userDelete" onclick="deleteUser(<?php echo $value['id']?>)"><i class="fa fa-trash"></i></span></button></td>
    </tr>
<?php
    }
?>
                    </tbody>
                    </table>
                        </div>
                        </div>
                    </div>
<!-- Modal : createemp -->
<div class="modal inmodal fade" id="createUserModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Create user</h4>
            </div>
        <form class="form-horizontal" id="fromCreateUser">
            <div class="modal-body">
                    <div class="form-group"><label class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10"><input type="text" name="username" id="checkUserName" class="form-control" autocomplete="false">
                        <span id="userCheckMesssage" style="color: red;"></span>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Department</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="department">
                                <option>select</option>
                                <?php foreach($department as $value){?>
                                    <option value="<?php echo $value['name'];?>"><?php echo $value['name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Employee</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="employee_name">
                                <?php foreach($employee as $value){?>
                                    <option value="<?php echo $value['name'];?>"><?php echo $value['name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Lab Unit</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="lab_unit"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Email ID</label>
                        <div class="col-sm-10"><input type="email" class="form-control" name="emailid"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Telephone</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="phone"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Mobile</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="mobile"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Type</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="usertype">
                                <option>Select</option>
                                <option value="Consultant">Consultant</option>
                                <option value="Reference">Reference</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- End of modal -->
<!-- Modal : EditUser Update -->
<div class="modal inmodal fade" id="editUserModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Edit User</h4>
            </div>
        <form class="form-horizontal" id="updateUserForm">
            <div class="modal-body">
                    <div class="form-group"><label class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10"><input type="text" name="username" id="username" class="form-control" readonly="">
                        <span id="userCheckMesssage" style="color: red;"></span>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Department</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="department">
                            <option id="department"></option>
                                <?php foreach($department as $value){?>
                                    <option value="<?php echo $value['name'];?>"><?php echo $value['name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Employee</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="employee_name">
                                <option id="employee_name"></option>
                                <?php foreach($employee as $value){?>
                                    <option value="<?php echo $value['name'];?>"><?php echo $value['name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Lab Unit</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="lab_unit" id="lab_unit"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Email ID</label>
                        <div class="col-sm-10"><input type="email" class="form-control" name="emailid" id="emailid"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Telephone</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="phone" id="phone"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Mobile</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="mobile" id="mobile"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Type</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="usertype">
                                <option id="usertype"></option>
                                <option value="Consultant">Consultant</option>
                                <option value="Reference">Reference</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="id" id="id">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- End of modal -->
                </div>
            </div>                    
        </div>
    </div>
</div>
<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
<!-- Mainly scripts -->
<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/dataTables/datatables.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="<?php echo base_url();?>assets/js/inspinia.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/pace/pace.min.js"></script>
<!-- Date picker -->
<script src="<?php echo base_url();?>assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/fullcalendar/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/clockpicker/clockpicker.js"></script>
<script>
    $(document).ready(function(){
        //Datatable
        $('.dataTables-example').DataTable({
            pageLength: 10,
            responsive: true,
             "aaSorting": [], //Stop initial sorting
        });
        //Datepicker
        $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
        });
        // Reset FORM to add new data
        $('#openForm').click(function(){
            $("#fromCreateUser")[0].reset();
        });
    });
    //Create User
    $(document).ready(function(){
        //CheckUsernameFrom database
        $('#userCheckMesssage').hide();
        $("#checkUserName").blur(function(){
            $('#checkUserName').focus(function(){
                $('#userCheckMesssage').hide();
            });
            var username = $('#checkUserName').val();
            $.ajax({
                url: "<?php echo base_url()?>index.php/Admin/checkUserName/"+username,
                type: 'post',
                dataType: "json",
                success: function(data){
                    if (data=="unavailable") {
                        $('#userCheckMesssage').html("Username not available");
                        $('#userCheckMesssage').show();
                    }
                },
                error: function(data){
                    console.log("error:");
                }
            });
        });
        $("#fromCreateUser").submit(function(){
            $('#createUserModal').modal('hide');
            var data = $("#fromCreateUser").serialize();
            $.ajax({
                url: "<?php echo base_url()?>index.php/Admin/saveUser",
                data: data,
                type: 'post',
                dataType: "json",
                success: function(data) {
                   var tr;
                   $.each(data,function(i,o){
                        tr = $('<tr/>');
                        tr.append("<td>" + o.username + "</td>");
                        tr.append("<td>" + o.password + "</td>");
                        tr.append("<td>" + o.department + "</td>");
                        tr.append("<td>" + o.employee_name + "</td>");
                        tr.append("<td>" + o.lab_unit + "</td>");
                        tr.append("<td>" + o.emailid + "</td>");
                        tr.append("<td>" + o.phone + "</td>");
                        tr.append("<td>" + o.mobile + "</td>");
                        tr.append("<td>" + o.usertype + "</td>");
                        tr.append("<td></td>");
                        tr.append(
'<td><button class="btn btn-warning" id="userEdit" data-toggle="modal" onclick="userEdit('+o.id+');" data-target="#editUserModal"><i class="fa fa-pencil"></i></span></button></td>'
                            );
                        tr.append(
'<td><button class="btn btn-danger" id="empDelete" onclick="deleteUser(o.id)"><i class="fa fa-trash"></i></span></button></td>'
                            );
                        $('table').prepend(tr);     
                   });
                },
               error:function(data){
                    console.log("err1");
                }     
            });
            return false;
        });
        // Update Employee
        $("#updateUserForm").submit(function(){
            $('#editUserModal').modal('hide');
            var data = $("#updateUserForm").serialize();
            $.ajax({
                url: "<?php echo base_url()?>index.php/Admin/updateUser",
                data: data,
                type: 'post',
                dataType: "json",
                success: function(data) {
                    location.reload();
                },
               error:function(data){
                    console.log("err1");
                }     
            });
            return false;
        });
    });//DocumentReadyEnd
    function deleteUser(id){
        if(confirm('Are you sure to delete this?')){
        $.ajax({
            url:"<?php echo base_url()?>index.php/Admin/deleteUser/"+id,
            type: 'post',
            dataType: 'json',
            success: function(data){
                location.reload();
            },
            error: function(data){
                console.log("error");
            }
        }); 
        }
    }
    function userEdit(id){
        $.ajax({
            url: "<?php echo base_url()?>index.php/Admin/userEdit/"+id,
            type: 'post',
            dataType: 'json',
            success:function(data){
                var id = data[0].id;
                var username = data[0].username;
                var department = data[0].department;
                var employee_name = data[0].employee_name;
                var lab_unit = data[0].lab_unit;
                var emailid = data[0].emailid;
                var phone = data[0].phone;
                var mobile = data[0].mobile;
                var usertype = data[0].usertype;
                //Set data to Modal
                $('#id').attr("value",id);
                $('#username').attr("value",username);
                $('#department').html(department);
                $('#employee_name').html(employee_name);
                $('#lab_unit').attr("value",lab_unit);
                $('#emailid').attr("value",emailid);
                $('#phone').attr("value",phone);
                $('#mobile').attr("value",mobile);
                $('#usertype').html(usertype);
            },
            error:function(data){
                console.log("Error");
            },
        });
        return false;
    }
</script>