<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/MarkdownPlugin.php';
require __DIR__ . '/MarkdownPlugin2.php';

$markdown = '![my-image-' . MarkdownPlugin::version . '](my-image.jpg)';
$parsedownResult = (new MarkdownPlugin())->text($markdown);

$markdown = '![my-image-extra-' . MarkdownPlugin2::version . '](my-image-extra.jpg)';
$parsedownExtraResult = (new MarkdownPlugin2())->text($markdown);

echo $parsedownResult;
echo PHP_EOL;
echo PHP_EOL;
echo $parsedownExtraResult;
