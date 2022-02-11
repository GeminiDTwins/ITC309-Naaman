<style>
.item-btn{
    margin-top:5px;
    margin-right:5px;
}
</style>

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
        
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">User</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
        <li><a href="#"><i class="demo-pli-home"></i></a></li>
        <li class="active">Manage User</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        
        <!-- <hr class="new-section-sm bord-no">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-body text-center">
                    <div class="panel-heading">
                        <h3>Your content here...</h3>
                    </div>
                    <div class="panel-body">
                        <p>Start putting content on grids or panels, you can also use different combinations of grids.
                        <br>Please check out the dashboard and other pages.</p>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="row">
            <div class="col-sm-12">
                <!-- Row selection (single row) -->
					<!--===================================================-->
					<div class="panel" id="users">
					    <div class="panel-heading">
                            <div class="panel-control">
                                <button class="demo-panel-ref-btn btn btn-success" data-target="#addUserModal" data-toggle="modal">
                                    <i class="demo-pli-male icon-fw"></i> Add Appoinment
                                </button>
                                <button class="demo-panel-ref-btn btn btn-default" data-target="#users" data-toggle="panel-overlay">
                                    <i class="demo-psi-repeat-2 icon-fw"></i>
                                </button>
                                <div class="btn-group dropdown">
                                    <button data-toggle="dropdown" class="dropdown-toggle btn btn-default btn-active-primary" aria-expanded="false">
                                        <i class="caret"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" style="">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="panel-title">Users</h3>
                                    
					    </div>
					    <div class="panel-body">
					        <table id="apptList" class="table table-striped table-bordered" cellspacing="0" width="100%">
					            <thead>
					                <tr>
					                    <th>Physician</th>
                                        <th class="min-tablet">Booking Date</th>
                                        <th>Consultation Date</th>
                                        <th>Time</th>
					                    <th></th>
					                </tr>
					            </thead>
					            
					        </table>
					    </div>
					</div>
					<!--===================================================-->
					<!-- End Row selection (single row) -->
            </div>
        </div>
        
        
    </div>
    <!--===================================================-->
    <!--End page content-->


<!-- Modals-->
<!-- Add User -->
<div id="addUserModal" class="modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add New Appoinment</h4>
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
        </div>
        <div class="modal-body">
            <!--Block Styled Form -->
            <!--===================================================-->
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Physician</label>
                            <select id="physician" class="form-control" >
                                <option value="1">Dr.Downey</option>
                                <option value="2">Dr.Hemsworth</option>
                                <option value="3">Dr.Evan</option>
                                <option value="4">Dr.Ruffalo</option>
                                <option value="5">Dr.Hiddleston</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">  
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Time</label>
                            <div class="input-group date">
                                <input id="demo-tp-com" type="text" class="form-control">
                                <span class="input-group-addon"><i class="demo-pli-clock"></i></span>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Date</label>
                            <div id="date">
                                <div class="input-group date">
                                    <input id="inptDate" type="text" class="form-control">
                                    <span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </form>
            <!--===================================================-->
            <!--End Block Styled Form -->
        </div>
        <div class="modal-footer">
          <input id="apptId" value="" hidden>
          <button id="submitAppt" type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-plus">&nbsp;&nbsp;</i>Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
</div>
<!-- // -->
<!--End Modals-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->



<!--JAVASCRIPT-->
<!--DataTables [ OPTIONAL ]-->
<script src='<?php echo base_url("assets/plugins/datatables/media/js/jquery.dataTables.js"); ?>'></script>
<script src='<?php echo base_url("assets/plugins/datatables/media/js/dataTables.bootstrap.js"); ?>'></script>
<script src='<?php echo base_url("assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"); ?>'></script>

<!--Bootstrap Timepicker [ OPTIONAL ]-->
<!-- <script src='<?php echo base_url("assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"); ?>'></script> -->
<!--Bootstrap Datepicker [ OPTIONAL ]-->
<script src='<?php echo base_url("assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"); ?>'></script>

<!--<script src='<?php echo base_url("assets/js/app/user_manage_datatable.js"); ?>'></script>-->

<script>
$(document).on('nifty.ready', function() {

    //$('#demo-tp-com').timepicker();
    //$('#demo-tp-textinput').timepicker({minuteStep:5,showInputs:false,disableFocus:true});
    //$('#demo-dp-txtinput input').datepicker();
    $('#date .input-group.date').datepicker({format:"yyyy-MM-dd",autoclose:true,todayHighlight:true});

    $.fn.DataTable.ext.pager.numbers_length = 5;
    // Row selection (single row)
    // -----------------------------------------------------------------
    $('#apptList').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            rowSelection.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    //User List Table
    var rowSelection = $('#apptList').DataTable({
        "responsive": true,
        "language": {
            "paginate": {
            "previous": '<i class="demo-psi-arrow-left"></i>',
            "next": '<i class="demo-psi-arrow-right"></i>'
            }
        },
        "ajax": {
            url : "<?php echo site_url('appoinment/appoinment_list');?>",
            type : 'GET',
            //dataSrc: 'result.json'
        },
        "columnDefs": [
            { "orderable": false, "targets": [3] }
            ]
    });
    
    $(document).on('click', '.apptInfo', function(){
        var appt_id = $(this).data("appt");
        $.ajax({
            url : "<?php echo site_url('appoinment/appt_details');?>",
            method : "GET",
            data : {appt_id: appt_id},
            success: function(data){

                let result = JSON.parse(data);
                console.log(result);
                $('#apptId').val(result['oa_id']);
                $('#physician').val(result['physician']);
                $('#time').val(result['btime']);
                $('#date .input-group.date').datepicker('update', result['consultation_date']);
                $('#addUserModal').modal('show');
            }
        });
    })

    $(document).on('click', '#submitAppt', function(e){
        e.preventDefault();

        let oa_id = $('#apptId').val();
        let physician = $('#physician').val();
        let btime = $('#time').val();
        let c_date = $('#date .input-group.date').val(); //$('#date .input-group.date').datepicker('date'); 
        
        console.log('D1' + $('#inptDate').val());
        console.log('D2' + $('#date .input-group.date input').datepicker('getDate')  );
        let cc_date = $('#date .input-group.date').datepicker('date');
        console.log('CC ' + cc_date);
        // $.ajax({
        //     url : "<?php echo site_url('appoinment/set');?>",
        //     method : "POST",
        //     data : {physician: physician, btime: btime, c_date: c_date, oa_id: oa_id},
        //     success: function(data){
        //         console.log(data);
        //     }
        // });
    })

    $('#addUserModal').on('hidden.bs.modal', function () {
        $('#physician').val(1);
        $('#date .input-group.date').datepicker('clearDates');
        //$('#time').timepicker('clearDates');
    });
});
</script>