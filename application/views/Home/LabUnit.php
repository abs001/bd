<div class="row">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Lab Unit / Create lab</h5>
                        <div class="text-right">    
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#labModal">
                                Create Lab
                            </button>
                        </div>
                    </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="drugTable" >
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Contact Person</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
<?php 
    foreach ($labResult as $value) {
?>
    <tr class="gradeX">
       <td><?php echo $value['code'];?></td>
       <td><?php echo $value['name'];?></td>
       <td><?php echo $value['address'];?></td>
       <td><?php echo $value['city'];?></td>
       <td><?php echo $value['phone'];?></td>
       <td><?php echo $value['email'];?></td>
       <td></td>
        <td>
<button class="btn btn-warning" id="labEdit" data-toggle="modal" onclick="labEdit(<?php echo $value['id']?>);" data-target="#editLabModal"><i class="fa fa-pencil"></i></span></button></td>  
        <td><button class="btn btn-danger" id="drugDelete" onclick="deleteLab(<?php echo $value['id']?>)"><i class="fa fa-trash"></i></span></button></td>
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
<div class="modal inmodal fade" id="labModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Create Lab</h4>
            </div>
        <form  class="form-horizontal" id="form_lab" method="post">
                <div class="modal-body">
                    <div class="form-group"><label class="col-sm-3 control-label">Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="code"  placeholder="Enter Lab Code" >
                        </div>
                    </div>
               
               <div class="form-group"><label class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="Enter Lab Name" >
                        </div>
                    </div>

                
                    <div class="form-group"><label class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" placeholder="Enter Address" >
                        </div>
                    </div>
               
               
                    <div class="form-group"><label class="col-sm-3 control-label">City</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="city" placeholder="Enter city" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">State</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="state" placeholder="Enter state" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Country</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="country" placeholder="Enter Country" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Pin/Zip Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="pincode" placeholder="Enter Pincode" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" placeholder="Enter Email" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Web Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="web" placeholder="Enter Web Address" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Phone No.</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" >
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

<!-- Modal : editdLab -->
<div class="modal inmodal fade" id="editLabModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Edit Lab</h4>
            </div>
        <form  class="form-horizontal" id="form_edit_lab" method="post">
                <div class="modal-body">
                    <div class="form-group"><label class="col-sm-3 control-label">Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="code" id="code"  placeholder="Enter Lab Code" >
                        </div>
                    </div>
               
                    <div class="form-group"><label class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name1" placeholder="Enter Lab Name" >
                        </div>
                    </div>

                
                    <div class="form-group"><label class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" >
                        </div>
                    </div>
               
               
                    <div class="form-group"><label class="col-sm-3 control-label">City</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter city" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">State</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="state" id="state" placeholder="Enter state" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Country</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="country" id="country" placeholder="Enter Country" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Pin/Zip Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Pincode" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Web Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="web" id="web" placeholder="Enter Web Address" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Phone No.</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number" >
                        </div>
                    </div>
                    <input type="hidden" name="id" id="id">
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
    //Create lab
$(document).ready(function(){
        $("#form_lab").submit(function(){
            $('#labModal').modal('hide');
            var data = $("#form_lab").serialize();
            console.log(data);
            $.ajax({
                url: "<?php echo base_url()?>index.php/DiagnosticCenter/createLab",
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
                       tr.append("<td>" + o.city + "</td>");
                       tr.append("<td>" + o.phone + "</td>");
                       tr.append("<td>" + o.email + "</td>");
                       tr.append("<td>" + ""+ "</td>");
                        tr.append(
                            '<td><button class="btn btn-warning" id="labEdit" data-toggle="modal" onclick="labEdit('+o.id+');" data-target="#editLabModal"><i class="fa fa-pencil"></i></span></button></td><td><button class="btn btn-danger" id="labDelete" onclick="deleteLab('+o.id+')"><i class="fa fa-trash"></i></span></button></td>'
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
        $("#form_edit_lab").submit(function(){
            $('#editLabModal').modal('hide');
            var data = $("#form_edit_lab").serialize();
            $.ajax({
                url: "<?php echo base_url()?>index.php/DiagnosticCenter/updateLab",
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
        
    function deleteLab(id)
        {
            console.log(id);
          if(confirm('Are you sure to delete this?'))
          {
              $.ajax({
                url : "<?php echo base_url()?>index.php/DiagnosticCenter/deleteLab/"+id,
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

    function labEdit(id){
        console.log("Here: "+id);

        $.ajax({
            url: "<?php echo base_url()?>index.php/DiagnosticCenter/editLab/"+id,
            type: 'post',
            dataType: 'json',
            success:function(data){
                
                $('#id').attr("value",data[0].id);
                $('#code').attr("value",data[0].code);
                $('#name1').attr("value",data[0].name);
                $('#city').attr("value",data[0].city);
                $('#address').attr("value",data[0].address);
                $('#state').attr("value",data[0].state);
                $('#country').attr("value",data[0].country);
                $('#pincode').attr("value",data[0].pincode);
                $('#email').attr("value",data[0].email);
                $('#web').attr("value",data[0].web);
                $('#phone').attr("value",data[0].phone);
                
                
            },
            error:function(data){
                console.log("Error");
            },
        });
        return false;
    }    
   
</script>