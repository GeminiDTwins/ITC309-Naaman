<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
    </div>

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        
            <div class="panel blog blog-details">
                <div class="panel-body">
                    <div class="blog-title media-block">
                        <div class="media-right textright">
                            <a href="#" class="btn btn-icon demo-psi-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-psi-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
                        </div>
                        <div class="media-body">
                            <a href="javascript:void(0);" class="btn-link">
                                <h1><?php echo $item['title']; ?></h1>
                            </a>
                            <p>By <a href="javascript:void(0);" class="btn-link"><?php echo $item['name']; ?></a></p>
                        </div>
                    </div>
                    <div class="blog-header">
                        <img class="img-responsive" src="<?php echo (base_url('assets/img/uploads/').$item['img_name']); ?>" alt="Image">
                        <small>Photo by: unsplash.com</small>
                    </div>
                    <div class="blog-content">
        
                        <div class="blog-body">
                            <?php echo $item['description']; ?>
        
                        </div>
                    </div>
                    <div class="blog-footer">
                        <div class="media-left">
                            <span class="label label-success"><?php echo $item['created_date']; ?></span>
                        </div>
                        <div class="media-body text-right">
                            <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i><?php echo $item['vote_count']; ?></span>
                            <i class="demo-pli-speech-bubble-5 icon-fw"></i>23
                        </div>
                    </div>
        
        
                    <!-- Comment form -->
                    <!--===================================================-->
                    <hr class="new-section-sm bord-no">
                    <p class="text-lg text-main text-bold text-uppercase">Leave a Comment</p>
                    <form role="form">
                        <div class="row">
                            <div class="col-md-8">
        
                                <div class="form-group">
                                    <textarea class="form-control" rows="9" placeholder="Your comment" id="txtComment"></textarea>
                                </div>
        
                            </div>
                            <div class="col-md-4">
        
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block" id="btnComment" data-article="<?php echo $item['article_id']; ?>"><i class="fa fa-comment"></i> Submit Comment</button>
                                </div>
        
                            </div>
                        </div>
                    </form>
                    <!--===================================================-->
                    <!-- End Comment form -->
        
        
        
        
                    <hr class="new-section-sm">
                    <p class="text-lg text-main text-bold text-uppercase pad-btm">Comments</p>
        
        
        
                    <!-- Comments -->
                    <!--===================================================-->
                    <?php foreach ($comments as $item): ?>
                    <div class="comments media-block">
                        <div class="media-body">
                            <div class="comment-header">
                                <a href="#" class="media-heading box-inline text-main text-bold"><?php echo $item['f_name'].' '.$item['l_name']; ?></a>
                                <p class="text-muted text-sm"><?php echo $item['created_date']; ?></p>
                            </div>
                            <p><?php echo $item['comment']; ?></p>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!-- End Comments -->
                    <?php endforeach; ?>    
                </div>
            </div>
        
            
    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->

<script>
    $(document).on('click', '#btnComment', function(e){
        e.preventDefault();
        let article_id = $(this).data("article");
        let comment = $('#txtComment').val();
        $.ajax({
            url : "<?php echo site_url('post/comment');?>",
            method : "POST",
            data : {article_id: article_id, comment: comment},
            success: function(data){
                let result = JSON.parse(data);
                let url = "<?php echo site_url('home');?>";
                if (result == 1) {
                    location.reload();
                }else{
                    alert("Error Occured.")
                }
                console.log(result);
            }
        });
    })
</script>