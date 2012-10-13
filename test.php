<?php
function autoload ($className) {
	$className = ltrim($className, '\\');
	$fileName  = '';
	$namespace = '';
	
	if ($lastNsPos = strripos($className, '\\')) {
		$namespace = substr($className, 0, $lastNsPos);
		$className = substr($className, $lastNsPos + 1);
		$fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
	}

	$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

	if (is_file($fileName)) {
		require $fileName;
	}
}

spl_autoload_register('autoload');
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		
		<title>Embed tests</title>
		<style type="text/css">
			body {
				font-family: sans-serif;
			}
			th {
				text-align: right;
			}
			td {
				padding-left: 20px;
			}
			th, td {
				padding-top: 5px;
				padding-bottom: 5px;
				border-top: solid 1px #CCC;
			}
			input {
				width: 400px;
			}
			fieldset {
				border: none;
				background: #DDD;
				font-weight: bold;
			}
		</style>
	</head>

	<body>
		<form action="test.php">
			<fieldset>
				<label>Url to test: <input type="url" name="url" autofocus placeholder="http://"></label>
				<button type="submit">Test</button>
			</fieldset>
		</form>

		<?php if (!empty($_GET['url'])): ?>
		<section>
			<?php $Service = Embed\Embed::create($_GET['url']); ?>

			<?php if ($Service === false): ?>

			<p>The url is not valid!</p>
			
			<?php else: ?>

			<table>
				<tr>
					<th>Title</th>
					<td><?php echo $Service->getTitle(); ?></td>
				</tr>
				<tr>
					<th>Description</th>
					<td><?php echo $Service->getDescription(); ?></td>
				</tr>
				<tr>
					<th>Image</th>
					<td><img src="<?php echo $Service->getImage(); ?>"></td>
				</tr>
				<tr>
					<th>Embed code</th>
					<td><?php echo $Service->getEmbedCode(); ?></td>
				</tr>
				<tr>
					<th>Url</th>
					<td><?php echo $Service->getUrl(); ?></td>
				</tr>
				<tr>
					<th>Type</th>
					<td><?php echo $Service->getType(); ?></td>
				</tr>
				<tr>
					<th>Author name</th>
					<td><?php echo $Service->getAuthorName(); ?></td>
				</tr>
				<tr>
					<th>Author url</th>
					<td><?php echo $Service->getAuthorUrl(); ?></td>
				</tr>
				<tr>
					<th>Provider name</th>
					<td><?php echo $Service->getProviderName(); ?></td>
				</tr>
				<tr>
					<th>Provider url</th>
					<td><?php echo $Service->getProviderUrl(); ?></td>
				</tr>
				<tr>
					<th>Width</th>
					<td><?php echo $Service->getWidth(); ?></td>
				</tr>
				<tr>
					<th>Height</th>
					<td><?php echo $Service->getHeight(); ?></td>
				</tr>
				<tr>
					<th>Aspect ratio</th>
					<td><?php echo $Service->getAspectRatio(); ?></td>
				</tr>
				<tr>
					<th>Object</th>
					<td><pre><?php echo htmlspecialchars(print_r($Service, true)); ?></pre></td>
				</tr>
			</table>

			<?php endif; ?>

		</section>
		
		<?php endif; ?>

	</body>
</html>
