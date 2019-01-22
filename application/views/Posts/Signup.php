<div class="form-style-6">
<h1>Sign up</h1>
<?php //echo validation_errors(); ?>
<?php echo form_open('auth/signup'); ?>
<input type="text" name="fname" placeholder="First Name"/>
<?php echo form_error('fname'); ?><br/>

<input type="text" name="lname" placeholder="Last Name" />
<?php echo form_error('lname'); ?><br/>

<input type="text" name="email" placeholder="Email Address"/>
<?php echo form_error('email'); ?><br/>

<input type="password" name="password" placeholder="Your password" />
<?php echo form_error('password'); ?><br/>

<input type="password" name="confpw" placeholder="Confirm your password" />
<?php echo form_error('confpw'); ?><br/>
<input type="submit" value="Send" /><br>
</form>
</div>
