<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
    </div>

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        
                <!-- Contact Toolbar -->
                <!---------------------------------->
                <div class="row pad-btm">
                    <div class="col-sm-6 col-sm-offset-6 toolbar-right text-right">
                        <button class="btn btn-primary" id="save">Save &amp; Publish</button>
                    </div>
                </div>
                <!---------------------------------->
        
            <div class="fixed-fluid">
                <div class="fixed-sm-300 pull-sm-right">
                    <div class="panel">
                        <div class="panel-body">
        
                            <p class="text-main text-bold text-uppercase">Featured Image</p>
                            <p>Featured images are images that represent an individual Post, Page, or Custom Post Type.</p>
                            <!--Dropzonejs-->
                            <!--===================================================-->
                            <div class="dropzone-container">
                                <form id="demo-dropzone" action="#">
                                    <div class="dz-default dz-message">
                                        <div class="dz-icon">
                                            <i class="demo-pli-upload-to-cloud icon-5x"></i>
                                        </div>
                                        <div>
                                            <span class="dz-text">Drop files to upload</span>
                                            <p class="text-sm text-muted">or click to pick manually</p>
                                        </div>
                                    </div>
                                    <div class="fallback">
                                        <form action="#" method="post" enctype="multipart/form-data">
                                            <input name="file" type="file" multiple>
                                        </form>
                                    </div>
                                </form>
                            </div>
                            <!--===================================================-->
                            <!-- End Dropzonejs -->
        
        
                        </div>
                    </div>
        
        
                </div>
                <div class="fluid">
                    <input type="hidden" id="article_id" value="">
                    <input type="hidden" id="img_name" value="">
                    <div class="form-group">
                        <input type="text" id="title" placeholder="Blog Title" class="form-control input-lg" autofocus>
                    </div>
        
                    <div class="panel">
                        <div class="panel-body">
                            <div id="demo-summernote">

                            </div>
                        </div>
        
                    </div>
                    
                </div>
            </div>
            
    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->

<!--Custom script-->
    <!--===================================================-->
    <!--Summernote [ OPTIONAL ]-->
    <script src='<?php echo base_url("assets/plugins/summernote/summernote.min.js"); ?>'></script>

    <!--Dropzone [ OPTIONAL ]-->
    <script src='<?php echo base_url("assets/plugins/dropzone/dropzone.min.js"); ?>'></script>

    <script>
        $(document).on('nifty.ready', function () {
            
			
			    // DROPZONE.JS
			    // =================================================================
			    // Require Dropzone
			    // http://www.dropzonejs.com/
			    // =================================================================
			    $('#demo-dropzone').dropzone({
			        url: "<?php echo site_url('home/fileupload');?>",
			        //autoProcessQueue: false,
			        addRemoveLinks: true,
			        maxFiles: 1,
			        init: function() {
			            var myDropzone = this;
			            myDropzone.on('maxfilesexceeded', function(file) {
			                this.removeAllFiles();
			                this.addFile(file);
			            });
			        },
                    success: function(file, response){
                        let data = JSON.parse(response);
                        console.log('Img name '+data.file_name);
                        $('#img_name').val(data.file_name);
                    }
			    });
			

			    // SUMMERNOTE
			    // =================================================================
			    // Require Summernote
			    // http://hackerwins.github.io/summernote/
			    // =================================================================
			    $('#demo-summernote, #demo-summernote-full-width').summernote({
			        height : '600px'
			    });


                $(document).on('click', '#save', function(e){
                    //var user_id = $(this).data("user");
                    e.preventDefault();
                    //let order_master_id = $(this).data("order");
                    let article_id = $('#article_id').val();
                    let title = $('#title').val();
                    let description = $('#demo-summernote').summernote('code');
                    let img_name = $('#img_name').val();
                    $.ajax({
                        url : "<?php echo site_url('set_article');?>",
                        method : "POST",
                        data : {article_id: article_id, title: title, description: description, img_name: img_name},
                        success: function(data){
                            //$('#demo-acc-info-outline').html(data);
                            let result = JSON.parse(data);
                            let url = "<?php echo site_url('home');?>";
                            if (result == 1) {
                                window.location.replace(url);
                            }else{
                                alert("Error Occured.")
                            }
                            console.log(result);
                            //$('#userId').val(result['user_id']);
                            //$('#addUserModal').modal('show');
                        }
                    });
                })
			    
        });                 
    </script>