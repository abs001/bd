
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
                            <strong>Manufacture Company</strong>
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
                            

                        

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#companModal">
                                <i class="fa fa-plus"></i>&nbsp;Add Supplier
                            </button>
                            <div class="modal inmodal" id="companModal" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                            <h4 class="modal-title">Manufacture Company</h4>
                                            <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                        </div>
                                        <form  class="form-horizontal" id="form_manufactur">
                                        <div class="modal-body">
                                            
                                            
                                                
                                                    <div class="form-group"><label class="col-sm-3 control-label">Company name</label>

                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="name" placeholder="Enter Manufacture Company Name" >
                                                        </div>
                                                   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="submit" id="manufacur_button"   class="btn btn-primary">Save changes</button>
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
                        <th>Company</th>
            
                        <th></th>
                        
                    </tr>
                    </thead>
                    <tbody>
<?php 
    
    foreach ($manufacturResult as $value) {
?>
                    <tr class="gradeX">
                        <td><?php echo $value['manu_company'];?></td>
                    

                        <td class="center">
                        <button class="btn btn-outline btn-danger  dim " type="button" id="roleDelete" onclick="deleteManufactur(<?php echo $value['id'];?>)"><i class="fa fa-times"></i></button></td>
                    </tr>
                                
                                       
<?php
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
        $("#form_manufactur").submit(function(){
            $('#companModal').modal('hide');
            var data = $("#form_manufactur").serialize();
            console.log(data);
            $.ajax({
                url: "<?php echo base_url()?>index.php/Procurement/addManufactur",
                data: data,
                type: 'post',
                dataType: "json",
                success: function(data) {
                  console.log("Here: "+data);
                    var tr;
                   $.each(data,function(i,o){
                        tr = $('<tr/>');
                        tr.append("<td>" + o.manu_company + "</td>");
                       
                        tr.append(
                            '<button class="btn btn-outline btn-danger  dim " type="button" id="roleDelete" onclick="deleteRole('+o.id+')"><i class="fa fa-times"></i></button></td>'
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
        function deleteManufactur(id)
        {
          if(confirm('Are you sure to delete this?'))
          {
              $.ajax({
                url : "<?php echo base_url()?>index.php/Procurement/deleteManufactur/"+id,
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