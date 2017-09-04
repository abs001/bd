<div class="row">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Rate Type / Create Rate Type</h5>
                        <div class="text-right">    
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rateModal">
                                Create Rate
                            </button>
                        </div>
                    </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="rateTable" >
                    <thead>
                    <tr>
                        <th>Rate Code</th>
                        <th>Rate Type Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
<?php 
    foreach ($rateResult as $value) {
?>
    <tr class="gradeX">
       <td><?php echo $value['rate_code'];?></td>
       <td><?php echo $value['rate_name'];?></td>
       
        <td>
<button class="btn btn-warning" id="rateEdit" data-toggle="modal" onclick="rateEdit(<?php echo $value['id']?>);" data-target="#editRateModal"><i class="fa fa-pencil"></i></span></button></td>  
        <td><button class="btn btn-danger" id="rateDelete" onclick="deleteRate(<?php echo $value['id']?>)"><i class="fa fa-trash"></i></span></button></td>
    </tr>
<?php
    }
?>
                    </tbody>
                    </table>
                        </div>
                        </div>
                    </div>
<!-- Modal : creatrate -->
<div class="modal inmodal fade" id="rateModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Create Rate Type</h4>
            </div>
        <form  class="form-horizontal" id="form_rate" method="post">
                <div class="modal-body">
                    
               
               		<div class="form-group"><label class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="Enter Rate Type Name" >
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

<!-- Modal : editRate -->
<div class="modal inmodal fade" id="editRateModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Edit Rate Type</h4>
            </div>
        <form  class="form-horizontal" id="form_edit_rate" method="post">
                <div class="modal-body">
                    
               
                    <div class="form-group"><label class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name1" placeholder="Enter Rate Type Name" >
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
    //Create Rate Type
$(document).ready(function(){
        $("#form_rate").submit(function(){
            $('#rateModal').modal('hide');
            var data = $("#form_rate").serialize();
            console.log(data);
            $.ajax({
                url: "<?php echo base_url()?>index.php/DiagnosticCenter/createRate",
                data: data,
                type: 'post',
                dataType: "json",
                success: function(data) {
                  console.log("Here: "+JSON.stringify(data));
                    var tr;
                   $.each(data,function(i,o){
                        tr = $('<tr/>');
                        tr.append("<td>" + "" + "</td>");
                       tr.append("<td>" + o.rate_name + "</td>");
                        tr.append(
                            '<td><button class="btn btn-warning" id="rateEdit" data-toggle="modal" onclick="rateEdit('+o.id+');" data-target="#editRateModal"><i class="fa fa-pencil"></i></span></button></td><td><button class="btn btn-danger" id="rateDelete" onclick="deleteRate('+o.id+')"><i class="fa fa-trash"></i></span></button></td>'
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
        $("#form_edit_rate").submit(function(){
            $('#editRateModal').modal('hide');
            var data = $("#form_edit_rate").serialize();
            $.ajax({
                url: "<?php echo base_url()?>index.php/DiagnosticCenter/updateRate",
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

    

    function deleteRate(id)
        {
            console.log(id);
          if(confirm('Are you sure to delete this?'))
          {
              $.ajax({
                url : "<?php echo base_url()?>index.php/DiagnosticCenter/deleteRate/"+id,
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

    function rateEdit(id){
        console.log("Here: "+id);

        $.ajax({
            url: "<?php echo base_url()?>index.php/DiagnosticCenter/editRate/"+id,
            type: 'post',
            dataType: 'json',
            success:function(data){
                
                $('#id').attr("value",data[0].id);
                $('#name1').attr("value",data[0].rate_name);
                            
                
            },
            error:function(data){
                console.log("Error");
            },
        });
        return false;
    }    
   
</script>