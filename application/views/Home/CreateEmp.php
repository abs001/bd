<div class="row">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Employee / Create Employee</h5>
                        <div class="text-center">    
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createEmpModal">
                                Add Employee
                            </button>
                        </div>
                    </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="roleTable" >
                    <thead>
                    <tr>
                        <th>Department</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Telephone</th>
                        <th>Birthdate</th>
                        <th>Designation</th>
                        <th>Qualification</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
<?php 
    foreach ($employeeResult as $value) {
?>
    <tr class="gradeX">
        <td><?php echo $value['department']?></td>
        <td><?php echo $value['name']?></td>
        <td><?php echo $value['address']?></td>
        <td><?php echo $value['email']?></td>
        <td><?php echo $value['mobile']?></td>
        <td><?php echo $value['telephone']?></td>
        <td><?php echo $value['birthdate']?></td>
        <td><?php echo $value['designation']?></td>
        <td><?php echo $value['qualification']?></td>
        <td>
<button class="btn btn-warning" id="empEdit" data-toggle="modal" onclick="employeeEdit(<?php echo $value['id']?>);" data-target="#editEmpModal"><i class="fa fa-pencil"></i></span></button></td>
        <td><button class="btn btn-danger" id="empDelete" onclick="deleteEmp(<?php echo $value['id']?>)"><i class="fa fa-trash"></i></span></button></td>
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
<div class="modal inmodal fade" id="createEmpModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Create employee</h4>
            </div>
        <form class="form-horizontal" id="fromCreateEmp" method="post">
            <div class="modal-body">
                    <div class="form-group"><label class="col-sm-2 control-label">Department</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="department">
                                <?php foreach($department as $value){?>
                                    <option value="<?php echo $value['name'];?>"><?php echo $value['name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10"><input type="text" name="name" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10"><textarea class="form-control" name="address"></textarea></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10"><input type="email" class="form-control" name="email"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Mobile no</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="mobile"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Telephone</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="telephone"></div>
                    </div>
                    <div class="form-group" id="data_3">
                        <label class="col-sm-2 control-label">Birthdate</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" value="10/11/2013" name="birthdate">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Designation</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="designationAdd" name="designation">
                                <option>select</option>
                                <?php foreach($designation as $value){?>
                                    <option value="<?php echo $value['name'];?>"><?php echo $value['name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Qualification</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="qualification"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Type</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="type">
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
<!-- Modal : EditEmploye Update -->
<div class="modal inmodal fade" id="editEmpModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Edit employee</h4>
            </div>
        <form class="form-horizontal" id="formEditEmp">
            <div class="modal-body">
                    <div class="form-group"><label class="col-sm-2 control-label">Department</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="department">
                                <option id="department">select</option>
                                <option value="Dignostic center">Dignostic center</option>
                                <option value="Procurement">Procurement</option>
                                <option value="Radiology">Radiology</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10"><input type="text" name="name" id="name" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="address" id="address"></textarea>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10"><input type="email" class="form-control" name="email" id="email"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Mobile no</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="mobile" id="mobile"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Telephone</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="telephone" id="telephone"></div>
                    </div>
                    <div class="form-group" id="data_3">
                        <label class="col-sm-2 control-label">Birthdate</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" value="10/11/2013" name="birthdate" id="birthdate">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Designation</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="designationAdd" name="designation">
                                <option id="designation">select</option>
                                <?php foreach($designation as $value){?>
                                    <option  id="designation" value="<?php echo $value['name'];?>"><?php echo $value['name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Qualification</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="qualification" id="qualification"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Type</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="type">
                                <option id="type">Select</option>
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
    });
    //Create employee
    $(document).ready(function(){
        $("#fromCreateEmp").submit(function(){
            $('#createEmpModal').modal('hide');
            var data = $("#fromCreateEmp").serialize();
            $.ajax({
                url: "<?php echo base_url()?>index.php/Admin/saveEmployee",
                data: data,
                type: 'post',
                dataType: "json",
                success: function(data) {
                  console.log("Here: "+data);
                   var tr;
                   $.each(data,function(i,o){
                        tr = $('<tr/>');
                        tr.append("<td>" + o.department + "</td>");
                        tr.append("<td>" + o.name + "</td>");
                        tr.append("<td>" + o.address + "</td>");
                        tr.append("<td>" + o.email + "</td>");
                        tr.append("<td>" + o.mobile + "</td>");
                        tr.append("<td>" + o.telephone + "</td>");
                        tr.append("<td>" + o.birthdate + "</td>");
                        tr.append("<td>" + o.designation + "</td>");
                        tr.append("<td>" + o.qualification + "</td>");
                        tr.append(
'<td><button class="btn btn-warning" id="empEdit" data-toggle="modal" data-target="#editEmpModal onclick="editEmp()()"><i class="fa fa-pencil"></i></span></button></td>'
                            );
                        tr.append(
'<td><button class="btn btn-warning" id="empDelete" onclick="deleteEmp()()"><i class="fa fa-trash"></i></span></button></td>'
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
        $("#formEditEmp").submit(function(){
            $('#editEmpModal').modal('hide');
            var data = $("#formEditEmp").serialize();
            $.ajax({
                url: "<?php echo base_url()?>index.php/Admin/updateEmployee",
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
    function deleteEmp(id){
        $.ajax({
            url:"<?php echo base_url()?>index.php/Admin/deleteEmployee/"+id,
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
    function employeeEdit(id){
        $.ajax({
            url: "<?php echo base_url()?>index.php/Admin/editEmployee/"+id,
            type: 'post',
            dataType: 'json',
            success:function(data){
                var id = data[0].id;
                var department = data[0].department;
                var name = data[0].name;
                var address = data[0].address;
                var email = data[0].email;
                var mobile = data[0].mobile;
                var telephone = data[0].telephone;
                var birthdate = data[0].birthdate;
                var designation = data[0].designation;
                var qualification = data[0].qualification;
                var type = data[0].type;
                //Set data to Modal
                $('#id').attr("value",id);
                $('#department').html(department);
                $('#name').attr("value",name);
                $('#address').html(address);
                $('#email').attr("value",email);
                $('#mobile').attr("value",mobile);
                $('#telephone').attr("value",telephone);
                $('#birthdate').attr("value",birthdate);
                $('#designation').html(designation);
                $('#qualification').attr("value",qualification);
                $('#type').html(type);
            },
            error:function(data){
                console.log("Error");
            },
        });
        return false;
    }
</script>