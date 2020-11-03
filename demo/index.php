<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

include __DIR__.'/../vendor/autoload.php';

function getUrl(): ?string
{
    $skipParams = ['url', 'settings'];
    $url = getParam('url');

    if (!$url) {
        return null;
    }

    //fix for unescaped urls
    foreach ($_GET as $name => $value) {
        if (in_array($name, $skipParams, true)) {
            continue;
        }

        $url .= "&{$name}={$value}";
    }

    return $url;
}

function getParam(string $paramName): ?string
{
    return $_GET[$paramName] ?? null;
}

function getJsonSettings(): array
{
    $jsonString = getParam('settings') ?: '{}';
    return json_decode($jsonString, true, 512, JSON_THROW_ON_ERROR);
}

function getEscapedUrl(): ?string
{
    $url = getUrl();
    return $url ? htmlspecialchars($url, ENT_QUOTES, 'UTF-8') : null;
}

function printAny($text): void
{
    if (is_array($text)) {
        printArray($text);
    } else {
        printText((string) $text);
    }
}

function printText(?string $text): void
{
    if ($text) {
        echo htmlspecialchars($text, ENT_IGNORE);
    }
}

function printDatetime(?DateTimeInterface $date): void
{
    if ($date) {
        echo $date->format('Y-m-d H:i:s');
    }
}

function printImage(?string $image): void
{
    if ($image) {
        echo <<<EOT
        <img src="{$image}"><br>
EOT;
        printUrl($image);
    }
}

function printUrl(?string $url): void
{
    if ($url) {
        echo <<<EOT
        <a href="{$url}" target="_blank">Open (new window)</a> | {$url}
EOT;
    }
}

function printArray(?array $array): void
{
    if ($array) {
        echo '<pre>'.htmlspecialchars(print_r($array, true), ENT_IGNORE).'</pre>';
    }
}

function printHeaders(array $array): void
{
    $headers = [];

    foreach ($array as $name => $values) {
        $headers[$name] = implode(', ', $values);
    }

    printArray($headers);
}

function printCode(?string $code, bool $asHtml = true): void
{
    if ($asHtml) {
        echo $code;
    }

    if ($code) {
        echo '<pre>'.htmlspecialchars($code, ENT_IGNORE).'</pre>';
    }
}

$detectors = [
    'title' => 'printText',
    'description' => 'printText',
    'url' => 'printUrl',
    'keywords' => 'printArray',
    'image' => 'printImage',
    'code' => 'printCode',
    'feeds' => 'printArray',
    'authorName' => 'printText',
    'authorUrl' => 'printUrl',
    'icon' => 'printImage',
    'favicon' => 'printImage',
    'providerName' => 'printText',
    'providerUrl' => 'printUrl',
    'publishedTime' => 'printDatetime',
    'license' => 'printUrl',
    'cms' => 'printText',
    'language' => 'printText',
    'languages' => 'printArray',
];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">

        <title>Embed tests</title>

        <style type="text/css">
            body { font-family: -apple-system, system-ui, sans-serif; min-width: 650px; margin: 0; padding: 0;}
            a { color: inherit; font-size: 0.9em; }
            a:hover { text-decoration: none; }
            img { display: block; margin-bottom: 0.5em; }
            pre { overflow: auto; background: #EEE; padding: 1em; }

            /* form */
            form { background: #EEE; border-bottom: solid 1px #DDD; color: #666; padding: 1em 1.5em; }
            fieldset { border: none; padding: 1em 0; }
            label { display: block; cursor: pointer; font-weight: bold; }
            input[type="url"], textarea { border: none; background: white; border-radius: 2px; box-sizing: border-box; min-width: 100%; margin: 5px 0; font-size: 1.3em; padding: 0.5em; color: #666; resize: vertical; }
            button, summary { font-size: 1.6rem; font-weight: bold; font-family: Arial; background: yellowgreen; border: none; border-radius: 3px; padding: 0.3em 1em; cursor: pointer; margin-top: 5px; }
            button:hover, summary:hover { background: black; color: white; }
            details {
                display: block;
                margin: 2em 0;
            }
            summary {
                width: max-content;
                margin: auto;
            }
            .helptext { font-weight: normal; font-size: 0.75em; }
            /* result */
            main { padding: 1.5em; }
            main h1, main h2 { font-size: 2em; color: #666; letter-spacing: -0.02em; }
            main h2 { margin-top: 3em; }
            table { text-align: left; width: 100%; table-layout: fixed; }
            th, td { vertical-align: top; padding: 0.5em 1em 0.5em 0; border-top: solid 1px #DDD; }
            th { width: 200px; }
            .view-advanced-data { margin: 2em 0; text-align: center; }
        </style>
    </head>

    <body>
        <form action="index.php">
            <fieldset class="main">
                <label>
                    <span>Url to test:</span>
                    <input type="url" name="url" autofocus placeholder="http://" value="<?php echo getEscapedUrl(); ?>">
                </label>
                <br>
                <label>
                    <span>Settings:</span>
                    <?php
                    $placeholderJson = json_encode(['instagram:token' => null], JSON_PRETTY_PRINT);
                    $currentJson = getJsonSettings();
                    ?>
                    <textarea name="settings" rows="2" placeholder='<?php echo $placeholderJson; ?>'><?php
                         echo !empty($currentJson)
                             ? json_encode($currentJson, JSON_PRETTY_PRINT | JSON_FORCE_OBJECT)
                             : '';
                    ?></textarea>
                    <span class="helptext">Add settings in JSON like "instagram:token", "facebook:token", ...</span>
                </label>
            </fieldset>
            
            <fieldset class="action">
                <button type="submit">Test</button>
                &nbsp;&nbsp;&nbsp;
                <a href="https://github.com/oscarotero/Embed/">Get the source code from Github</a>
            </fieldset>
        </form>

        <?php if (getUrl()) : ?>
        <main>
            <h1>Result:</h1>

            <?php
            try {
                $embed = new Embed\Embed();
                $embed->getCrawler()->addDefaultHeaders([
                    'Accept-Language' => 'en-US,en;q=0.2',
                    'Cache-Control' => 'max-age=0,no-cache',
                ]);

                $embed->setSettings(
                    array_merge(
                        [
                            'twitch:parent' => $_SERVER['SERVER_NAME'] === 'localhost' ? null : $_SERVER['SERVER_NAME'],
                        ],
                        getJsonSettings()
                    )
                );
                $info = $embed->get(getUrl());
            } catch (Exception $exception) {
                echo '<pre>';
                echo $exception;
                echo '</pre>';
                die();
            }
            ?>

            <table>
                <?php foreach ($detectors as $name => $fn) : ?>
                <tr>
                    <th><?php echo $name; ?></th>
                    <td><?php $fn($info->$name); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>

            <details id="details">
                <summary>View all collected data</summary>

                <div id="advanced-data">
                    <h2>OEmbed data</h2>

                    <table>
                        <tr>
                            <th>Endpoint</th>
                            <td><?php printUrl($info->getOEmbed()->getEndpoint()); ?></td>
                        </tr>

                        <tr>
                            <th>All data collected</th>
                            <td><?php printArray($info->getOEmbed()->all()); ?></td>
                        </tr>
                    </table>

                    <h2>Meta data</h2>

                    <table>
                        <tr>
                            <th>All data collected</th>
                            <td><?php printArray($info->getMetas()->all()); ?></td>
                        </tr>
                    </table>

                    <h2>Linked data</h2>

                    <table>
                        <tr>
                            <th>All data collected</th>
                            <td><?php printArray($info->getLinkedData()->all()); ?></td>
                        </tr>
                    </table>

                    <?php if (method_exists($info, 'getApi')) : ?>
                    <h2>API data</h2>

                    <table>
                        <tr>
                            <th>Endpoint</th>
                            <td><?php printUrl($info->getApi()->getEndpoint()); ?></td>
                        </tr>

                        <tr>
                            <th>All data collected</th>
                            <td><?php printArray($info->getApi()->all()); ?></td>
                        </tr>
                    </table>
                    <?php endif; ?>

                    <h2>HTML content</h2>

                    <pre>
                        <?php printText((string) $info->getResponse()->getBody()); ?>
                    </pre>
                </div>
            </details>
        </main>

        <script>
            const details = document.getElementById('details');
            details.addEventListener('toggle', () => details.scrollIntoView({ behavior: 'smooth' }))
        </script>
        <?php endif; ?>
    </body>
</html>
