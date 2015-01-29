<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

include '../src/autoloader.php';
?>

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
        <form action="sources.php" method="get">
            <fieldset>
                <label>Url to test: <input type="url" name="url" autofocus placeholder="http://" value="<?php echo isset($_GET['url']) ? $_GET['url'] : ''; ?>"></label>
                <button type="submit">Test</button>
            </fieldset>
        </form>

        <?php
        if (!empty($_GET['url'])): ?>
        <section>
            <?php
            $source = Embed\Embed::createSource($_GET['url']);
            ?>

            <?php if (empty($source)): ?>

            <p>The url is not valid!</p>

            <?php else: ?>

            <h1><a href="<?php echo $source->providerUrl; ?>"><?php echo $source->providerUrl; ?></a></h1>

            <a href="index.php?url=<?php echo $source->providerUrl; ?>">Test</a><br>
            <a href="<?php echo $source->sourceUrl; ?>">Source url</a>

            <ul>
                <?php foreach ($source->items as $url): ?>
                <li>
                    <a href="<?php echo $url['url']; ?>"><?php echo $url['url']; ?></a> | <a href="index.php?url=<?php echo urlencode($url['url']); ?>">Test</a><br>
                    <?php if ($url['originUrl']): ?>
                    <a href="<?php echo $url['originUrl']; ?>"><?php echo $url['originUrl']; ?></a> | <a href="index.php?url=<?php echo urlencode($url['originUrl']); ?>">Test origin Url</a><br>
                    <?php endif; ?>
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
                    <pre><?php echo htmlspecialchars($source->request->getContent(), ENT_IGNORE); ?></pre>
                </td>
            </tr>
        </table>
        <?php endif; ?>

    </body>
</html>
