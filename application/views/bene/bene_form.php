<h2 class="mb-3 mt-3"> Test </h2>

<div class="container">

<?php echo form_open(); ?>

<form action="welcome.php" method="post">
	Name: <input type="text" name="name"><br>
	E-mail: <input type="text" name="email"><br>
<button type="submit"></button>
</form>

<table class="table table-bordered">
	<thead class="table-info">
		<tr>
			<th>Name</th>
			<th>Category</th>
			<th>Exp. Date</th>
			<th>Total Quantity</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($item_list as $item): ?>
		<tr>
			<td><?php echo $item['il_name'] ?></td>
			<td><?php echo $item['il_category'] ?></td>
			<td><?php echo $item['il_exp_date'] ?></td>
			<td><?php echo $item['il_total_quantity'] ?></td>
			<td>
				<input type="checkbox" name="check" id="">
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>

</table>


<?php echo form_close() ?>
</div>
