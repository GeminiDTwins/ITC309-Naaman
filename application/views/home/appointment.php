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
                    <a href="<?php echo base_url('profile'); ?>"
                       class="font-weight-bold text-decoration-none text-center">
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
                    <a href="<?php echo base_url('home/Appointment'); ?>" class="font-weight-bold text-decoration-none text-center">
                        Make Appointment
                    </a>
                </div>
            </div>
        </div>


        <div class="col-md-7">
            <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                    <div class="row" style="padding: 20px">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Patient Name</th>
                                    <th scope="col">Physician Name</th>
                                    <th scope="col">Booking Date</th>
                                    <th scope="col">Consultation Date</th>
                                    <th scope="col">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                </tr>
                                <?php
                                if (isset($appointments)):

                                    foreach ($appointments as $row) {
                                        ?>
                                        <tr>
                                            <td scope="row"><?php echo $row->oa_id; ?></td>
                                            <td><?php echo $row->patient_name; ?></td>
                                            <td><?php echo $row->physician_name; ?></td>
                                            <td><?php echo $row->booking_date; ?></td>
                                            <td><?php echo $row->consultation_date; ?></td>
                                            <td><?php echo str_replace(".000000", "", $row->time) ?></td>
                                        </tr>
                                        <?php
                                    }
                                endif;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </li>
            </ul>

            <div class="jfheuf">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                        <div class="row">
                            <?php
                            if ($this->session->flashdata('error')) {

                                echo '<div class="alert alert-danger">'
                                . $this->session->flashdata('error') . '</div>';
                                $this->session->set_flashdata('error', "");
                            } else if ($this->session->flashdata('success')) {

                                echo '<div class="alert alert-success">'
                                . $this->session->flashdata('success') . '</div>';
                                $this->session->set_flashdata('success', "");
                            }
                            ?>
                            <div class="col">
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <?php
                                        echo form_open('home/addAppointment');
                                        ?>
                                        <div class="form-row">
                                            <div class="form-group">

                                                <div class="form-group">
                                                    <label for="physician">Physician</label>
                                                    <select class="form-control" name="physician" id="physician">
                                                        <?php
                                                        if (isset($physicians)):
                                                            foreach ($physicians as $row) {
                                                                $name = $row->title . " " . $row->f_name . " " . $row->l_name;
                                                                ?>
                                                                <option value="<?php echo $row->physician_id ?>" <?php
                                                                ?>
                                                                        ><?php echo $name ?></option>
                                                                    <?php
                                                                    }
                                                                endif;
                                                                ?>
                                                    </select>
                                                </div>
                                                <span><?php echo form_error('physician') ?></span>

                                                <div class="form-group">
                                                    <label for="cdate">Consultation Date</label>
                                                    <input name="cdate" type="date" class="form-control" id="cdate"
                                                           value="<?php echo $appointment['cdate'] ?? '' ?>"></div>
                                                <span><?php echo form_error('cdate') ?></span>
                                                <div class="form-group">
                                                    <label for="ctime">Consultation Time</label>
                                                    <input name="ctime" type="time" class="form-control" id="ctime"
                                                           value="<?php echo $appointment['ctime'] ?? '' ?>"></div>
                                                <span><?php echo form_error('ctime') ?></span>

                                            </div>
                                            <button type="submit" class="btn btn-success">Add Appointment</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </li>
                </ul>
            </div>
        </div>


        <div class="col-md-3 sfjhe">
            <div class="right_box">
                <span>
                    Keep in touch
                </span>
                <hr>
                        <?php foreach ($user as $post_item): ?>
                    <div class="d-flex dfkj">
                        <div class="lkt40">
                            <img src='<?php echo base_url("assets/Images/" . $post_item['pfp']); ?>' alt="" style="border-radius: 50%; width: 30px; height:30px">

                        </div>
                        <div>
    <?php echo $post_item['title'] ?>
                        </div>
                    </div>
                    <hr>
<?php endforeach; ?>
            </div>

            <div class="left_box mt-3">
                <span class="font-weight-medium">
                    Article
                </span>
                <hr>
                <a href=""> Link 1</a>
                <hr>
                <a href=""> Link 1</a>
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
