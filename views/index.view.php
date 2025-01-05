<?php require 'partials/head.php'; ?>

<div>
	<h1>submit your name</h1>

	<form action="/test/names" method="POST">
		<input type="text" name="name">
		<button type="submit">submit</button>
	</form>
</div>

<ul>
	<?php foreach ($tasks as $task): ?>
		<li>
			<?php if ($task->completed): ?>
				<strike><?= $task->description ?></strike>
			<?php else: ?>
				<?= $task->description ?>
			<?php endif ?>
		</li>
	<?php endforeach ?>
</ul>

<?php require 'partials/foot.php'; ?>