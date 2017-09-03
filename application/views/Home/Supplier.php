<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Suppiler</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Procurement</a>
                        </li>
                        <li>
                            <a>Master</a>
                        </li>
                        <li class="active">
                            <strong>Supplier</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>



<div class="ibox ">
                        <div class="ibox-title">
                            <h5>Add Supplier</h5>

                        </div>
                        <div class="ibox-content">
                            

                        

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#supplierModal">
                                <i class="fa fa-plus"></i>&nbsp;Add Supplier
                            </button>
                            <div class="modal inmodal" id="supplierModal" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                            <h4 class="modal-title">Supplier Details</h4>
                                            <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                        </div>
                                        <form  class="form-horizontal" id="form_supplier">
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

                        </div>
                        <div class="col-lg-2">

                </div>
                    </div>


<div class="wrapper wrapper-content animated fadeInRight">           
<div class="row">
 
 <div class="row">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Employee / All Roles</h5>
                        
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
                        <th></th>
                        
                    </tr>
                    </thead>
                    <tbody>
<?php 
    $i = 1;
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

                        <td class="center"><button class="btn btn-outline btn-success  dim" type="button" id="roleDelete" data-toggle="modal" data-target="#editSupplierModal<?php echo $i;?>"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-outline btn-danger  dim " type="button" id="roleDelete" onclick="deleteSupplier(<?php echo $value['id'];?>)"><i class="fa fa-times"></i></button></td>
                    </tr>
                                
                        
                            <div class="modal inmodal" id="editSupplierModal<?php echo $i;?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                            <h4 class="modal-title">Supplier Details</h4>
                                            <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                        </div>
                                        <form  class="form-horizontal" id="form_supplier">
                                        <div class="modal-body">
                                            
                                            
                                                
                                                    <div class="form-group"><label class="col-sm-3 control-label">Supplier Name</label>

                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="sup_name" placeholder="Enter Supplier Name" value="<?php echo $value['sup_name'];?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group"><label class="col-sm-3 control-label">Address</label>

                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="address" placeholder="Enter Address" value="<?php echo $value['address'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label class="col-sm-3 control-label">City</label>

                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="city" placeholder="Enter City" value="<?php echo $value['city'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label class="col-sm-3 control-label">Telephone</label>

                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="telephone" placeholder="Enter Telephone" value="<?php echo $value['telephone'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label class="col-sm-3 control-label">Fax No</label>

                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="fax_no" placeholder="Enter Fax Number" value="<?php echo $value['fax_no'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label class="col-sm-3 control-label">Email Id</label>

                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="email" placeholder="Enter Email Id" value="<?php echo $value['email'];?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group"><label class="col-sm-3 control-label">Web</label>

                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="web" placeholder="Enter Web Address" value="<?php echo $value['web'];?>">
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
               
<?php
$i++;
    }
?>                    
                 </tbody>
                    </table>
                    </div>
                    </div>
            </div>
        </div>
    </div>                    
    <!-- End of display role -->
    </div>
</div>
    
<!-- End of role -->
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
<script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                 "aaSorting": [], //Stop initial sorting
            });

        });
</script>    
<!-- FORM SUBMISSION -->
<script>
    $(document).ready(function(){
        $("#form_supplier").submit(function(){
            $('#supplierModal').modal('hide');
            var data = $("#form_supplier").serialize();
            console.log(data);
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
                            '<td class="center"><button class="btn btn-outline btn-success  dim" type="button" id="roleDelete" onclick="deleteRole('+o.id+')"><i class="fa fa-pencil"></i></button> <button class="btn btn-outline btn-danger  dim " type="button" id="roleDelete" onclick="deleteRole('+o.id+')"><i class="fa fa-times"></i></button></td>'
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
    });//DocumentReadyEnd
    //Delete role start
        function deleteSupplier(id)
        {
          if(confirm('Are you sure to delete this?'))
          {
              $.ajax({
                url : "<?php echo base_url()?>index.php/Procurement/deleteSupplier/"+id,
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
</script>