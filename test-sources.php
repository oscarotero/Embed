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

	<body>
		<form action="test-sources.php" method="get">
			<fieldset>
				<label>Url to test: <input type="url" name="url" autofocus placeholder="http://" value="<?php echo isset($_GET['url']) ? $_GET['url'] : ''; ?>"></label>
				<button type="submit">Test</button>
			</fieldset>
		</form>

		<?php
		if (!empty($_GET['url'])): ?>
		<section>
			<?php

			$Url = new Embed\Url($_GET['url']);

			$Source = Embed\Embed::createSource($Url);
			?>

			<?php if (empty($Source)): ?>

			<p>The url is not valid!</p>
			
			<?php else: ?>

			<h1><a href="<?php echo $Source->providerUrl; ?>"><?php echo $Source->providerUrl; ?></a></h1>
			
			<a href="test.php?url=<?php echo $Source->providerUrl; ?>" target="_blank">Test</a><br>
			<a href="<?php echo $Source->sourceUrl; ?>" target="_blank">Source url</a>

			<ul>
				<?php foreach ($Source->items as $url): ?>
				<li>
					<a href="<?php echo $url['url']; ?>"><?php echo $url['url']; ?></a> | <a href="test.php?url=<?php echo urlencode($url['url']); ?>" target="_blank">Test</a><br>
					<time><?php echo $url['pubdate']; ?></time>
				</li>
				<?php endforeach ?>
			</ul>

			<?php endif; ?>
		</section>

		<table class="embed">
			<tr>
				<th>Content</th>
				<td>
					<pre><?php echo htmlspecialchars($Url->getContent(), ENT_IGNORE); ?></pre>
				</td>
			</tr>
		</table>
		
		<?php elseif (!empty($_FILES['opml']['tmp_name'])): ?>
		<section>
			<?php
			$string = file_get_contents($_FILES['opml']['tmp_name']);
			$feeds = Embed\Sources\Feed::createFromOPML($string);

			echo '<pre>';
			var_dump($feeds);
			echo '</pre>';
			?>
		</section>
		<?php endif; ?>

	</body>
</html>
