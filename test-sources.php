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

			$Source = new Embed\Sources\Feed($Url);
			?>

			<ul>
				<?php foreach ($Source->getUrls() as $url): ?>
				<li><a href="<?php echo $url; ?>"><?php echo $url; ?></a></li>
				<?php endforeach ?>
			</ul>
		</section>
		<?php endif; ?>

	</body>
</html>
