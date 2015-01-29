<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

include '../src/autoloader.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">

        <title>Embed tests</title>

        <style type="text/css">
            body {
                font-family: sans-serif;
                min-width: 650px;
            }
            input[type="url"] {
                width: 400px;
                width: calc(100% - 220px);
            }
            input[type="text"] {
                width: 400px;
            }
            input[type="number"] {
                width: 50px;
            }
            input[type="url"], input[type="number"], input[type="text"] {
                border: none;
                background: white;
                padding: 4px;
                border-radius: 2px;
            }
            fieldset.main {
                font-weight: bold;
                background: #BBB;
                border-bottom: solid 1px #999;
                border-radius: 2px 2px 0 0;
            }
            fieldset.options {
                font-size: 0.9em;
                border-bottom: solid 1px #CCC;
            }
            fieldset.options label:hover {
                background: #DDD;
            }
            fieldset {
                border: none;
                background: #EEE;
            }
            fieldset h2 {
                font-size: 1.2em;
                margin-left: 6px;
            }
            fieldset label {
                display: block;
                margin-top: 5px;
                padding: 3px 6px;
                border-radius: 2px;
                cursor: pointer;
            }
            fieldset label span {
                display: inline-block;
                width: 200px;
            }
            a {
                color: #999;
                font-size: 0.9em;
            }
            a:hover {
                color: black;
                text-decoration: none;
            }
            table a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
            }
            button[type="submit"] {
                font-size: 1.6rem;
                font-weight: bold;
                font-family: Arial;
                background: yellowgreen;
                border: none;
                border-radius: 2px;
                padding: 0.2em 1em;
                cursor: pointer;
                margin-top: 5px;
            }
            button[type="submit"]:hover {
                background: black;
                color: white;
            }
            img {
                border: solid 1px black;
            }
            table.embed {
                width: 100%;
                margin-top: 100px;
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
    function getOption($name, $default = null)
    {
        return htmlspecialchars(isset($_GET['options'][$name]) ? $_GET['options'][$name] : $default, ENT_QUOTES, 'UTF-8');
    }
    ?>

    <body>
        <form action="index.php">
            <fieldset class="main">
                <label><span>Url to test:</span> <input type="url" name="url" autofocus placeholder="http://" value="<?php echo isset($_GET['url']) ? $_GET['url'] : ''; ?>"></label>
            </fieldset>
            <fieldset class="options">
                <h2>Info options</h2>

                <label><span>minImageWidth:</span> <input type="number" name="options[minImageWidth]" value="<?php echo getOption('minImageWidth', 16); ?>"></label>
                <label><span>minImageHeight:</span> <input type="number" name="options[minImageHeight]" value="<?php echo getOption('minImageHeight', 16); ?>"></label>
                <label><span>getBiggerImage</span> <input type="checkbox" name="options[getBiggerImage]" value="1" <?php echo getOption('getBiggerImage') ? 'checked' : ''; ?>></label>
                <label><span>getBiggerIcon</span> <input type="checkbox" name="options[getBiggerIcon]" value="1" <?php echo getOption('getBiggerIcon') ? 'checked' : ''; ?>></label>
                <label><span>facebookAccessToken:</span> <input type="text" name="options[facebookAccessToken]" value="<?php echo getOption('facebookAccessToken'); ?>"></label>
                <label><span>embedlyKey:</span> <input type="text" name="options[embedlyKey]" value="<?php echo getOption('embedlyKey'); ?>"></label>
                <label><span>soundcloudClientId:</span> <input type="text" name="options[soundcloudClientId]" value="<?php echo getOption('soundcloudClientId', 'YOUR_CLIENT_ID'); ?>"></label>
                <label><span>facebookProvider</span> <input type="checkbox" name="options[facebookProvider]" value="1" <?php echo getOption('facebookProvider') ? 'checked' : ''; ?>></label>
                <label><span>oembedParameters (in json format):</span> <input type="text" name="options[oembedParameters]" value="<?php echo getOption('oembedParameters'); ?>"></label>
            </fieldset>
            <fieldset class="action">
                <button type="submit">Test</button>
                &nbsp;&nbsp;&nbsp;
                <a href="https://github.com/oscarotero/Embed/">Get the source code from Github</a>
                &nbsp;&nbsp; - &nbsp;&nbsp;
                <a href="javascript:(function(){window.open('http://oscarotero.com/embed/demo/index.php?url='+document.location)})();">or the bookmarklet</a>
            </fieldset>
        </form>

        <?php if (!empty($_GET['url'])): ?>
        <section>
            <?php
            $options = isset($_GET['options']) ? (array) $_GET['options'] : array();

            if (isset($options['oembedParameters'])) {
                $options['oembedParameters'] = $options['oembedParameters'] ? json_decode($options['oembedParameters'], true) : array();
            }

            $info = Embed\Embed::create($_GET['url'], $options);
            ?>

            <?php if (empty($info)): ?>

            <p>The url is not valid!</p>

            <?php else: ?>

            <table class="embed">
                <tr>
                    <th>title</th>
                    <td><?php echo $info->title; ?></td>
                </tr>
                <tr>
                    <th>description</th>
                    <td><?php echo $info->description; ?></td>
                </tr>
                <tr>
                    <th>image</th>
                    <td>
                        <?php if ($info->image): ?>
                        <img src="<?php echo $info->image; ?>"><br>
                        <a href="<?php echo $info->image; ?>" target="_blank"><?php echo $info->image; ?></a>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>imageWidth</th>
                    <td><?php echo $info->imageWidth; ?></td>
                </tr>
                <tr>
                    <th>imageHeight</th>
                    <td><?php echo $info->imageHeight; ?></td>
                </tr>
                <tr>
                    <th>images</th>
                    <td><pre><?php print_r($info->images); ?></pre></td>
                </tr>
                <tr>
                    <th>code</th>
                    <td>
                        <?php echo $info->code; ?>
                        <pre><?php echo htmlspecialchars($info->code, ENT_IGNORE); ?></pre>
                    </td>
                </tr>
                <tr>
                    <th>url</th>
                    <td><a href="<?php echo $info->url; ?>" target="_blank"><?php echo $info->url; ?></a></td>
                </tr>
                <tr>
                    <th>type</th>
                    <td><?php echo $info->type; ?></td>
                </tr>
                <tr>
                    <th>source</th>
                    <td><?php
                        if ($info->source) {
                            echo '<a href="'.$info->source.'" target="_blank">'.$info->source.'</a>';
                            echo ' / <a href="sources.php?url='.urlencode($info->source).'" target="_blank">Test</a>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>authorName</th>
                    <td><?php echo $info->authorName; ?></td>
                </tr>
                <tr>
                    <th>authorUrl</th>
                    <td><a href="<?php echo $info->authorUrl; ?>" target="_blank"><?php echo $info->authorUrl; ?></a>
                </tr>
                <tr>
                    <th>providerIcon</th>
                    <td>
                        <?php if ($info->providerIcon): ?>
                        <img src="<?php echo $info->providerIcon; ?>"><br>
                        <a href="<?php echo $info->providerIcon; ?>" target="_blank"><?php echo $info->providerIcon; ?></a>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>providerIcons</th>
                    <td><pre><?php print_r($info->providerIcons); ?></pre></td>
                </tr>
                <tr>
                    <th>providerName</th>
                    <td><?php echo $info->providerName; ?></td>
                </tr>
                <tr>
                    <th>providerUrl</th>
                    <td><a href="<?php echo $info->providerUrl; ?>" target="_blank"><?php echo $info->providerUrl; ?></a>
                </tr>
                <tr>
                    <th>width</th>
                    <td><?php echo $info->width; ?></td>
                </tr>
                <tr>
                    <th>height</th>
                    <td><?php echo $info->height; ?></td>
                </tr>
                <tr>
                    <th>aspectRatio</th>
                    <td><?php echo $info->aspectRatio; ?></td>
                </tr>
                <tr>
                    <th>publishedTime</th>
                    <td><?php echo $info->publishedTime; ?></td>
                </tr>
                <tr>
                    <th>Http request info</th>
                    <td>
                        <ul>
                        <?php
                        foreach ($info->request->getRequestInfo() as $name => $value) {
                            if (is_array($value)) {
                                $value = print_r($value, true);
                            }
                            echo "<li><strong>$name:</strong> $value</li>";
                        }
                        ?>
                        </ul>
                    </td>
                </tr>
                <?php foreach ($info->getAllProviders() as $name => $provider) {
    $content = htmlspecialchars(print_r($provider->bag->getAll(), true), ENT_IGNORE);
    echo '<tr><th>'.$name.'</th><td><pre>'.$content.'</pre></td></tr>';
}
                ?>
                <tr>
                    <th>Content</th>
                    <td>
                        <pre><?php echo htmlspecialchars($info->request->getContent(), ENT_IGNORE); ?></pre>
                    </td>
                </tr>
            </table>

            <?php endif; ?>

        </section>

        <?php endif; ?>

    </body>
</html>
