<div class="content">
    <div class="main-content">
        <H2><?php echo $title; ?></h2>
        <hr />
       

        <div class="panel-body" style="width:600px;">

            <form action="<?php echo base_url('book/save') ?>" method="post" id="saveBook">

                <div class="form-group">
                    <label>Book Name</label>
                    <input type="text" id="b_name" name='b_name' class="form-control span12">
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>


            </form>
        </div>
    </div>
</div>