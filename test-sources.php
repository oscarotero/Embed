<?php include('Embed/autoloader.php'); ?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		
		<title>Sources tests</title>
		<style type="text/css">
			body {
				font-family: sans-serif;
			}
			input {
				width: 400px;
			}
			fieldset {
				border: none;
				background: #DDD;
				font-weight: bold;
			}
			img {
				border: solid 1px black;
			}
		</style>
	</head>

	<body>
		<form action="test-sources.php">
			<fieldset>
				<label>Url to test: <input type="url" name="url" autofocus placeholder="http://"></label>
				<button type="submit">Test</button>
			</fieldset>
		</form>

		<?php if (!empty($_GET['url'])): ?>
		<section>
			<?php
			$Url = new Embed\Url($_GET['url']);

			$Source = Embed\Embed::createSource($Url);
			?>

			<?php if (empty($Source)): ?>

			<p>The url is not valid!</p>
			
			<?php else: ?>

			<h1><a href="<?php echo $Source->url; ?>"><?php echo $Source->url; ?></a></h1>
			
			<a href="test.php?url=<?php echo $Source->url; ?>" target="_blank">Test</a>

			<ul>
				<?php foreach ($Source->urls as $url): ?>
				<li><a href="<?php echo $url; ?>"><?php echo $url; ?></a></li>
				<?php endforeach ?>
			</ul>

			<?php endif; ?>
		</section>
		<?php endif; ?>

	</body>
</html>
