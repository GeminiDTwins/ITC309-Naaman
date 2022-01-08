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
                    <a href="" class="font-weight-bold text-decoration-none text-center">
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
                    <a href="" class="font-weight-bold text-decoration-none text-center">
                        Make Appointment
                    </a>
                </div>
            </div>
        </div>


        <div class="col-md-7">

            <!-- story-->
            <?php foreach ($posts as $post_item): ?>

                <!--<div class="jfheuf">-->
                <div class="box1" style="margin-top: 0px">
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

                    <div class="d-flex justify-content-around">
                        <div>
                            <i class="fa fa-heart"></i>
                            Like
                        </div>
                        <div>
                            <i class="fa fa-comment"></i>
                            Comments
                        </div>
                        <div>
                            <i class="fa fa-share"></i>
                            Share
                        </div>
                    </div>
                </div>

                <!--post_comment-->
            <?php endforeach; ?>
            <!-- -->
            <!--</div>-->
            <div class="jfheuf" style="margin-top: 20px">
                <?php echo validation_errors(); ?>
                
                
                <?php echo form_open($this->session->userdata('link').'/comment_story'); ?>
                <div>
                    <div>
                        <h6>Comment</h6>
                        <hr>
                        <input type="hidden" name="story_id" value='<?php echo $this->uri->segment(3) ?>' />
                        <textarea name="comment" cols="3" rows="3" class="form-control" placeholder="What are your thoughts?" required></textarea>
                        <h6 align="right"><button type="submit" class="btn btn-light" ><i class="fa fa-comment"></i> Comment</button></h6>
                    </div>
                </div>
                </form>

            </div>

            <!--Comment-->
            <?php foreach ($comment as $post_comment): ?>

                <!--<div class="jfheuf">-->
                <div class="box1">
                    <div class="d-flex skfjkk">
                        <div class="lkt40">
                            <img src='<?php echo base_url('assets/Images/' . $post_comment['pfp']); ?>' alt="">
                        </div>
                        <div class="pl-2 pt-1">
                            <h6>
                                <?php echo $post_comment['nickname']; ?>
                                <?php echo $post_comment['title'];?>
                            </h6>
                        </div>

                    </div>
                    <hr>
                    <p>
                        <?php echo $post_comment['comment']; ?>
                    </p>
                    <hr class="text-muted">
                    <div class="d-flex justify-content-around">
                        <div class="p-2 mr-auto">
                            <?php echo $post_item['total_like']; ?> 
                            <a style="text-decoration:none; color:black" href='<?php echo base_url('index.php/home/like/' . $post_item['vote_id']); ?>'>
                            <i class="fa fa-heart"></i>
                            Like
                            </a>
                        </div>

                    </div>
                </div>

            <?php endforeach; ?>

        </div>



        <div class="col-md-3">
            <div class="left_box">
                <span>
                    Keep in touch
                </span>
                <hr>
                <?php foreach ($phys as $post_item): ?>
                <div class="d-flex dfkj">
                    <div class="lkt40">
                        <img src='<?php echo base_url("assets/Images/". $post_item['pfp']); ?>' alt="">

                    </div>
                    <div>
                        <?php echo $post_item['title']?>
                    </div>
                </div>
                <hr>
                <?php endforeach; ?>                
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