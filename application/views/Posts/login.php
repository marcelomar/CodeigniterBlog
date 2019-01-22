
<div class="form-style-6">
<h1>Login</h1>
<?php //echo validation_errors(); ?>
<?php echo form_open('auth/form_Checking'); ?>

<input type="text" name="email" placeholder="Email Address"/>
<?php echo form_error('email'); ?><br/>

<input type="password" name="password" placeholder="Your password" />
<?php echo form_error('password'); ?><br/>

<input type="submit" name="send" value="Send" /><br>
</form>
<?php echo $this->session->flashdata('msg'); ?>
</div>
