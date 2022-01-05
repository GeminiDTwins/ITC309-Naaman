<div class="container jsjhr">
<div class="row skfjh">
    
    <div class="col-md-2 sfjhe">
        <div class=" sjfsj">
            <img src='<?php echo base_url("assets/Images/sample.jpg"); ?>' alt="">
            <h5 class="text-center pt-3">
                Dehemi Vihara
            </h5>
            <p class="text-muted text-center">
                Software Engineer
                200 Followers
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
    <div class="jfheuf">
    <div class="d-flex justify-content-around">
        <div>
            <h6><i class="fas fa-edit text-primary pr-1"></i>Share an update</h6>
        </div>
        <div>
            <h6>
                <i class="fas fa-arrow-up text-success pr-1"></i>   upload a photo
            </h6>
        </div>
        <div>
            <h6>
                <i class="fas fa-book-open text-info pr-1"></i> write an article
            </h6>
        </div>
    </div>
<hr>
<textarea name="" id="" cols="3" rows="3" class="form-control" placeholder="Write Something...." ></textarea>
</div>
<!-- -->
<?php foreach ($posts as $post_item): ?>
<div class="box1">
    <div class="d-flex skfjkk">
        <div class="lkt40">
            <img src='<?php echo base_url("assets/Images/sample.jpg"); ?>' alt="">

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

<?php endforeach; ?>
<!-- -->

</div>
<div class="col-md-3">
<div class="left_box">
<span>
    Keep in touch
</span>
<hr>
<div class="d-flex dfkj">
    <div class="lkt40">
    <img src='<?php echo base_url("assets/Images/sample.jpg"); ?>' alt="">

    </div>
    <div>
        Tayy_Eb Chaudhary
    </div>
</div>
<hr>
<div class="d-flex dfkj">
    <div class="lkt40">
    <img src='<?php echo base_url("assets/Images/2.jpg"); ?>' alt="">

    </div>
    <div>
        Danial Ahmed
    </div>
</div>
<hr>
<div class="d-flex dfkj">
    <div class="lkt40">
    <img src='<?php echo base_url("assets/Images/3.jpeg"); ?>' alt="">

    </div>
    <div>
        Usman Khan
    </div>
</div>
<hr>
<div class="d-flex dfkj">
    <div class="lkt40">
    <img src='<?php echo base_url("assets/Images/4.jpg"); ?>' alt="">

    </div>
    <div>
        Waqar Ali
    </div>
</div>
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