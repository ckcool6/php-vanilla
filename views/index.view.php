<?php require 'partials/head.php'; ?>
<br/>
<br/>
<br/>

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

<br/>
<div class="submit">
	<p>submit your todos:</p>
	<form action="/test/names" method="POST">
		<input type="text" name="name">
		<button type="submit">submit</button>
	</form>
</div>

<?php require 'partials/foot.php'; ?>