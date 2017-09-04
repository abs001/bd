<div class="row">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Invoice / Create Invoice</h5>
                        <div class="text-right">    
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#invoiceModal">
                                Create Invoice
                            </button>
                        </div>
                    </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="drugTable" >
                    <thead>
                    <tr>
                        <th>Incoice No</th>
                        <th>Item</th>
                        <th>Supplier Name</th>
                        <th>Total Amount</th>
                        <th>Invoice Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
<?php 
    foreach ($invoiceResult as $value) {
?>
    <tr class="gradeX">
       <td><?php echo $value['invoice_no'];?></td>
       <td><?php echo $value['item'];?></td>
       <td><?php echo $value['supplier_name'];?></td>
       <td><?php echo $value['total_amount'];?></td>
       <td><?php echo $value['Invoice_date'];?></td>
        <td>
<button class="btn btn-warning" id="invoiceEdit" data-toggle="modal" onclick="invoiceEdit(<?php echo $value['id']?>);" data-target="#editInvoiceModal"><i class="fa fa-pencil"></i></span></button></td>  
        <td><button class="btn btn-danger" id="drugDelete" onclick="deleteInvoice(<?php echo $value['id']?>)"><i class="fa fa-trash"></i></span></button></td>
    </tr>
<?php
    }
?>
                    </tbody>
                    </table>
                        </div>
                        </div>
                    </div>
<!-- Modal : createInvoice -->
<div class="modal inmodal fade" id="invoiceModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Create Invoice</h4>
            </div>
        <form  class="form-horizontal" id="form_invoice" method="post">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Po No</label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="po_no" id="po_no" onchange="getPoData()">
                                        <option>Select Po No</option>
                                    <?php foreach($poNo as $value){?>
                                        <option value="<?php echo $value['po_no'];?>"><?php echo $value['po_no'];?></option>
                                    <?php }?>   
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">PO Date</label>
                                <div class="input-group date" class="col-sm-7">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input id="date_added" type="text" class="form-control" name="po_date" >
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Invoice Date</label>
                                <div class="input-group date" class="col-sm-7">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input id="invoice_date" type="text" class="form-control"  name="invoice_date">
                                </div>
                            </div>
                        </div>
                        
                    </div>


                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Invoice No</label>
                               <div class="input-group date" class="col-sm-7">
                                    
                                    <input id="invoice_no" name="invoice_no" type="text" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Suppiler</label>
                                <div class="input-group date" class="col-sm-7">
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                            </div>
                        </div>

                    
                        
                    </div>
                

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Item</label>
                                <div class="input-group date" class="col-sm-7">
                                    
                                    <input  type="text" class="form-control" name="item_name" id="item_name" >
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Batch No</label>
                                <div class="input-group date" class="col-sm-7">
                                    
                                    <input  type="text" class="form-control" name="batch" id="batch" >
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Per</label>
                                <div class="input-group date" class="col-sm-7">
                                    <input type="text" class="form-control" name="per" id="per">
                                </div>
                            </div>
                        </div>

                    
                        
                    </div>        

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Unit/Pack</label>
                                <div class="input-group date" class="col-sm-7">
                                
                                    <input id="units" name="units" type="text" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Pack</label>
                                <div class="input-group date" class="col-sm-7">
                                    
                                    <input  type="text" class="form-control" name="pack" id="pack" >
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Total Units</label>
                                <div class="input-group date" class="col-sm-7">
                                    <input type="text" class="form-control" name="total_units" id="total_units" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Cost Per/Pack</label>
                                <div class="input-group date" class="col-sm-7">
                                    
                                    <input id="cost" name="cost" type="text" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Total Amount</label>
                                <div class="input-group date" class="col-sm-7">
                                    
                                    <input  type="text" class="form-control" name="total_amount" value="" id="total_amount">
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Free Units</label>
                                <div class="input-group date" class="col-sm-7">
                                    <input type="text" class="form-control" name="free_units" id="free_units">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Mfg Company</label>
                                <div class="input-group date" class="col-sm-7">
                                    
                                    <input  type="text" class="form-control" name="mfgco" id="mfgco" >
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Expiry Date</label>
                                <div class="input-group date" class="col-sm-7">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input id="expiry_date" name="expiry_date" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Mfg Date</label>
                                <div class="input-group date" class="col-sm-7">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input id="mfg_date" name="mfg_date" type="text" class="form-control" >
                                </div>
                            </div>
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

<!-- Modal : editinvoice -->
<div class="modal inmodal fade" id="editInvoiceModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Edit Invoice</h4>
            </div>
        <form  class="form-horizontal" id="form_edit_invoice" method="post">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Po No</label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="po_no" id="po_no" onchange="getPoData()">
                                        <option id="po_no1"></option>
                                    <?php foreach($poNo as $value){?>
                                        <option value="<?php echo $value['po_no'];?>"><?php echo $value['po_no'];?></option>
                                    <?php }?>   
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">PO Date</label>
                                <div class="input-group date" class="col-sm-7">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input id="date_added1" type="text" class="form-control" name="po_date1" >
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Invoice Date</label>
                                <div class="input-group date" class="col-sm-7">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input id="invoice_date1" type="text" class="form-control"  name="invoice_date1">
                                </div>
                            </div>
                        </div>
                        
                    </div>


                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Invoice No</label>
                               <div class="input-group date" class="col-sm-7">
                                    
                                    <input id="invoice_no1" name="invoice_no1" type="text" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Suppiler</label>
                                <div class="input-group date" class="col-sm-7">
                                    <input type="text" class="form-control" name="name1" id="name1">
                                </div>
                            </div>
                        </div>

                    
                        
                    </div>
                

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Item</label>
                                <div class="input-group date" class="col-sm-7">
                                    
                                    <input  type="text" class="form-control" name="item_name1" id="item_name1" >
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Batch No</label>
                                <div class="input-group date" class="col-sm-7">
                                    
                                    <input  type="text" class="form-control" name="batch1" id="batch1" >
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Per</label>
                                <div class="input-group date" class="col-sm-7">
                                    <input type="text" class="form-control" name="per1" id="per1">
                                </div>
                            </div>
                        </div>

                    
                        
                    </div>        

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Unit/Pack</label>
                                <div class="input-group date" class="col-sm-7">
                                
                                    <input id="units1" name="units1" type="text" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Pack</label>
                                <div class="input-group date" class="col-sm-7">
                                    
                                    <input  type="text" class="form-control" name="pack1" id="pack1" >
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Total Units</label>
                                <div class="input-group date" class="col-sm-7">
                                    <input type="text" class="form-control" name="total_units1" id="total_units1" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Cost Per/Pack</label>
                                <div class="input-group date" class="col-sm-7">
                                    
                                    <input id="cost1" name="cost1" type="text" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Total Amount</label>
                                <div class="input-group date" class="col-sm-7">
                                    
                                    <input  type="text" class="form-control" name="total_amount1" id="total_amount1">
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Free Units</label>
                                <div class="input-group date" class="col-sm-7">
                                    <input type="text" class="form-control" name="free_units1" id="free_units1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Mfg Company</label>
                                <div class="input-group date" class="col-sm-7">
                                    
                                    <input  type="text" class="form-control" name="mfgco1" id="mfgco1" >
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Expiry Date</label>
                                <div class="input-group date" class="col-sm-7">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input id="expiry_date1" name="expiry_date1" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group"><label class="col-sm-5 control-label">Mfg Date</label>
                                <div class="input-group date" class="col-sm-7">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input id="mfg_date1" name="mfg_date1" type="text" class="form-control" >
                                </div>
                            </div>
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

        $('#date_added').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
        $('#invoice_date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
        $('#expiry_date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

        $('#mfg_date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

        $('#date_added1').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
        $('#invoice_date1').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
        $('#expiry_date1').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

        $('#mfg_date1').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

    
    });

    function getPoData(){
        var po_no = document.getElementById("po_no").value;
        $.ajax({
            url: "<?php echo base_url()?>index.php/Procurement/getPoData/"+po_no,
            type: 'post',
            dataType: 'json',
            success:function(data){

                console.log(JSON.stringify(data));
                
                 var po = data.po;
                 var items = data.item;
                
                $('#date_added').attr("value",po[0].po_date);
                $('#per').attr("value",po[0].per);
                $('#cost').attr("value",po[0].cost);
               $('#item_name').attr("value",items[0].item_name);
               $('#name').attr("value",items[0].supplier_name);
               $('#batch').attr("value",items[0].batch_no);
                $('#mfgco').attr("value",items[0].manu_company);
                $('#mfg_date').attr("value",items[0].mfg_date);
                $('#units').attr("value",items[0].unit);   

                   // $('table').prepend(tr);     
                console.log(items[0].supplier);
                
                $('#reorder_level').attr("value",data[0].reorder_level);
                
                
            },
            error:function(data){
                console.log("Error");
            },
        });
        return false;
    }

    function SelectElement(selectElementId, valueToSelect)
    {    
        var element = document.getElementById(selectElementId);
        element.value = valueToSelect;
    }




    //Create supplier
$(document).ready(function(){
        $("#form_invoice").submit(function(){
            $('#invoiceModal').modal('hide');
            var data = $("#form_invoice").serialize();
            console.log(data);
            $.ajax({
                url: "<?php echo base_url()?>index.php/Procurement/createInvoice",
                data: data,
                type: 'post',
                dataType: "json",
                success: function(data) {
                  console.log("Here: "+JSON.stringify(data));
                    var tr;
                   $.each(data,function(i,o){
                        tr = $('<tr/>');
                        tr.append("<td>" + o.invoice_no + "</td>");
                       tr.append("<td>" + o.item + "</td>");
                       tr.append("<td>" + o.supplier_name + "</td>");
                       tr.append("<td>" + o.total_amount + "</td>");
                       tr.append("<td>" + o.Invoice_date + "</td>");
                        tr.append(
                            '<td><button class="btn btn-warning" id="drugEdit" data-toggle="modal" onclick="invoiceEdit('+o.id+');" data-target="#editDrugModal"><i class="fa fa-pencil"></i></span></button></td><td><button class="btn btn-danger" id="supDelete" onclick="deleteInvoice('+o.id+')"><i class="fa fa-trash"></i></span></button></td>'
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
        $("#form_edit_invoice").submit(function(){
            $('#editInvoiceModal').modal('hide');
            var data = $("#form_edit_invoice").serialize();
            $.ajax({
                url: "<?php echo base_url()?>index.php/Procurement/updateInvoice",
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
        
    function deleteInvoice(id)
        {
            console.log(id);
          if(confirm('Are you sure to delete this?'))
          {
              $.ajax({
                url : "<?php echo base_url()?>index.php/Procurement/deleteInvoice/"+id,
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

    function invoiceEdit(id){
        console.log("Here: "+id);

        $.ajax({
            url: "<?php echo base_url()?>index.php/Procurement/editInvoice/"+id,
            type: 'post',
            dataType: 'json',
            success:function(data){
                console.log(JSON.stringify(data));
                
                
                $('#id').attr("value",data[0].id);
                $('#po_no1').html("value",data[0].po_no);
                $('#date_added1').attr("value",data[0].po_date);
                $('#invoice_date1').attr("value",data[0].Invoice_date);
                $('#invoice_no1').attr("value",data[0].invoice_no);
                $('#name1').attr("value",data[0].supplier_name);
                $('#item_name1').attr("value",data[0].item);
                $('#batch1').attr("value",data[0].batch_no);
                $('#per1').attr("value",data[0].per);
                $('#units1').attr("value",data[0].unit_pack);
                $('#pack1').attr("value",data[0].pack);
                $('#total_units1').attr("value",data[0].total_units);
                $('#cost1').attr("value",data[0].cost);
                $('#total_amount1').attr("value",data[0].total_amount);
                $('#free_units1').attr("value",data[0].free_units);
                $('#expiry_date1').attr("value",data[0].expiry_date);
                $('#mfg_date1').attr("value",data[0].mfg_date);
                $('#mfgco1').attr("value",data[0].mfg_company);
                
            },
            error:function(data){
                console.log("Error");
            },
        });
        return false;
    }    
   
</script>