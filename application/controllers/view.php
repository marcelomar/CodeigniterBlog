<div class="panel panel-default">
    <div class="panel-body">
        <?php echo form_open_multipart('add_new_category/do_upload');?>
        <center>
        <?php if (validation_errors()): ?>

            <div class="alert alert-danger alert-dismissible" role="alert" style="width: 700px;">
                <?php echo validation_errors(); ?>
            </div>
        <?php endif ?>


        <div class="form-group">
            <label class="col-sm-2 control-label" style=" color: white"></label>

            <label class="col-sm-2 control-label">Category Image</label>
            <div class="col-sm-5">
                <input type="file" class="form-control" placeholder="" name="userfile">
            </div>

        </div>
        <br> <br> <br>
        <div class="form-group">
            <label class="col-sm-2 control-label" style=" color: white"></label>

            <label class="col-sm-2 control-label">Category Name</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" placeholder="ex. coffee"
                name="name"
                value="<?php echo set_value('name'); ?>">
            </div>

        </div>
