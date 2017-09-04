<div class="row">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Item / Create Item Entry</h5>
                        <div class="text-right">    
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#itemModal">
                                Add Item
                            </button>
                        </div>
                    </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="roleTable" >
                    <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Mfg co. Name</th>
                        <th>Category</th>
                        <th>Supplier</th>
                        <th>Cureent Stock</th>
                        <th>Mfg Date</th>
                         <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
<?php 
    foreach ($itemResult as $value) {
?>
    <tr class="gradeX">
       <td><?php echo $value['item_name'];?></td>
       <td><?php echo $value['manu_company'];?></td>
       <td><?php echo $value['category'];?></td>
       <td><?php echo $value['supplier'];?></td>
       <td><?php echo $value['current_stock'];?></td>
       <td><?php echo $value['mfg_date'];?></td>
        <td>
<button class="btn btn-warning" id="itemEdit" data-toggle="modal" onclick="itemEdit(<?php echo $value['id']?>);" data-target="#editItemModal"><i class="fa fa-pencil"></i></span></button></td>
        <td><button class="btn btn-danger" id="itemDelete" onclick="deleteItem(<?php echo $value['id']?>)"><i class="fa fa-trash"></i></span></button></td>
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
<div class="modal inmodal fade" id="itemModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Item Entry</h4>
            </div>
        <form  class="form-horizontal" id="form_item" method="post">
                <div class="modal-body">
                    <div class="form-group"><label class="col-sm-3 control-label">Item Name*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="Enter Item Name" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Mfg Co. Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="mfgco">
                                <option>Select Company</option>
                                <?php foreach($mfgco as $value){?>
                                    <option value="<?php echo $value['manu_company'];?>"><?php echo $value['manu_company'];?></option>
                                 <?php }?>   
                            </select>
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


                    <div class="form-group"><label class="col-sm-3 control-label">Supplier</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="supplier">
                                <option>Select Supplier</option>
                                <?php foreach($supplier as $value){?>
                                    <option value="<?php echo $value['sup_name'];?>"><?php echo $value['sup_name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Current Stock</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="stock" placeholder="Enter Current Stoc" >
                        </div>
                    </div>

                    <div class="form-group" id="data_3"><label class="col-sm-3 control-label">MFg Date</label>
                        <div class="col-sm-9">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" value="10/11/2013" name="mfg_date">
                        </div>
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Recorder Level</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="recorder_level" placeholder="Enter Recorder Level" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Unit/Pack</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="unit" placeholder="Enter Unit Per Level" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Cost Price/Unit</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="cost_price" placeholder="Enter Cost Price Per Unit" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Expiry Status*</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="expiry_status">
                                <option>Select Status</option>
                                <option>Start</option>
                                <option>End</option>   
                            </select>
                        </div>
                    </div>

                    <div class="form-group" id="data_3"><label class="col-sm-3 control-label">Purchase Date</label>
                        <div class="col-sm-9">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" value="10/11/2013" name="purchase_date" id="purchase_date">
                        </div>
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Batch No</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="batch_no" placeholder="Enter Batch No" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">IDA Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="ida_code" placeholder="Enter IDA Code" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Barcode</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="barcode" placeholder="Enter Barcode" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Case Pack Rate</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="case_rate" placeholder="Enter Case Pack Rate" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Selling Price/Unit</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sell_price" placeholder="Enter Selling Price Per Unit" >
                        </div>
                    </div>

               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" id="supplier_button"   class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of modal -->
<!-- Modal : EditSupplier Update -->
<div class="modal inmodal fade" id="editItemModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Edit Supplier Details</h4>
            </div>
        <form  class="form-horizontal" id="form_edit_item" method="post">
                <div class="modal-body">
                    <div class="form-group"><label class="col-sm-3 control-label">Item Name*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Item Name" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Mfg Co. Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="mfgco" >
                                <option id="mfgco1"></option>
                                <?php foreach($mfgco as $value){?>
                                    <option value="<?php echo $value['manu_company'];?>"><?php echo $value['manu_company'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Category*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="category" id="category" placeholder="Enter Category" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Supplier</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="supplier">
                                <option id="supplier"></option>
                                <?php foreach($supplier as $value){?>
                                    <option value="<?php echo $value['sup_name'];?>"><?php echo $value['sup_name'];?></option>
                                 <?php }?>   
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Current Stock</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="stock" id="stock" placeholder="Enter Current Stoc" >
                        </div>
                    </div>

                     <div class="form-group" id="data_3"><label class="col-sm-3 control-label">MFg Date</label>
                        <div class="col-sm-9">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" name="mfg_date" id="mfg_date1">
                        </div>
                        </div>
                    </div>


                    <div class="form-group"><label class="col-sm-3 control-label">Recorder Level</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="recorder_level" id="reorder_level" placeholder="Enter Recorder Level" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Unit/Pack</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="unit" id="unit" placeholder="Enter Unit Per Level" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Cost Price/Unit</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="cost_price" id="cost" placeholder="Enter Cost Price Per Unit" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Expiry Status*</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="expiry_status">
                                <option id="expiry_status1"></option>
                                <option>Pending</option>
                                <option>Processed</option>   
                                <option>Partial Processed</option>   
                            </select>
                        </div>
                    </div>

                    <div class="form-group" id="data_3"><label class="col-sm-3 control-label">Purchase Date</label>
                        <div class="col-sm-9">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" name="purchase_date" id="purchase_date">
                        </div>
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Batch No</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="batch_no" id="batch_no" placeholder="Enter Batch No" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">IDA Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="ida_code" id="ida_code" placeholder="Enter IDA Code" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Barcode</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="barcode" id="barcode" placeholder="Enter Barcode" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Case Pack Rate</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="case_rate" id="case_rate" placeholder="Enter Case Pack Rate" >
                        </div>
                    </div>

                    <div class="form-group"><label class="col-sm-3 control-label">Selling Price/Unit</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sell_price" id="sell" placeholder="Enter Selling Price Per Unit" >
                        </div>
                    </div>
                    <input type="hidden" name="id" id="id">
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" id="supplier_button"   class="btn btn-primary">Save</button>
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
    //Create item
$(document).ready(function(){
        $("#form_item").submit(function(){
            $('#itemModal').modal('hide');
            var data = $("#form_item").serialize();
            
            $.ajax({
                url: "<?php echo base_url()?>index.php/Procurement/addItem",
                data: data,
                type: 'post',
                dataType: "json",
                success: function(data) {
                  console.log("Here: "+data);
                    var tr;
                   $.each(data,function(i,o){
                        tr = $('<tr/>');
                        tr.append("<td>" + o.item_name + "</td>");
                        tr.append("<td>" + o.manu_company + "</td>");
                        tr.append("<td>" + o.category + "</td>");
                        tr.append("<td>" + o.supplier + "</td>");
                        tr.append("<td>" + o.current_stock + "</td>");
                        tr.append("<td>" + o.mfg_date + "</td>");
                        tr.append(
                            '<td><button class="btn btn-warning" id="itemEdit" data-toggle="modal" onclick="itemEdit('+o.id+');" data-target="#editItemModal"><i class="fa fa-pencil"></i></span></button></td><td><button class="btn btn-danger" id="supDelete" onclick="deleteManufactur('+o.id+')"><i class="fa fa-trash"></i></span></button></td>'
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

        //Update
        $("#form_edit_item").submit(function(){
            $('#editItemModal').modal('hide');
            var data = $("#form_edit_item").serialize();
            $.ajax({
                url: "<?php echo base_url()?>index.php/Procurement/updateItem",
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
        
    function deleteItem(id)
        {
          if(confirm('Are you sure to delete this?'))
          {
              $.ajax({
                url : "<?php echo base_url()?>index.php/Procurement/deleteItem/"+id,
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
   
    function itemEdit(id){
        console.log("Here: "+id);

        $.ajax({
            url: "<?php echo base_url()?>index.php/Procurement/editItem/"+id,
            type: 'post',
            dataType: 'json',
            success:function(data){
                console.log("data: "+data[0].supplier);
                var id = data[0].id;
                var item_name = data[0].item_name;
                var manu_company = data[0].manu_company;
                var category = data[0].category;
                var supplier = data[0].supplier;
                var current_stock = data[0].current_stock;
                var mfg_date = data[0].mfg_date;
                var reorder_level = data[0].reorder_level;
                var unit = data[0].unit;
                var cost = data[0].cost;
                var expiry_status = data[0].expiry_status;
                var batch_no = data[0].batch_no;
                var ida_code = data[0].ida_code;
                var barcode = data[0].barcode;
                var case_rate = data[0].case_pack_rate;
                var sell_price = data[0].sell_price;
                //Set data to Modal
                $('#id').attr("value",id);
                $('#name').attr("value",item_name);
                $('#mfgco1').html("value",data[0].manu_company);
                $('#category').attr("value",category);
                $('#supplier').html("value",supplier);
                $('#stock').attr("value",current_stock);
                $('#mfg_date1').html("value",mfg_date);
                $('#reorder_level').attr("value",reorder_level);
                $('#unit').attr("value",unit);
                $('#cost').attr("value",cost);
                $('#expiry_status1').html("value",expiry_status);
                $('#batch_no').attr("value",batch_no);
                $('#ida_code').attr("value",ida_code);
                $('#barcode').attr("value",barcode);
                $('#case_rate').attr("value",case_rate);
                $('#sell').attr("value",sell_price);
                
            },
            error:function(data){
                console.log("Error");
            },
        });
        return false;
    }
</script>