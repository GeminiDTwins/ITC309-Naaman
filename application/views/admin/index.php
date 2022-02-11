
<div id="content-container">
    <div id="page-head">
      <div class="pad-all text-center">
        <h3>Rent Process Management System</h3>
        <p1>
        
        </p>
      </div>
    </div>
    <!--===================================================-->
    <div id="page-content">
      <div class="row">
        <div class="col-lg-9">
          <div class="row">
            <div class="col-md-3">
              <div class="panel panel-warning panel-colorful media middle pad-all">
                <div class="media-left">
                  <div class="pad-hor"> <i class="fa fa-archive icon-3x"></i> </div>
                </div>
                <div class="media-body">
                  <p class="text-2x mar-no text-semibold"><?php echo $count_items; ?></p>
                  <p class="mar-no">Total Items</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-info panel-colorful media middle pad-all">
                <div class="media-left">
                  <div class="pad-hor"> <i class="fa fa-reply-all icon-3x"></i> </div>
                </div>
                <div class="media-body">
                  <p class="text-2x mar-no text-semibold"><?php echo $count_rent; ?></p>
                  <p class="mar-no">Under Rent Out</p>
                </div>
              </div>
            </div>
           
            <div class="col-md-3">
              <div class="panel panel-mint panel-colorful">
                <div class="pad-all media">
                  <div class="media-left"> <i class="fa fa-spinner icon-3x icon-fw"></i> </div>
                  <div class="media-body">
                    <p class="text-2x mar-no media-heading"><?php echo $count_pending_order;?></p>
                    <span>Ongoing Order</span> </div>
                </div>
              </div>
            </div>
             <div class="col-md-3">
              <div class="panel panel-success panel-colorful">
                <div class="pad-all media">
                  <div class="media-left"> <i class="fa fa-check icon-3x icon-fw"></i> </div>
                  <div class="media-body">
                    <p class="text-2x mar-no media-heading"><?php echo $count_completed_order;?></p>
                    <span>Completed Order</span> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="panel">
                <div class="panel-body text-center clearfix">
                  <h5 class="text-uppercase text-muted text-normal">Cashflow</h5>
                  <hr class="new-section-xs">
                  <div id="cashbook" style="height:150px"></div>
                  <hr class="new-section-xs bord-no">
                </div>
              </div>
            </div>
            <div class="col-lg-1"> </div>
            <div class="col-lg-3">
              <div class="panel panel-info panel-colorful media middle pad-all">
                <div class="media-left">
                  <div class="pad-hor"> <i class="fa fa-users icon-3x"></i> </div>
                </div>
                <div class="media-body">
                  <p class="text-2x mar-no text-semibold"><?php echo $count_customer;?></p>
                  <p class="mar-no">Customer</p>
                </div>
              </div>
              <div class="panel panel-pink panel-colorful media middle pad-all">
                <div class="media-left">
                  <div class="pad-hor"> <i class="fa fa-credit-card icon-3x"></i> </div>
                </div>
                <div class="media-body">
                  <p class="text-2x mar-no text-semibold">Rs. <?php echo $tot_payed; ?></p>
                  <p class="mar-no">Earnings</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="panel">
            <div class="panel-body text-center"> <img alt="Profile Picture" class="img-md img-circle mar-btm" src="<?php echo base_url("assets/img/profile-photos/1.png"); ?>">
              <p class="text-lg text-semibold mar-no text-main"><?php echo $_SESSION["username"]; ?></p>
              <p class="text-muted"><?php echo $_SESSION["email"]; ?></p>
              <p class="text-muted"><?php echo $_SESSION["type"]; ?></p>
              <!-- <button class="btn btn-primary mar-ver"><i class="demo-pli-male icon-fw"></i>View Profile</button> -->
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="panel">
            <div class="panel-body text-center clearfix">
              <h5 class="text-uppercase text-muted text-normal">Order Chart</h5>
              <hr class="new-section-xs">
              <div id="demo-bar-chart" style="height:200px"></div>
              <hr class="new-section-xs bord-no">
            </div>
          </div>
        </div>
        <div class="col-lg-6"> 
          
          <!--Extra Small Weather Widget--> 
          <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <div class="panel">
            <div class="panel-body text-center clearfix">
              <h5 class="text-uppercase text-muted text-normal">Order Chart</h5>
              <hr class="new-section-xs">
              <div id="order_bar-chart" style="height:200px"></div>
              <hr class="new-section-xs bord-no">
            </div>
          </div>
          
          <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> 
          <!--End Extra Small Weather Widget--> 
          
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Order Status</h3>
            </div>
            
            <!--Data Table--> 
            <!--===================================================-->
            <div class="panel-body">
              <table id="item_data"  class="table table-bordered table-striped" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Order Number</th>
                    <th>Customer Name</th>
                    <th>Customer NIC</th>
                    <th>Order Date</th>
                    <th>Payment Status</th>
                    <th>Order status</th>
                    <th>Open Order</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!--===================================================--> 
            <!--End Data Table--> 
            
          </div>
        </div>
      </div>
    </div>


    <!-- Modals-->
    <!-- Add Order -->
    <div id="addOrderModal" class="modal" role="dialog" data-backdrop="static">
        <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Add New Order</h4>
            <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
            </div>
            <div class="modal-body">
                <!--Block Styled Form -->
                <!--===================================================-->
                <form>
                    <div class="panel-body">
                        <div class="row mar-btm">
                            <div class="form-group">
                                <div class="col-md-12">
                                <label class="control-label">Type</label>
                                    <div class="radio" id="orderType1">
                                        <!-- Inline radio buttons -->
                                        <input id="demo-inline-form-radio1" class="magic-radio" type="radio" name="orderType1" value="1" checked="">
                                        <label for="demo-inline-form-radio1">Product</label>
            
                                        <input id="demo-inline-form-radio-2-1" class="magic-radio" type="radio" name="orderType1" value="2">
                                        <label for="demo-inline-form-radio-2-1">Job</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="list-group" id="cat_list1">
                                    <a class="list-group-item" href="#" id="1">Flex</a>
                                    <a class="list-group-item" href="#" id="2">Sticker</a>
                                    <a class="list-group-item disabled" href="#">Designing</a>
                                    <a class="list-group-item" href="#" id="3">Lacer Cutting</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Width</label>
                                        <input type="number" class="form-control" id="width1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Height</label>
                                        <input type="number" class="form-control" id="height1">
                                    </div>
                                </div>
                                <div class="text-right col-md-12">
                                    <button class="btn btn-success btn-sm" id="btnAdd1" type="button">Add</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="list-group" hidden>
                                    <a class="list-group-item" href="#">Flex</a>
                                    <a class="list-group-item" href="#">Sticker</a>
                                    <a class="list-group-item" href="#">Lacer Cutting</a>
                                </div>
                                <div id="list" class="list-group"><p class="text-center">No Product / Job added</p></div>
                            </div>
                        </div>
                        <div class="row" hidden>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Firstname</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Lastname</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" hidden>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Website</label>
                                    <input type="url" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--===================================================-->
                <!--End Block Styled Form -->
            </div>
            <div class="modal-footer">
            <input id="item_id1" value="" hidden>
            <button id="btnOrder1" type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-cart-plus">&nbsp;&nbsp;</i>Submit Order</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>
    <!-- // -->

    <!-- Add Order 2 -->
    <div id="addOrder2Modal" class="modal" role="dialog" data-backdrop="static">
        <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Add New Order</h4>
            <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
            </div>
            <div class="modal-body">
                <!--Block Styled Form -->
                <!--===================================================-->
                <form>
                    <div class="panel-body">
                        <div class="row mar-btm">
                            <div class="form-group">
                                <div class="col-md-12">
                                <label class="control-label">Type</label>
                                    <div class="radio" id="orderType">
                                        <!-- Inline radio buttons -->
                                        <input id="demo-inline-form-radio" class="magic-radio" type="radio" name="orderType" value="1" checked="">
                                        <label for="demo-inline-form-radio">Product</label>
            
                                        <input id="demo-inline-form-radio-2" class="magic-radio" type="radio" name="orderType" value="2">
                                        <label for="demo-inline-form-radio-2">Job</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="list-group" id="cat_list">
                                    
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">Width</label>
                                            <input type="number" class="form-control" id="width">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">Height</label>
                                            <input type="number" class="form-control" id="height">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <br>
                                            <button class="btn btn-success btn-sm" id="btnAdd" type="button">Add</button>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="jsGrid"></div>
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
            <input id="item_id" value="" hidden>
            <button id="btnOrder" type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-cart-plus">&nbsp;&nbsp;</i>Submit Order</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>
    <!-- // -->
    <!--End Modals-->

</div>

<script src="<?php echo base_url("assets/plugins/flot-charts/jquery.flot.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/flot-charts/jquery.flot.resize.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/flot-charts/jquery.flot.orderBars.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/flot-charts/jquery.flot.tooltip.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/flot-charts/jquery.flot.resize.min.js"); ?>"></script>
<script>
    $(document).on('nifty.ready', function() {
        var itemdataTable = $('#item_data').DataTable({
            "responsive": true,
            "language": {
                "paginate": {
                "previous": '<i class="demo-psi-arrow-left"></i>',
                "next": '<i class="demo-psi-arrow-right"></i>',
                "infoEmpty": "There are currently no active jobs.",
                "emptyTable": "There are currently no active jobs.",
                "zeroRecords": "There are currently no active jobs."
                }
            },
            "ajax": {
                url : "<?php echo site_url('admin/order_list');?>",
                type : 'GET',
                //dataSrc: 'result.json'
            },
            "columnDefs": [
                    { "orderable": false, "targets": [0,6] }
                ],
            "pageLength": 10
        });

      OrderBarChart();
      //Chart
      function OrderBarChart()
      {	
        var d1 = [[1, 8], [2, 5], [3, 4], [4, 7], [5, 12], [6, 13], [7, 3]];
        var    d2 = [[1, 4], [2, 5], [3, 7], [4, 9], [5, 6], [6, 5], [7, 6]];
        var	d3 = [[1, 8], [2, 4], [3, 6], [4, 12], [5, 3], [6, 2], [7, 1]];
        var    d4 = [[1, 3], [2, 0], [3, 5], [4, 3], [5, 2], [6, 7], [7, 3]];

        $.plot("#order_bar-chart", [
            { 
              data: d1
            },
            {  
              data: d2
            },
            {  
              data: d3
            },
            {
              data: d4
            }
        ],
        
        {
          series: {
              bars: {
                  show: true,
                  lineWidth: 0,
                  barWidth: 0.15,
                  align: "center",
                  order: 1,
                  fillColor: { colors: [ { opacity: .9 }, { opacity: .9 }, { opacity: .9 } ] }
              }
          },
      
          colors: ['#FFA500', '#3371ff', ' #2ecc71 ', 'Red'],
          grid: {
              borderWidth: 0,
              hoverable: true,
              clickable: true
          },
          yaxis: {
              ticks: 4, tickColor: 'rgba(0,0,0,.02)'
          },
          xaxis: {
              ticks: 7,
              tickColor: 'transparent',
              ticks: [[1,'Monday'],[2,'Tuesday'],[3,'Wednesday'],[4,'Thursday'],[5,'Friday'],[6,'Saturday'],[7,'Sunday ']]
          },
          tooltip: {
              show: true,
              content: "<div class='flot-tooltip text-center'><h5 class='text-main'>%s</h5>%y.0 </div>"
          }
      });
      };

      //Chart
      var d1 = [[1, 40000], [2, 78000], [3, 52000], [4, 30000], [5, 38000], [6, 45000], [7, 20000]] ;
      var y = [[1,'M'],[2,'T'],[3,'Wednesday'],[4,'Thursday'],[5,'Friday'],[6,'Saturday'],[7,'Sunday ']];

      $.plot("#cashbook", [
          {
              label: "Cashflow",
              data: d1
          }
      
      ],
      {
        colors: ['Red'],
        grid: {
            borderWidth: 0,
            hoverable: true,
            clickable: true
        },
            yaxis: {
            ticks: 4, tickColor: 'rgba(0,0,0,.02)'
        },
            xaxis: {
            ticks: 7,
            tickColor: 'transparent',
            ticks: y
        }   
      });
      //END Chart 1

      var d1 = [[1, 43], [2, 24], [3, 45], [4, 49], [5, 17], [6, 18], [7, 27]],
      d2 = [[1, 25], [2, 25], [3, 35], [4, 52], [5, 25], [6, 25], [7, 32]],
      d3 = [[1, 3], [2, 0], [3, 9], [4, 7], [5, 7], [6, 1], [7, 3]];

      $.plot("#demo-bar-chart", [
        {
            label: "Rentout",
            data: d1
        },{
            label: "Return",
            data: d2
        },{
            label: "Broken",
            data: d3
        }],
        {
        
          series: {
              bars: {
                  show: true,
                  lineWidth: 0,
                  barWidth: 0.25,
                  align: "center",
                  order: 1,
                  fillColor: { colors: [ { opacity: .9 }, { opacity: .9 } ] }
              }
          },
      
          colors: ['#03a9f4', '#ffb300', 'red'],
          grid: {
              borderWidth: 0,
              hoverable: true,
              clickable: true
          },
          yaxis: {
              ticks: 4, tickColor: 'rgba(0,0,0,.02)'
          },
          xaxis: {
              ticks: 7,
              tickColor: 'transparent',
              ticks: [[1,'Monday'],[2,'Tuesday'],[3,'Wednesday'],[4,'Thursday'],[5,'Friday'],[6,'Saturday'],[7,'Sunday ']]
          },
          tooltip: {
              show: true,
              content: "<div class='flot-tooltip text-center'><h5 class='text-main'>%s</h5>%y.0 </div>"
          }
        });

    });
</script>

