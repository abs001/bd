<div class="row">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Supplier / Create Supplier</h5>
                        <div class="text-right">    
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createSupModal">
                                Add Supplier
                            </button>
                        </div>
                    </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="roleTable" >
                    <thead>
                    <tr>
                        <th>Supplier Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Telephone</th>
                        <th>Fax No</th>
                        <th>Email</th>
                        <th>Web</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
<?php 
    foreach ($supplierResult as $value) {
?>
    <tr class="gradeX">
        <td><?php echo $value['sup_name'];?></td>
        <td><?php echo $value['address'];?></td>
        <td><?php echo $value['city'];?></td>
        <td class="center"><?php echo $value['telephone'];?></td>
        <td class="center"><?php echo $value['fax_no'];?></td>
        <td><?php echo $value['email'];?></td>
        <td><?php echo $value['web'];?></td>
        <td>
<button class="btn btn-warning" id="supEdit" data-toggle="modal" onclick="supplierEdit(<?php echo $value['id']?>);" data-target="#editSupModal"><i class="fa fa-pencil"></i></span></button></td>
        <td><button class="btn btn-danger" id="supDelete" onclick="deleteSup(<?php echo $value['id']?>)"><i class="fa fa-trash"></i></span></button></td>
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
<div class="modal inmodal fade" id="createSupModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Supplier Details</h4>
            </div>
        <form  class="form-horizontal" id="fromCreateSup" method="post">
                <div class="modal-body">
                    <div class="form-group"><label class="col-sm-3 control-label">Supplier Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sup_name" placeholder="Enter Supplier Name" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" placeholder="Enter Address">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">City</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="city" placeholder="Enter City">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Telephone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="telephone" placeholder="Enter Telephone">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Fax No</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="fax_no" placeholder="Enter Fax Number">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Email Id</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" placeholder="Enter Email Id">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Web</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="web" placeholder="Enter Web Address">
                        </div>
                    </div>
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" id="supplier_button"   class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of modal -->
<!-- Modal : EditSupplier Update -->
<div class="modal inmodal fade" id="editSupModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Edit Supplier Details</h4>
            </div>
        <form  class="form-horizontal" id="form_supplier">
                <div class="modal-body">
                    <div class="form-group"><label class="col-sm-3 control-label">Supplier Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sup_name" id="sup_name" placeholder="Enter Supplier Name" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">City</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter City">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Telephone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="telephone" id="telephone"  placeholder="Enter Telephone">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Fax No</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="fax_no" id="fax_no" placeholder="Enter Fax Number">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Email Id</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email Id">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Web</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="web" id="web" placeholder="Enter Web Address">
                        </div>
                    </div>
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" id="supplier_button"   class="btn btn-primary">Update</button>
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
    //Create supplier
    $(document).ready(function(){
        $("#fromCreateSup").submit(function(){
            $('#createSupModal').modal('hide');
            var data = $("#fromCreateSup").serialize();

            $.ajax({
                url: "<?php echo base_url()?>index.php/Procurement/addSupplier",
                data: data,
                type: 'post',
                dataType: "json",
                success: function(data) {
                  console.log("Here: "+data);
                   var tr;
                   $.each(data,function(i,o){
                        tr = $('<tr/>');
                        tr.append("<td>" + o.sup_name + "</td>");
                        tr.append("<td>" + o.address + "</td>");
                        tr.append("<td>" + o.city + "</td>");
                        tr.append("<td>" + o.telephone + "</td>");
                        tr.append("<td>" + o.fax_no + "</td>");
                        tr.append("<td>" + o.email + "</td>");
                        tr.append("<td>" + o.web + "</td>");
                        tr.append(
'<td><button class="btn btn-warning" id="supEdit" data-toggle="modal" data-target="#editSupModal onclick="editSup('+o.id+')"><i class="fa fa-pencil"></i></span></button></td>'
                            );
                        tr.append(
'<td><button class="btn btn-warning" id="supDelete" onclick="deleteSup('+o.id+')"><i class="fa fa-trash"></i></span></button></td>'
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
        $("#formEditSup").submit(function(){
            $('#editSupModal').modal('hide');
            var data = $("#formEditSup").serialize();
            console.log("Here: "+data);
            $.ajax({
                url: "<?php echo base_url()?>index.php/Procurement/updateSupplier",
                data: data,
                type: 'post',
                dataType: "json",
                success: function(data) {
                    console.log("success: "+data);
                    location.reload();
                },
               error:function(data){
                    console.log("err1");
                }     
            });
            return false;
        });
    });//DocumentReadyEnd
    function deleteSup(id){
        console.log("Here: "+id);
        $.ajax({
            url:"<?php echo base_url()?>index.php/Procurement/deleteSupplier/"+id,
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
    function supplierEdit(id){
        console.log("Here: "+id);

        $.ajax({
            url: "<?php echo base_url()?>index.php/Procurement/editSupplier/"+id,
            type: 'post',
            dataType: 'json',
            success:function(data){
                console.log("data: "+data[0].email);
                var id = data[0].id;
                var sup_name = data[0].sup_name;
                var address = data[0].address;
                var city = data[0].city;
                var telephone = data[0].telephone;
                var fax_no = data[0].fax_no;
                var email = data[0].email;
                var web = data[0].web;
                //Set data to Modal
                $('#id').attr("value",id);
                $('#sup_name').attr("value",sup_name);
                $('#address').html("value",address);
                $('#city').attr("value",city);
                $('#telephone').attr("value",telephone);
                $('#fax_no').attr("value",fax_no);
                $('#email').html("value",email);
                $('#web').attr("value",web);
            },
            error:function(data){
                console.log("Error");
            },
        });
        return false;
    }
</script>