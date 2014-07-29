<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

include('../Embed/autoloader.php');
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
    function getResolverOption($name, $default = null)
    {
        return isset($_GET['resolver'][$name]) ? $_GET['resolver'][$name] : $default;
    }
    ?>

    <body>
        <form action="index.php">
            <fieldset class="main">
                <label><span>Url to test:</span> <input type="url" name="url" autofocus placeholder="http://" value="<?php echo isset($_GET['url']) ? $_GET['url'] : ''; ?>"></label>
            </fieldset>
            <fieldset class="options">
                <h2>Info options</h2>

                <label><span>Min image width:</span> <input type="number" name="options[minImageWidth]" value="<?php echo getOption('minImageWidth', 0); ?>"></label>
                <label><span>Min image height:</span> <input type="number" name="options[minImageHeight]" value="<?php echo getOption('minImageHeight', 0); ?>"></label>
                <label><span>Get bigger image</span> <input type="checkbox" name="options[getBiggerImage]" value="1" <?php echo getOption('getBiggerImage') ? 'checked' : ''; ?>></label>
                <label><span>Get bigger icon</span> <input type="checkbox" name="options[getBiggerIcon]" value="1" <?php echo getOption('getBiggerIcon') ? 'checked' : ''; ?>></label>
                <label><span>Facebook access token:</span> <input type="text" name="options[facebookAccessToken]" value="<?php echo getOption('facebookAccessToken'); ?>"></label>
                <label><span>Embedly key:</span> <input type="text" name="options[embedlyKey]" value="<?php echo getOption('embedlyKey'); ?>"></label>
                <label><span>Soundcloud client id:</span> <input type="text" name="options[soundcloudClientId]" value="<?php echo getOption('soundcloudClientId', 'YOUR_CLIENT_ID'); ?>"></label>
                <label><span>Ignore facebook provider</span> <input type="checkbox" name="options[ignoreFacebookProvider]" value="1" <?php echo getOption('ignoreFacebookProvider') ? 'checked' : ''; ?>></label>
                <label><span>oEmbed extra Parameters (in json format):</span> <input type="text" name="options[oembedParameters]" value="<?php echo getOption('oembedParameters'); ?>"></label>
            </fieldset>
            <fieldset class="options">
                <h2>Request resolver options:</h2>

                <label><span>User agent:</span> <input type="text" name="resolver[user_agent]" value="<?php echo getResolverOption('user_agent', 'Embed PHP Library'); ?>"></label>
                <label><span>Max redirections:</span> <input type="number" name="resolver[max_redirections]" value="<?php echo getResolverOption('max_redirections', 20); ?>"></label>
                <label><span>Connection timeout:</span> <input type="number" name="resolver[connection_timeout]" value="<?php echo getResolverOption('connection_timeout', 10); ?>"></label>
                <label><span>Timeout:</span> <input type="number" name="resolver[timeout]" value="<?php echo getResolverOption('timeout', 10); ?>"></label>
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

            $resolverOptions = isset($_GET['resolver']) ? (array) $_GET['resolver'] : array();
            
            Embed\Request::setResolverConfig($resolverOptions);

            $url = new Embed\Request($_GET['url']);
            $info = Embed\Embed::create($url, $options);
            ?>

            <?php if (empty($info)): ?>

            <p>The url is not valid!</p>

            <table class="embed">
                <tr>
                    <th>Http request result</th>
                    <td>
                        <ul>
                        <?php
                        foreach ($url->getRequestInfo() as $name => $value) {
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
                    <td><?php echo $info->title; ?></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><?php echo $info->description; ?></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        <?php if ($info->image): ?>
                        <img src="<?php echo $info->image; ?>"> <?php echo $info->image; ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>Image size</th>
                    <td><?php echo $info->imageWidth.' x '.$info->imageHeight; ?></td>
                </tr>
                <tr>
                    <th>All images</th>
                    <td><pre><?php print_r($info->images); ?></pre></td>
                </tr>
                <tr>
                    <th>Embed code</th>
                    <td>
                        <?php echo $info->code; ?>
                        <pre><?php echo htmlspecialchars($info->code, ENT_IGNORE); ?></pre>
                    </td>
                </tr>
                <tr>
                    <th>Url</th>
                    <td><?php echo $info->url; ?></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><?php echo $info->type; ?></td>
                </tr>
                <tr>
                    <th>Source</th>
                    <td><?php
                        if ($info->source) {
                            echo $info->source;
                            echo ' / <a href="test-sources.php?url='.urlencode($info->source).'" target="_blank">Test</a>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Author name</th>
                    <td><?php echo $info->authorName; ?></td>
                </tr>
                <tr>
                    <th>Author url</th>
                    <td><?php echo $info->authorUrl; ?></td>
                </tr>
                <tr>
                    <th>Provider icon</th>
                    <td><img src="<?php echo $info->providerIcon; ?>"> <?php echo $info->providerIcon; ?></td>
                </tr>
                <tr>
                    <th>All icons</th>
                    <td><pre><?php print_r($info->providerIcons); ?></pre></td>
                </tr>
                <tr>
                    <th>Provider name</th>
                    <td><?php echo $info->providerName; ?></td>
                </tr>
                <tr>
                    <th>Provider url</th>
                    <td><?php echo $info->providerUrl; ?></td>
                </tr>
                <tr>
                    <th>Width</th>
                    <td><?php echo $info->width; ?></td>
                </tr>
                <tr>
                    <th>Height</th>
                    <td><?php echo $info->height; ?></td>
                </tr>
                <tr>
                    <th>Aspect ratio</th>
                    <td><?php echo $info->aspectRatio; ?></td>
                </tr>
                <tr>
                    <th>Http request result</th>
                    <td>
                        <ul>
                        <?php
                        foreach ($url->getRequestInfo() as $name => $value) {
                            if (is_array($value)) {
                                $value = print_r($value, true);
                            }
                            echo "<li><strong>$name:</strong> $value</li>";
                        }
                        ?>
                        </ul>
                    </td>
                </tr>
                <?php foreach ($info->providers as $name => $provider) {
                    $content = htmlspecialchars(print_r($provider, true), ENT_IGNORE);
                    echo '<tr><th>'.$name.'</th><td><pre>'.$content.'</pre></td></tr>';
                }
                ?>
                <tr>
                    <th>Content</th>
                    <td>
                        <pre><?php echo htmlspecialchars($url->getContent(), ENT_IGNORE); ?></pre>
                    </td>
                </tr>
            </table>

            <?php endif; ?>

        </section>

        <?php endif; ?>

    </body>
</html>
