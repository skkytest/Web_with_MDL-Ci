<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/styles.css">
        <title>Log In</title>
    </head>
    <body>

        <h1>Please log in</h1>
        <br />

        <?php echo validation_errors(); ?>

		<?php echo form_open('form'); ?>

			Username: <input type="text" name="username" value="<?php echo set_value('username'); ?>" /><br />
			Password: <input type="password" name="password" value="<?php echo set_value('password'); ?>" /><br />
			<br />
			<input type="submit" name="submit" value="Submit" />
			
		</form>

        <em>&copy; 2015</em>
    </body>
</html>

