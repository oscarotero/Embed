<?php include('Embed/autoloader.php'); ?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		
		<title>Embed tests</title>
		<style type="text/css">
			body {
				font-family: sans-serif;
			}
			input[type="url"] {
				width: 400px;
			}
			input[type="number"] {
				width: 50px;
			}
			fieldset.main {
				border: none;
				background: #DDD;
				font-weight: bold;
			}
			fieldset.options {
				border: none;
				background: #DDD;
				font-size: 0.9em;
			}
			img {
				border: solid 1px black;
			}
			table.embed {
				width: 100%;
			}
			table.embed th,
			table.embed td {
				padding-top: 5px;
				padding-bottom: 5px;
				border-top: solid 1px #CCC;
				vertical-align: top;
			}
			table.embed th {
				text-align: right;
			}
			table.embed td {
				padding-left: 20px;
			}

		</style>
	</head>

	<?php 
	function getOption ($name, $default = null) {
		return isset($_GET['options'][$name]) ? $_GET['options'][$name] : $default;
	}
	?>

	<body>
		<form action="test.php">
			<fieldset class="main">
				<label>Url to test: <input type="url" name="url" autofocus placeholder="http://" value="<?php echo isset($_GET['url']) ? $_GET['url'] : ''; ?>"></label>
				<button type="submit">Test</button>
			</fieldset>
			<fieldset class="options">
				<label>Min image width: <input type="number" name="options[minImageWidth]" value="<?php echo getOption('minImageWidth', 0); ?>"></label>
				<label>Min image height: <input type="number" name="options[minImageHeight]" value="<?php echo getOption('minImageHeight', 0); ?>"></label>
				<p>
					<label><input type="checkbox" name="options[getBiggerImage]" value="1" <?php echo getOption('getBiggerImage') ? 'checked' : ''; ?>> Get bigger image</label>
					<label><input type="checkbox" name="options[getBiggerIcon]" value="1" <?php echo getOption('getBiggerIcon') ? 'checked' : ''; ?>> Get bigger icon</label>
				</p>
				<p>
				<label>Facebook access token: <input type="text" name="options[facebookAccessToken]" value="<?php echo getOption('facebookAccessToken'); ?>"></label><br>
				<label>Soundcloud client id: <input type="text" name="options[soundcloudClientId]" value="<?php echo getOption('soundcloudClientId', 'YOUR_CLIENT_ID'); ?>"></label>
				</p>
			</fieldset>
		</form>

		<?php if (!empty($_GET['url'])): ?>
		<section>
			<?php
			$Url = new Embed\Url($_GET['url']);

			$options = isset($_GET['options']) ? (array)$_GET['options'] : array();

			$Service = Embed\Embed::create($Url, $options);
			?>

			<?php if (empty($Service)): ?>

			<p>The url is not valid!</p>
			
			<table class="embed">
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
			</table>
			
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
					<th>Image size</th>
					<td><?php echo $Service->imageWidth.' x '.$Service->imageHeight; ?></td>
				</tr>
				<tr>
					<th>All images</th>
					<td><pre><?php print_r($Service->images); ?></pre></td>
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
					<th>Source</th>
					<td><?php
						if ($Service->source) {
							echo $Service->source;
							echo ' / <a href="test-sources.php?url='.urlencode($Service->source).'" target="_blank">Test</a>';
						}
						?>
					</td>
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
					<th>All icons</th>
					<td><pre><?php print_r($Service->providerIcons); ?></pre></td>
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
				<?php foreach ($Service->providers as $name => $Provider) {
					$content = htmlspecialchars(print_r($Provider, true), ENT_IGNORE);
					echo '<tr><th>'.$name.'</th><td><pre>'.$content.'</pre></td></tr>';
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
