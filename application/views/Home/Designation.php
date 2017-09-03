<div class="row">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Employee / All Designations</h5>
                        <div class="text-right">    
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#roleModal">
                                Add Designations
                            </button>
                        </div>
                    </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="roleTable" >
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
<?php 
    foreach ($Designation_result as $value) {
?>
    <tr class="gradeX">
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['description'];?></td>
        <td><button class="btn btn-danger" id="roleDelete" onclick="deleteRole(<?php echo $value['id'];?>)"><i class="fa fa-trash"></i></span></button></td>
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
    <!-- Modal for add role -->
    <div class="modal inmodal fade" id="roleModal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Add Designation</h4>
                </div>
                <div class="modal-body">
                   <form role="form" class="form-inline" id="form_role">
                       <div class="form-group">
                        <label>Designation name</label>
                    <input type="text" name="name" placeholder="Enter Designation" id="exampleInputEmail2"
                               class="form-control">
                    </div>
                       <div class="form-group"><label>Description</label> 
                    <input type="text" name="description" placeholder="Enter description" id="exampleInputEmail2"
                               class="form-control">    
                       </div>
                     <button type="submit" id="role_button" class="btn btn-primary">Save</button> 
                   </form>  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<!-- End of role -->
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
        $("#form_role").submit(function(){
            $('#roleModal').modal('hide');
            var data = $("#form_role").serialize();
            $.ajax({
                url: "<?php echo base_url()?>index.php/Admin/addDesignation",
                data: data,
                type: 'post',
                dataType: "json",
                success: function(data) {
                  console.log("Here: "+data);
                    var tr;
                   $.each(data,function(i,o){
                        tr = $('<tr/>');
                        tr.append("<td>" + o.name + "</td>");
                        tr.append("<td>" + o.description + "</td>");
                        tr.append(
'<td><button class="btn btn-danger" onclick="deleteRole('+o.id+')"><i class="fa fa-trash"></i></span></button></td>'
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
    });//DocumentReadyEnd
    //Delete role start
        function deleteRole(id)
        {
          if(confirm('Are you sure to delete this?'))
          {
              $.ajax({
                url : "<?php echo base_url()?>index.php/Admin/deleteDesignation/"+id,
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