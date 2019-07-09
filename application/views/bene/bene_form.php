<h2 class="mb-3 mt-3"><?= $title ?> </h2>

<div class="container">

<?php echo form_open(); ?>

<form action="welcome.php" method="post">
	Name: <input type="text" name="name"><br>
	E-mail: <input type="text" name="email"><br>
<button type="submit"></button>
</form>

<?php echo form_close() ?>
</div>
