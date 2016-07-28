<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

include '../src/autoloader.php';

function getUrl()
{
    if (!isset($_GET['url'])) {
        return '';
    }

    $url = $_GET['url'];

    //fix for unescaped urls
    foreach ($_GET as $name => $value) {
        if ($name === 'url') {
            continue;
        }

        $url .= "&{$name}={$value}";
    }

    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        return 'http://doNotTryToXSS.invalid';
    }

    return $url;
}

function getEscapedUrl()
{
    return htmlspecialchars(getUrl(), ENT_QUOTES, 'UTF-8');
}

function printAny($text)
{
    if (is_array($text)) {
        printArray($text);
    } else {
        printText($text);
    }
}

function printText($text)
{
    echo htmlspecialchars($text, ENT_IGNORE);
}

function printImage($image)
{
    if ($image) {
        echo <<<EOT
        <img src="{$image}"><br>
EOT;
        printUrl($image);
    }
}

function printUrl($url)
{
    if ($url) {
        echo <<<EOT
        <a href="{$url}" target="_blank">Open (new window)</a> | {$url}
EOT;
    }
}

function printArray($array)
{
    if ($array) {
        echo '<pre>'.htmlspecialchars(print_r($array, true), ENT_IGNORE).'</pre>';
    }
}

function printHeaders($array)
{
    $headers = [];

    foreach ($array as $name => $values) {
        $headers[$name] = implode(', ', $values);
    }

    printArray($headers);
}

function printCode($code, $asHtml = true)
{
    if ($asHtml) {
        echo $code;
    }

    if ($code) {
        echo '<pre>'.htmlspecialchars($code, ENT_IGNORE).'</pre>';
    }
}

$providerData = [
    'title' => 'printText',
    'description' => 'printText',
    'url' => 'printUrl',
    'type' => 'printText',
    'tags' => 'printArray',
    'imagesUrls' => 'printArray',
    'code' => 'printCode',
    'source' => 'printUrl',
    'width' => 'printText',
    'height' => 'printText',
    'authorName' => 'printText',
    'authorUrl' => 'printUrl',
    'providerIconsUrls' => 'printArray',
    'providerName' => 'printText',
    'providerUrl' => 'printUrl',
    'publishedTime' => 'printText',
    'license' => 'printUrl',
];

$adapterData = [
    'title' => 'printText',
    'description' => 'printText',
    'url' => 'printUrl',
    'type' => 'printText',
    'tags' => 'printArray',
    'image' => 'printImage',
    'imageWidth' => 'printText',
    'imageHeight' => 'printText',
    'images' => 'printArray',
    'code' => 'printCode',
    'source' => 'printUrl',
    'width' => 'printText',
    'height' => 'printText',
    'aspectRatio' => 'printText',
    'authorName' => 'printText',
    'authorUrl' => 'printUrl',
    'providerIcon' => 'printImage',
    'providerIcons' => 'printArray',
    'providerName' => 'printText',
    'providerUrl' => 'printUrl',
    'publishedTime' => 'printText',
    'license' => 'printUrl',
];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">

        <title>Embed tests</title>

        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>

    <body>
        <form action="index.php">
            <fieldset class="main">
                <label>
                    <span>Url to test:</span>
                    <input type="url" name="url" autofocus placeholder="http://" value="<?php echo getEscapedUrl(); ?>">
                </label>
            </fieldset>

            <fieldset class="action">
                <button type="submit">Test</button>
                &nbsp;&nbsp;&nbsp;
                <a href="https://github.com/oscarotero/Embed/">Get the source code from Github</a>
                &nbsp;&nbsp; - &nbsp;&nbsp;
                <a href="javascript:(function(){window.open('http://oscarotero.com/embed2/demo/index.php?url='+document.location)})();">or the bookmarklet</a>
            </fieldset>
        </form>

        <?php if (getUrl()): ?>
        <section>
            <h1>Result:</h1>

            <?php
            try {
                $info = Embed\Embed::create(getUrl());
            } catch (Exception $exception) {
                echo '<p>'.$exception->getMessage().'</p>';
                echo '</section>';
                echo '</body>';
                echo '</html>';
                die();
            }
            ?>

            <table>
                <?php foreach ($adapterData as $name => $fn): ?>
                <tr>
                    <th><?php echo $name; ?></th>
                    <td><?php $fn($info->$name); ?></td>
                </tr>
                <?php endforeach ?>
            </table>

            <div class="view-advanced-data">
                <button onclick="document.getElementById('advanced-data').style.display = 'block'; this.style.display = 'none';">View all collected data</button>
            </div>

            <div id="advanced-data">
                <?php foreach ($info->getAllProviders() as $providerName => $provider): ?>
                <h2><?php echo $providerName; ?> provider</h2>

                <table>
                    <?php foreach ($providerData as $name => $fn): ?>
                    <tr>
                        <th><?php echo $providerName.'.'.$name; ?></th>
                        <td><?php $fn($provider->{'get'.$name}(), false); ?></td>
                    </tr>
                    <?php endforeach ?>

                    <tr>
                        <th>All data collected</th>
                        <td><?php printArray($provider->bag->getAll()); ?></td>
                    </tr>

                    <?php if (isset($provider->api)): ?>
                    <tr>
                        <th>Data provider by the API</th>
                        <td><?php printArray($provider->api->getAll()); ?></td>
                    </tr>
                    <?php endif ?>

                </table>
                <?php endforeach ?>

                <h2>Http request info</h2>

                <table>
                    <?php foreach ($info->getRequest()->getRequestInfo() as $name => $value): ?>
                    <tr>
                        <th><?php echo $name; ?></th>
                        <td><?php printAny($value); ?></td>
                    </tr>
                    <?php endforeach ?>
                    <tr>
                        <th>headers</th>
                        <td><?php printHeaders($info->getRequest()->getHeaders()); ?></td>
                    </tr>
                </table>

                <h2>Http request images headers</h2>

                <table>
                    <?php foreach ($info->getImagesRequests() as $url => $request): ?>
                    <tr>
                        <th><?php echo $request->getUrl(); ?></th>
                        <td><?php printHeaders($request->getHeaders()); ?></td>
                    </tr>
                    <?php endforeach ?>
                </table>

                <h2>Content</h2>

                <pre>
                    <?php printText($info->getRequest()->getContent()); ?>
                </pre>
            </div>
        </section>

        <?php endif; ?>

    </body>
</html>
