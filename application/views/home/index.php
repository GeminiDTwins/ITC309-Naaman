<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
        <h1 class="pad-hor">vSocial</h1>
    </div>

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        
            <div class="row blog">
            <div class="pad-hor">
                <div class="row">
                <div class="col-lg-1">
</div>
                <div class="col-lg-8">
                <?php foreach ($posts as $item): ?>
                    
                    <div class="col-lg-12">       
                        <!-- Panel  Blog -->
                        <!--===================================================-->
                        <div class="panel">
                            <?php if (!empty($item['img_name'])) { ?>
                            <div class="blog-header">
                                <img class="img-responsive" src='<?php echo base_url("assets/img/uploads/").$item['img_name']; ?>' alt="Image">
                            </div>
                            <?php } ?>
                            <div class="blog-content">
                                <div class="blog-title media-block">
                                    <a href='<?php echo site_url("post/").$item['article_id']; ?>' class="btn-link">
                                        <h2><?php echo $item['title']; ?></h2>
                                    </a>
                                </div>
                                <div class="blog-body">
                                    <p><?php echo (strlen($item['description']) > 1000) ? substr($item['description'],0,1000) . " ..." : $item['description']; ?></p>
                                </div>
                            </div>
                            <div class="blog-footer">
                                <div class="media-left"><?php echo $item['created_date']; ?></div>
                                <div class="media-body text-right">
                                    <button class="btn btn-xs btn-danger btn-icon " id="btnVote" data-article='<?php echo $item['article_id']; ?>'><i class="demo-psi-heart-2 icon-sm"></i><span class=""> <?php echo $item['vote_count']; ?></button>
                                    <span class="mar-rgt" hidden><?php echo $item['vote_count']; ?></span>
                                    <i class="demo-pli-speech-bubble-5 icon-fw"></i><?php echo $item['comment_count']; ?>
                                </div>
                            </div>
                        </div>
                        <!--===================================================-->
                    </div>
                    
                <?php endforeach; ?>
                            </div>
                
                <div class="col-lg-3">
                    <div class="panel">
                        
                        <div class="blog-content">
                            <div class="blog-title media-block">
                                <a href='#' class="btn-link">
                                    <h2>Story Feed</h2>
                                </a>
                            </div>
                            <div class="blog-body">
                                <p></p>
                            </div>
                        </div>
                        <div class="blog-footer">
                            <div class="media-left"></div>
                            <div class="media-body text-right">
                                <!-- <button class="btn btn-xs btn-danger btn-icon " id="btnVote" data-article=''><i class="demo-psi-heart-2 icon-sm"></i><span class=""> </button>
                                <span class="mar-rgt" hidden></span>
                                <i class="demo-pli-speech-bubble-5 icon-fw"></i> -->
                            </div>
                        </div>
                    </div>
                </div>
                            </div>

                <div class="col-sm-6 col-lg-3" hidden>       
                    <!-- Panel  Blog -->
                    <!--===================================================-->
                    <div class="panel">
                        <div class="blog-content">
                            <div class="blog-title media-block">
                                <a href="#" class="btn-link">
                                    <h2>To take a trivial example</h2>
                                </a>
                            </div>
                            <div class="blog-body">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                            </div>
                        </div>
                        <div class="blog-footer">
                            <div class="media-left">19 Days ago</div>
                            <div class="media-body text-right">
                                <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i>678</span>
                                <i class="demo-pli-speech-bubble-5 icon-fw"></i>45
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                </div>
                <div class="col-sm-6 col-lg-3" hidden>
        
        
                    <!-- Panel  Blog -->
                    <!--===================================================-->
                    <div class="panel">
                        <div class="blog-header">
                            <img class="img-responsive" src='<?php echo base_url("assets/img/shared-img.jpg"); ?>' alt="Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-title media-block">
                                <a href="#" class="btn-link">
                                    <h2>The new common language</h2>
                                </a>
                            </div>
                            <div class="blog-body">
                                <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                            </div>
                        </div>
                        <div class="blog-footer">
                            <div class="media-left">25 Days ago</div>
                            <div class="media-body text-right">
                                <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i>81</span>
                                <i class="demo-pli-speech-bubble-5 icon-fw"></i>4
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
        
                </div>
                <div class="col-sm-6 col-lg-3" hidden>       
                    <!-- Panel  Blog -->
                    <!--===================================================-->
                    <div class="panel pad-all">
                        <div class="blog-header">
                            <img class="img-responsive" src='<?php echo base_url("assets/img/shared-img-3.jpg"); ?>' alt="Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-title media-block">
                                <a href="#" class="btn-link">
                                    <h2>No one rejects, dislikes</h2>
                                </a>
                            </div>
                            <div class="blog-body">
                                <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure. Like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                        </div>
                        <div class="blog-footer">
                            <div class="media-left">
                                <span>1 month ago</span>
                            </div>
                            <div class="media-body text-right">
                                <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i>52</span>
                                <i class="demo-pli-speech-bubble-5 icon-fw"></i>7
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                </div>
                <div class="col-sm-6 col-lg-3" hidden>       
                    <!-- Panel  Blog -->
                    <!--===================================================-->
                    <div class="panel">
                        <div class="blog-content">
                            <div class="blog-title media-block">
                                <a href="#" class="btn-link">
                                    <h2>To take a trivial example</h2>
                                </a>
                            </div>
                            <div class="blog-body">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                            </div>
                        </div>
                        <div class="blog-footer">
                            <div class="media-left">19 Days ago</div>
                            <div class="media-body text-right">
                                <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i>678</span>
                                <i class="demo-pli-speech-bubble-5 icon-fw"></i>45
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                </div>
                <div class="col-sm-6 col-lg-3" hidden>       
                    <!-- Panel  Blog -->
                    <!--===================================================-->
                    <div class="panel">
                        <div class="blog-content">
                            <div class="blog-title media-block">
                                <a href="#" class="btn-link">
                                    <h2>To take a trivial example</h2>
                                </a>
                            </div>
                            <div class="blog-body">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                            </div>
                        </div>
                        <div class="blog-footer">
                            <div class="media-left">19 Days ago</div>
                            <div class="media-body text-right">
                                <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i>678</span>
                                <i class="demo-pli-speech-bubble-5 icon-fw"></i>45
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                </div>
                <div class="col-sm-6 col-lg-3" hidden>       
                    <!-- Panel  Blog -->
                    <!--===================================================-->
                    <div class="panel pad-all">
                        <div class="blog-header">
                            <img class="img-responsive" src='<?php echo base_url("assets/img/shared-img-3.jpg"); ?>' alt="Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-title media-block">
                                <a href="#" class="btn-link">
                                    <h2>No one rejects, dislikes</h2>
                                </a>
                            </div>
                            <div class="blog-body">
                                <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure. Like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                        </div>
                        <div class="blog-footer">
                            <div class="media-left">
                                <span>1 month ago</span>
                            </div>
                            <div class="media-body text-right">
                                <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i>52</span>
                                <i class="demo-pli-speech-bubble-5 icon-fw"></i>7
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                </div>
            </div>    
            </div>
        <hr>
        <div class="grid" hidden>
            <?php foreach ($posts as $item): ?>
                <div class="grid-item">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">The European languages</h3>
                    </div>
                    <div class="pad-all">
                        <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
            
        
            
    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->

<script src='<?php echo base_url("assets/plugins/plugins/masonry/masonry.pkgd.min.js"); ?>'></script>
<Script>
    $(document).on('click', '#btnVote', function(e){
        e.preventDefault();
        let article_id = $(this).data("article");
        $.ajax({
            url : "<?php echo site_url('post/vote');?>",
            method : "POST",
            data : {article_id: article_id},
            success: function(data){
                let result = JSON.parse(data);
                console.log(result);
                location.reload();
            }
        });
    })
</Script>