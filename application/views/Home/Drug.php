<div class="row">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Drug / Create Drug</h5>
                        <div class="text-right">    
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#drugModal">
                                Add Drug
                            </button>
                        </div>
                    </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="drugTable" >
                    <thead>
                    <tr>
                        <th>Drug Name</th>
                        <th>Category</th>
                        <th>Unit/Pack</th>
                        <th>Reorder Level</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
<?php 
    foreach ($drugResult as $value) {
?>
    <tr class="gradeX">
       <td><?php echo $value['drug_name'];?></td>
       <td><?php echo $value['category'];?></td>
       <td><?php echo $value['unit_pack'];?></td>
       <td><?php echo $value['reorder_level'];?></td>
        <td>
<button class="btn btn-warning" id="drugEdit" data-toggle="modal" onclick="drugEdit(<?php echo $value['id']?>);" data-target="#editDrugModal"><i class="fa fa-pencil"></i></span></button></td>  
        <td><button class="btn btn-danger" id="drugDelete" onclick="deleteDrug(<?php echo $value['id']?>)"><i class="fa fa-trash"></i></span></button></td>
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
<div class="modal inmodal fade" id="drugModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Drug</h4>
            </div>
        <form  class="form-horizontal" id="form_drug" method="post">
                <div class="modal-body">
                    <div class="form-group"><label class="col-sm-3 control-label">Drug Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="Enter Category Name" >
                        </div>
                    </div>
               
               <div class="form-group"><label class="col-sm-3 control-label">Category</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category">
                                <option>Select Category</option>
                                <?php foreach($cat as $value){?>
                                    <option value="<?php echo $value['cat_name'];?>"><?php echo $value['cat_name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>

                
                    <div class="form-group"><label class="col-sm-3 control-label">Units/Pack</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="units" placeholder="Enter Units" >
                        </div>
                    </div>
               
               
                    <div class="form-group"><label class="col-sm-3 control-label">Reorder Level</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="reorder_level" placeholder="Enter Reorder Level" >
                        </div>
                    </div>
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" id="cat_button"   class="btn btn-primary">Save</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of modal -->

<!-- Modal : editdrug -->
<div class="modal inmodal fade" id="editDrugModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Drug</h4>
            </div>
        <form  class="form-horizontal" id="form_edit_drug" method="post">
                <div class="modal-body">
                    <div class="form-group"><label class="col-sm-3 control-label">Drug Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name" >
                        </div>
                    </div>
               
               <div class="form-group"><label class="col-sm-3 control-label">Category</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category" >
                                <option id="category1"></option>
                                <?php foreach($cat as $value){?>
                                    <option value="<?php echo $value['cat_name'];?>"><?php echo $value['cat_name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>

                
                    <div class="form-group"><label class="col-sm-3 control-label">Units/Pack</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="units" id="units" placeholder="Enter Units" >
                        </div>
                    </div>
               
               
                    <div class="form-group"><label class="col-sm-3 control-label">Reorder Level</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="reorder_level" id="reorder_level" placeholder="Enter Reorder Level" >
                        </div>
                    </div>
               <input type="hidden" name="id" id="id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" id="cat_button"   class="btn btn-primary">Save</button>
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
    //Create supplier
$(document).ready(function(){
        $("#form_drug").submit(function(){
            $('#drugModal').modal('hide');
            var data = $("#form_drug").serialize();
            console.log(data);
            $.ajax({
                url: "<?php echo base_url()?>index.php/Procurement/addDrug",
                data: data,
                type: 'post',
                dataType: "json",
                success: function(data) {
                  console.log("Here: "+data);
                    var tr;
                   $.each(data,function(i,o){
                        tr = $('<tr/>');
                        tr.append("<td>" + o.drug_name + "</td>");
                       tr.append("<td>" + o.category + "</td>");
                       tr.append("<td>" + o.unit_pack + "</td>");
                       tr.append("<td>" + o.reorder_level + "</td>");
                        tr.append(
                            '<td><button class="btn btn-warning" id="drugEdit" data-toggle="modal" onclick="drugEdit('+o.id+');" data-target="#editDrugModal"><i class="fa fa-pencil"></i></span></button></td><td><button class="btn btn-danger" id="supDelete" onclick="deleteDrug('+o.id+')"><i class="fa fa-trash"></i></span></button></td>'
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

        $("#form_edit_drug").submit(function(){
            $('#editDrugModal').modal('hide');
            var data = $("#form_edit_drug").serialize();
            $.ajax({
                url: "<?php echo base_url()?>index.php/Procurement/updateDrug",
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
        
    function deleteDrug(id)
        {
            console.log(id);
          if(confirm('Are you sure to delete this?'))
          {
              $.ajax({
                url : "<?php echo base_url()?>index.php/Procurement/deleteDrug/"+id,
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

    function drugEdit(id){
        console.log("Here: "+id);

        $.ajax({
            url: "<?php echo base_url()?>index.php/Procurement/editDrug/"+id,
            type: 'post',
            dataType: 'json',
            success:function(data){
                
            
                $('#id').attr("value",data[0].id);
                $('#name').attr("value",data[0].drug_name);
                $('#category1').html("value",data[0].category);
                $('#units').attr("value",data[0].unit_pack);
                $('#reorder_level').attr("value",data[0].reorder_level);
                
                
            },
            error:function(data){
                console.log("Error");
            },
        });
        return false;
    }    
   
</script>