<div class="container jsjhr">
    <div class="row skfjh">

        <div class="col-md-2 sfjhe">
            <div class=" sjfsj">
                <img src='<?php echo base_url($this->session->userdata('pfp')); ?>' alt="">
                <h5 class="text-center pt-3">
                    <?php echo $this->session->userdata('nick') ?>
                </h5>
                <p class="text-muted text-center">
                    <?php echo $this->session->userdata('status') ?>
                </p>
                <hr>
                <div class="text-center">
                    <a href="<?php echo base_url('physicians'); ?>" class="font-weight-bold text-decoration-none text-center">
                        View My Profile
                    </a>
                </div>
            </div>
            <hr>
            <div class=" sjfsj">
                <p class="text-muted text-center">
                    If you are struggling with any mental condition please contact us. Our specialist will help you
                </p>
                <hr>
                <div class="text-center">
                    <a href="<?php echo base_url('physicians/appointment'); ?>" class="font-weight-bold text-decoration-none text-center">
                        Manage appointment
                    </a>
                </div>
            </div>
        </div>


        <div class="col-md-7" >

            <?php foreach ($posts as $post_item): ?>

                <div class="box1" style="margin-top: 0px ; margin-bottom: 15px" >
                    <a style="text-decoration:none; color:black" href='<?php echo base_url('index.php/staff/view_post/' . $post_item['story_id']); ?>'>
                        <div class="d-flex skfjkk">
                            <div class="lkt40">
                                <img src='<?php echo base_url('assets/Images/' . $post_item['pfp']); ?>' alt="">

                            </div>
                            <div class="pl-2 pt-1">
                                <h6><?php echo $post_item['title']; ?></h6>
                            </div>

                        </div>
                        <hr>
                        <p class="text-muted">
                            <?php echo $post_item['description']; ?>
                        </p>
                        <hr>
                        <div>
                            <small> 
                                <?php echo $post_item['total_like']; ?> 
                                <i class="fa fa-heart"></i>
                            </small>
                            <hr>
                        </div>
                        <div>

                        </div>

                    </a>
                    <div class="d-flex justify-content-around">
                        <div>
                            <a style="text-decoration:none; color:black" href='<?php echo base_url('index.php/staff/like/' . $post_item['vote_id']); ?>'>
                            <i class="fa fa-heart"></i>
                            Like
                            </a>
                        </div>
                        <div>
                            <a style="text-decoration:none; color:black" href='<?php echo base_url('index.php/staff/view_post/' . $post_item['story_id']); ?>'>
                            <i class="fa fa-comment"></i>
                            Comments
                            </a>
                        </div>
                        <div>
                            <i class="fa fa-share"></i>
                            Share
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
            <!-- -->

        </div>
        <div class="col-md-3">
            <div class="left_box">
                <span>
                    Patient List
                </span>
                <hr>
                <?php foreach ($user as $post_item): ?>
                <div class="d-flex dfkj">
                    <div class="lkt40">
                        <img src='<?php echo base_url("assets/Images/". $post_item['pfp']); ?>' alt="">

                    </div>
                    <div>
                        <?php echo $post_item['nickname']?>
                    </div>
                </div>
                <hr>
                <?php endforeach; ?>
                
            </div>
            
            <div class="left_box mt-3">
                
                <hr>
				<?php foreach ($articles as $article):
					?>

                <a href="<?php echo base_url('Physicians/view_article/'.$article['article_id']) ?>"> <?php echo $article['article_title'];?></a>
				<hr>
				<?php endforeach; ?>
				<a href="<?php echo base_url('Physicians/articles/') ?>"> My article</a>
                <!-- 
                <a href=""> Article Link 1</a> -->
            </div>

            <div class="left_box mt-3">
                <span class="font-weight-medium">
                    updated News Here
                </span>
                <hr>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut rem nisi natus totam veritatis nam repellat veniam, praesentium quam perspiciatis adipisci reiciendis, at qui aperiam ex sit, officia expedita beatae!
                </p>
            </div>
        </div>



    </div>

</div>
