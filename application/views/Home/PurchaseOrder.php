<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Purchase orders</h2>
    </div>
    <div class="col-lg-2">
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <form  class="form-horizontal" id="form_po" method="post">
            <div class="ibox-content m-b-sm border-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="po_no">PO No</label>
                            <input type="text" id="po_no" name="po_no" value="" placeholder="PO No" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="ref_no">Ref. No</label>
                            <input type="text" id="ref_no" name="ref_no" value="" placeholder="Ref. No" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="date_added">PO Date</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input name="po_date" id="po_date" type="text" class="form-control" value="03/04/2014">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="desc">Item Description</label>
                            <input type="text" id="desc" name="desc" value="" placeholder="Item Description" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        
                        <div class="form-group">
                            <label class="control-label" for="price">Cost Price</label>
                            <input type="text" id="price" name="price" value="" placeholder="Price" class="form-control">
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="per">Per</label>
                            <input type="text" id="per" name="per" value="" placeholder="Per" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="quantity">Quantity</label>
                            <input type="text" id="quantity" name="quantity" value="" placeholder="Quentity" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="amount">Amount</label>
                            <input type="text" id="amount" name="amount" value="" placeholder="Amount" class="form-control">
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="stock">Current Stock</label>
                            <input type="text" id="stock" name="stock" value="" placeholder="Current Stock" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        
                    </div>
                    <div class="col-sm-4" class="text-right">
                        
                            <button type="submit" class="btn btn-primary">Create Order</button>
                        
                    </div>

                </div>



            </div>
            </form>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                <thead>
                                <tr>

                                    <th>PO No</th>
                                    <th data-hide="phone">Ref No</th>
                                    
                                    <th data-hide="phone">PO Date</th>
                                    <th data-hide="phone,tablet" >Item </th>
                                    <th data-hide="phone">Cost</th>
                                    <th data-hide="phone">Per</th>
                                    <th data-hide="phone">Quantity</th>
                                    <th data-hide="phone">Amount</th>
                                    <th data-hide="phone">Current Stock</th>
                                    <th data-hide="phone">Status</th>
                                    <th class="text-right">Action</th>

                                </tr>
                                </thead>
                                <tbody>
 <?php 
    foreach ($poResult as $value) {
?>                               
                                <tr>
                                    <td><?php echo $value['po_no'];?></td>
                                   <td><?php echo $value['ref_no'];?></td>
                                   <td><?php echo $value['po_date'];?></td>
                                   <td><?php echo $value['item'];?></td>
                                   <td><?php echo $value['cost'];?></td>
                                   <td><?php echo $value['per'];?></td>
                                   <td><?php echo $value['quantity'];?></td>
                                   <td><?php echo $value['amount'];?></td>
                                   <td><?php echo $value['current_stock'];?></td>
                                   <td><span class="label label-primary">Pendding</span></td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                           
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs" id="poDelete" onclick="deletePo(<?php echo $value['id']?>)">Delete</button>
                                        </div>
                                    </td>
                                </tr>

<?php
    }
?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
<!-- Mainly scripts -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- Data picker -->
    <script src="<?php echo base_url();?>assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <!-- FooTable -->
    <script src="<?php echo base_url();?>assets/js/plugins/footable/footable.all.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/iCheck/icheck.min.js"></script>

<script>
        $(document).ready(function() {


            $('#i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });

            $('.footable').footable();

            $('#date_added').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#date_modified').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });


        });


$(document).ready(function(){
        $("#form_po").submit(function(){
            
            var data = $("#form_po").serialize();
            console.log(data);
            $.ajax({
                url: "<?php echo base_url()?>index.php/Procurement/addPo",
                data: data,
                type: 'post',
                dataType: "json",
                success: function(data) {
                  console.log("Here: "+data);
                    var tr;
                    $.each(data,function(i,o){
                        tr = $('<tr/>');
                   tr.append("<td>" + o.po_no + "</td>");
                       tr.append("<td>" + o.ref_no + "</td>");
                       tr.append("<td>" + o.po_date + "</td>");
                       tr.append("<td>" + o.item + "</td>");
                       tr.append("<td>" + o.cost + "</td>");
                       tr.append("<td>" + o.per + "</td>");
                       tr.append("<td>" + o.quantity + "</td>");
                       tr.append("<td>" + o.amount + "</td>");
                       tr.append("<td>" + o.Current + "</td>");
                       tr.append("<td><span class='label label-primary'>Pendding</span></td>");
                        tr.append(
                            '<td class="text-right"> <div class="btn-group"><button class="btn-white btn btn-xs">Edit</button><button class="btn-white btn btn-xs" id="poDelete" onclick="deletePo('+o.id+')">Delete</button></div></td>'
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
    });

     function deletePo(id)
        {
            console.log(id);
          if(confirm('Are you sure to delete this?'))
          {
              $.ajax({
                url : "<?php echo base_url()?>index.php/Procurement/deletePo/"+id,
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