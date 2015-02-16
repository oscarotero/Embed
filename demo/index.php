<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

include '../src/autoloader.php';

function get($name, $default = '')
{
    return isset($_GET[$name]) ? $_GET[$name] : $default;
}

function getEscaped($name, $default = '')
{
    return htmlspecialchars(get($name, $default), ENT_QUOTES, 'UTF-8');
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
];

$adapterData = $providerData;

function array_insert(&$array, $position, $insert_array)
{
    $first_array = array_splice($array, 0, $position);
    $array = array_merge($first_array, $insert_array, $array);
}

array_insert($adapterData, 4, ['images' => 'printArray']);
array_insert($adapterData, 4, ['image' => 'printImage']);
array_insert($adapterData, 5, ['imageWidth' => 'printText']);
array_insert($adapterData, 6, ['imageHeight' => 'printText']);
array_insert($adapterData, 12, ['aspectRatio' => 'printText']);
array_insert($adapterData, 15, ['providerIcons' => 'printArray']);
array_insert($adapterData, 15, ['providerIcon' => 'printImage']);
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
                    <input type="url" name="url" autofocus placeholder="http://" value="<?php echo getEscaped('url'); ?>">
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

        <?php if (get('url')): ?>
        <section>
            <h1>Result:</h1>

            <?php $info = Embed\Embed::create(get('url')); ?>

            <?php if (!$info): ?>

            <p>The url is not valid!</p>

            <?php else: ?>

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
                <?php if (isset($info->api)): ?>
                <h2>Data provider by the custom API</h2>

                <table>
                    <tr>
                        <th>Data provider by the API</th>
                        <td><?php printArray($info->api->getAll(), false); ?></td>
                    </tr>
                </table>
                <?php endif ?>

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
                        <td><?php printArray($provider->bag->getAll(), false); ?></td>
                    </tr>

                    <?php if (isset($provider->api)): ?>
                    <tr>
                        <th>Data provider by the API</th>
                        <td><?php printArray($provider->api->getAll(), false); ?></td>
                    </tr>
                    <?php endif ?>

                </table>
                <?php endforeach ?>

                <h2>Http request info</h2>

                <table>
                    <?php foreach ($info->request->getRequestInfo() as $name => $value): ?>
                    <tr>
                        <th><?php echo $name; ?></th>
                        <td><?php printAny($value); ?></td>
                    </tr>
                    <?php endforeach ?>
                </table>

                <h2>Content</h2>

                <pre>
                    <?php printText($info->request->getContent()); ?>
                </pre>

                <?php endif; ?>
            </div>
        </section>

        <?php endif; ?>

    </body>
</html>
