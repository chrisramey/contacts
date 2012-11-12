<form action="actions/add_contact.php" method="post" class="form-horizontal">
	<div class="control-group">
		<label class="control-label" for="first_name">Name</label>
		<div class="controls">
			<input class="span2" type="text" name="first_name" placeholder="first" />
			<input class="span2" type="text" name="last_name" placeholder="last" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="email">Email</label>
		<div class="controls">
			<input class="span4" type="text" name="email" placeholder="you@example.com" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="phone">Phone</label>
		<div class="controls">
			<input class="span4" type="text" name="phone" placeholder="xxxxxxxxxx" />
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-success">Add</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>
</form>