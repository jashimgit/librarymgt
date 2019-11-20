<div class="content">
    <div class="main-content">
        <H2>Add Student</h2>
        <hr />

        <div class="panel-body" style="width:600px;">

            <form action="<?php echo base_url('student/create'); ?>" method="post">
                <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" name='s_name' class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Department</label>
                    <input type="text" name="s_dept" class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Roll No.</label>
                    <input type="text" name="s_roll" class=" form-control span12">
                </div>
                <div class="form-group">
                    <label>Reg. No.</label>
                    <input type="text" name="s_reg" class=" form-control span12">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>

            </form>
        </div>
    </div>
</div>