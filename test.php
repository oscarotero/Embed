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
			table.embed {
				width: 100%;
			}
			table.embed > tr > th,
			table.embed > tr > td {
				padding-top: 5px;
				padding-bottom: 5px;
				border-top: solid 1px #CCC;
				vertical-align: top;
			}
			table.embed > tr > th {
				text-align: right;
			}
			table.embed > tr > td {
				padding-left: 20px;
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
			<?php
			$Url = new Embed\Url($_GET['url']);

			$Service = Embed\Embed::create($Url);
			?>

			<?php if (empty($Service)): ?>

			<p>The url is not valid!</p>
			
			<?php else: ?>

			<table class="embed">
				<tr>
					<th>Title</th>
					<td><?php echo $Service->title; ?></td>
				</tr>
				<tr>
					<th>Description</th>
					<td><?php echo $Service->description; ?></td>
				</tr>
				<tr>
					<th>Image</th>
					<td><img src="<?php echo $Service->image; ?>"> <?php echo $Service->image; ?></td>
				</tr>
				<tr>
					<th>Embed code</th>
					<td><?php echo $Service->code; ?></td>
				</tr>
				<tr>
					<th>Url</th>
					<td><?php echo $Service->url; ?></td>
				</tr>
				<tr>
					<th>Type</th>
					<td><?php echo $Service->type; ?></td>
				</tr>
				<tr>
					<th>Author name</th>
					<td><?php echo $Service->authorName; ?></td>
				</tr>
				<tr>
					<th>Author url</th>
					<td><?php echo $Service->authorUrl; ?></td>
				</tr>
				<tr>
					<th>Provider icon</th>
					<td><img src="<?php echo $Service->providerIcon; ?>"> <?php echo $Service->providerIcon; ?></td>
				</tr>
				<tr>
					<th>Provider name</th>
					<td><?php echo $Service->providerName; ?></td>
				</tr>
				<tr>
					<th>Provider url</th>
					<td><?php echo $Service->providerUrl; ?></td>
				</tr>
				<tr>
					<th>Width</th>
					<td><?php echo $Service->width; ?></td>
				</tr>
				<tr>
					<th>Height</th>
					<td><?php echo $Service->height; ?></td>
				</tr>
				<tr>
					<th>Aspect ratio</th>
					<td><?php echo $Service->aspectRatio; ?></td>
				</tr>
				<tr>
					<th>Http request result</th>
					<td>
						<ul>
						<?php
						foreach ($Url->getResult() as $name => $value) {
							if (is_array($value)) {
								$value = print_r($value, true);
							}
							echo "<li><strong>$name:</strong> $value</li>";
						}
						?>
						</ul>
					</td>
				</tr>
				<?php foreach ($Service as $name => $Provider) {
					if (is_object($Provider) && strpos(get_class($Provider), 'Embed\\Provider') === 0) {
						$content = htmlspecialchars(print_r($Provider, true), ENT_IGNORE);

						echo '<tr><th>'.$name.'</th><td><pre>'.$content.'</pre></td></tr>';
					}
				}
				?>
				<tr>
					<th>Content</th>
					<td>
						<pre><?php echo htmlspecialchars($Url->getContent(), ENT_IGNORE); ?></pre>
					</td>
				</tr>
			</table>

			<?php endif; ?>

		</section>
		
		<?php endif; ?>

	</body>
</html>
