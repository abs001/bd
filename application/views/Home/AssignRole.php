<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="row">
<div class="col-lg-6">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Employee / Assign role</h5>
        </div>
        <div class="ibox-content">
                <h5 class="text-warning">STEP 1 : Click on employee name</h5><hr>
            <div class="table-responsive">
                    <table class="table table-striped employee" id="employeeTable" >
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Employee Name</th>
                        <th>Department</th>
                        <th>Mobile</th>
                        <!-- <th>Email</th> -->
                    </tr>
                    </thead>
                    <tbody>
            <?php 
                foreach ($employee as $value) {
            ?>
                <tr class="gradeX">
                    <td id="empid"><?php echo $value['id']?></td>
                    <td><?php echo $value['employee_name']?></td>
                    <td><?php echo $value['department']?></td>
                    <td><?php echo $value['mobile']?></td>
                    <!-- <td><?php echo $value['email']?></td> -->
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
<!-- ##### TABLE FOR ROLE -->
<div class="col-lg-4">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                
            </div>
        <div class="ibox-content">
            <div class="table-responsive">
                    <h5 class="text-warning">STEP 2 : Click role</h5><hr>
                    <table class="table table-striped role" id="roleTable" >
                    <thead>
                    <tr>
                        <th>Role</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ($role as $value) {
                        ?>
                            <tr class="gradeX" id="roleData">
                                <td id="roleName"><?php echo $value['name']?></td>
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
 <div class="col-lg-2">
    <div class="text-center">   
        <hr> 
        <h5 class="text-warning">STEP 3 : Assign role</h5>
        <button type="button" class="btn btn-primary" id="saveRole">
            Assign role
        </button>
    </div>
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
<!-- Toastr script -->
<script src="<?php echo base_url();?>assets/js/plugins/toastr/toastr.min.js"></script>
<script>
    $(document).ready(function(){
        // 
    });
    var empid = "";
    var roleName = "";
    $('.employee tr').click(function() {
       $('.employee tr').removeAttr("id","selectedEmp"); 
       $('.employee tr').removeAttr('style');
       $(this).attr("id","selectedEmp"); 
       $(this).css('backgroundColor', 'rgba(139, 195, 74, 0.35)');
       empid = $("#selectedEmp #empid").text();
    });
    $('.role tr').click(function() {
       $('.role tr').removeAttr("id","selectedRole"); 
       $('.role tr').removeAttr('style');
       $(this).attr("id","selectedRole"); 
       $(this).css('backgroundColor', 'rgba(139, 195, 74, 0.35)');
       roleName = $("#selectedRole #roleName").text();
    });
    $('#saveRole').click(function(){
        $.ajax({
            url: "<?php echo base_url()?>index.php/Admin/assignRoleSave/"+empid+"/"+roleName,
                type: 'post',
                dataType: "json",
                success: function(data) {
                    alert("Role "+roleName+" assigned to id: "+empid);
                },
                error: function(data){
                    console.log(data);
                },

        });

    });
</script>