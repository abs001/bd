<div class="row">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Collection Center / Create Collection Center</h5>
                        <div class="text-right">    
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centerModal">
                                Create
                            </button>
                        </div>
                    </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="centerTable" >
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Area Of Operation</th>
                        <th>City</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Contact Person</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
<?php 
    foreach ($collectionResult as $value) {
?>
    <tr class="gradeX">
       <td><?php echo $value['code'];?></td>
       <td><?php echo $value['name'];?></td>
       <td><?php echo $value['address'];?></td>
       <td></td>
       <td><?php echo $value['city'];?></td>
       <td><?php echo $value['mobile'];?></td>
       <td><?php echo $value['email'];?></td>
       <td></td>
       <td><?php echo $value['login'];?></td>
       <td><?php echo $value['password'];?></td>
        <td>
<button class="btn btn-warning" id="centerEdit" data-toggle="modal" onclick="centerEdit(<?php echo $value['id']?>);" data-target="#editCenterModal"><i class="fa fa-pencil"></i></span></button></td>  
        <td><button class="btn btn-danger" id="centerDelete" onclick="deleteCenter(<?php echo $value['id']?>)"><i class="fa fa-trash"></i></span></button></td>
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
<div class="modal inmodal fade" id="centerModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Create Collection Center</h4>
            </div>
        <form  class="form-horizontal" id="form_center" method="post">
                <div class="modal-body">
                    <div class="form-group"><label class="col-sm-3 control-label">Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="code"  placeholder="Enter Center Code" >
                        </div>
                    </div>
               
               <div class="form-group"><label class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="Enter Center Name" >
                        </div>
                    </div>

                
                    <div class="form-group"><label class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" placeholder="Enter Center Address" >
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">State</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="state" placeholder="Enter state" >
                        </div>
                    </div>
               
                    <div class="form-group"><label class="col-sm-3 control-label">City</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="city" placeholder="Enter city" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Pin Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="pincode" placeholder="Enter Pincode" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" placeholder="Enter Email" >
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Phone No.</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" >
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Mobile No.</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Number" >
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Doctor Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="doctor" placeholder="Enter Doctor Name" >
                        </div>
                    </div>
                     <div class="form-group"><label class="col-sm-3 control-label">Lab Unit</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="lab">
                                <option>Select Lab Unit</option>
                                <?php foreach($lab as $value){?>
                                    <option value="<?php echo $value['name'];?>"><?php echo $value['name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>
                     <div class="form-group"><label class="col-sm-3 control-label">Rate Type</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="rate">
                                <option>Select Rate Type</option>
                                <?php foreach($rate as $value){?>
                                    <option value="<?php echo $value['rate_name'];?>"><?php echo $value['rate_name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Deposit Amount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="deposit_amount" placeholder="Enter Deposit Amount" >
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Deposit(%)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="deposit" placeholder="Enter Deposit" >
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Login Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="login" placeholder="Enter Login Name" >
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="password" placeholder="Enter password" >
                        </div>
                    </div>
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" id="cat_button"   class="btn btn-primary">Create</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of modal -->

<!-- Modal : editdrug -->
<div class="modal inmodal fade" id="editCenterModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Edit Collection Center</h4>
            </div>
        <form  class="form-horizontal" id="form_edit_center" method="post">
                <div class="modal-body">
                    <div class="form-group"><label class="col-sm-3 control-label">Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="code" id="code"  placeholder="Enter Center Code" >
                        </div>
                    </div>
               
               <div class="form-group"><label class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Center Name" >
                        </div>
                    </div>

                
                    <div class="form-group"><label class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter Center Address" >
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">State</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="state" id="state" placeholder="Enter state" >
                        </div>
                    </div>
               
                    <div class="form-group"><label class="col-sm-3 control-label">City</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter city" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Pin Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Pincode" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" >
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Phone No.</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number" >
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Mobile No.</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number" >
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Doctor Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="doctor" id="doctor" placeholder="Enter Doctor Name" >
                        </div>
                    </div>
                     <div class="form-group"><label class="col-sm-3 control-label">Lab Unit</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="lab" >
                                <option id="lab1"></option>
                                <?php foreach($lab as $value){?>
                                    <option value="<?php echo $value['name'];?>"><?php echo $value['name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>
                     <div class="form-group"><label class="col-sm-3 control-label">Rate Type</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="rate">
                                <option id="rate"></option>
                                <?php foreach($rate as $value){?>
                                    <option value="<?php echo $value['rate_name'];?>"><?php echo $value['rate_name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Deposit Amount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="deposit_amount" id="deposit_amount" placeholder="Enter Deposit Amount" >
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Deposit(%)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="deposit" id="deposit" placeholder="Enter Deposit" >
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Login Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="login" id="login" placeholder="Enter Login Name" >
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="password" id="password" placeholder="Enter password" >
                        </div>
                    </div>
                    <input type="hidden" name="id" id="id">
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" id="cat_button"   class="btn btn-primary">Update</button>
                </div>
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
    //Create center
$(document).ready(function(){
        $("#form_center").submit(function(){
            $('#centerModal').modal('hide');
            var data = $("#form_center").serialize();
            console.log(data);
            $.ajax({
                url: "<?php echo base_url()?>index.php/DiagnosticCenter/createCenter",
                data: data,
                type: 'post',
                dataType: "json",
                success: function(data) {
                  console.log("Here: "+JSON.stringify(data));
                    var tr;
                   $.each(data,function(i,o){
                        tr = $('<tr/>');
                        tr.append("<td>" + o.code + "</td>");
                       tr.append("<td>" + o.name + "</td>");
                       tr.append("<td>" + o.address + "</td>");
                       tr.append("<td>" + "" + "</td>");
                       tr.append("<td>" + o.city + "</td>");
                       tr.append("<td>" + o.mobile + "</td>");
                       tr.append("<td>" + o.email + "</td>");
                       tr.append("<td>" + ""+ "</td>");
                       tr.append("<td>" + o.login + "</td>");
                       tr.append("<td>" + o.password + "</td>");
                        tr.append(
                            '<td><button class="btn btn-warning" id="labEdit" data-toggle="modal" onclick="centerEdit('+o.id+');" data-target="#editCenterModal"><i class="fa fa-pencil"></i></span></button></td><td><button class="btn btn-danger" id="labDelete" onclick="deleteCenter('+o.id+')"><i class="fa fa-trash"></i></span></button></td>'
                            );
                        $('table').prepend(tr);     
                  });
                },
               error:function(data){
                    console.log(data);
                }     
            });
            return false;
        });

        //update
        $("#form_edit_center").submit(function(){
            $('#editCenterModal').modal('hide');
            var data = $("#form_edit_center").serialize();
            $.ajax({
                url: "<?php echo base_url()?>index.php/DiagnosticCenter/updateCenter",
                data: data,
                type: 'post',
                dataType: "json",
                success: function(data) {
                    location.reload();
                },
               error:function(data){
                    console.log("err1:"+JSON.stringify(data));
                }     
            });
            return false;
        });


    });

    function deleteCenter(id)
        {
            console.log(id);
          if(confirm('Are you sure to delete this?'))
          {
              $.ajax({
                url : "<?php echo base_url()?>index.php/DiagnosticCenter/deleteCenter/"+id,
                type: "POST",
                success: function(data) {
                  if(data=='success'){
                    console.log("success: ");
                    location.reload();
                    //Add sript to delete without refresh
                  }
                  else if(data=='failed'){
                    console.log("failed: ");
                  }
                },
               error:function(data){
                    console.log("error:");
                }     
            });
            return false;
          }
        }

    function centerEdit(id){
        console.log("Here: "+id);

        $.ajax({
            url: "<?php echo base_url()?>index.php/DiagnosticCenter/editCenter/"+id,
            type: 'post',
            dataType: 'json',
            success:function(data){
                console.log("Here: "+JSON.stringify(data));
                $('#id').attr("value",data[0].id);
                $('#code').attr("value",data[0].code);
                $('#name').attr("value",data[0].name);
                $('#city').attr("value",data[0].city);
                $('#address').attr("value",data[0].address);
                $('#state').attr("value",data[0].state);
                $('#country').attr("value",data[0].country);
                $('#pincode').attr("value",data[0].pincode);
                $('#email').attr("value",data[0].email);
                $('#mobile').attr("value",data[0].mobile);
                $('#phone').attr("value",data[0].phone);
                $('#doctor').attr("value",data[0].doctor_name);
                $('#deposit_amount').attr("value",data[0].deposit_amount);
                $('#deposit').attr("value",data[0].deposit);
                $('#login').attr("value",data[0].login);
                $('#password').attr("value",data[0].password);
                $('#lab1').html("value",data[0].lab_unit);
                $('#rate').html("value",data[0].rate_type);
                
                
            },
            error:function(data){
             console.log("error: "+JSON.stringify(data));
            },
        });
        return false;
    }



    
   
</script>