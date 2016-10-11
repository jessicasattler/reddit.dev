<!DOCTYPE html>
<html>
<head>
	<title>Roll Dice</title>
</head>
<body>
	<h1>Roll Dice Game</h1>
	<p>Dice Roll: <?= $dice_roll; ?></p>
	<p>Guess: <?= $guess; ?></p>
	<?php if ($guess == $dice_roll): ?>
		<p>You guessed correctly</p>
	<?php endif ?>

</body>
</html>