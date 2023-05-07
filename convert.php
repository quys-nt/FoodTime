
<?php
define('THEME', 'themes/');
define('PHP', '.php');
define('HTML', '.html');

$header = file_get_contents(THEME . 'partials/header' . PHP);
$footer = file_get_contents(THEME . 'partials/footer' . PHP);
$header = str_replace('<?= BASE_URL ?>', '.', $header);
$footer = str_replace('<?= BASE_URL ?>', '.', $footer);

$files = glob(THEME . '*.php');

if (!file_exists('build')) {
  mkdir('build');
}

foreach ($files as $file) {
  $content = file_get_contents($file);
  $content = str_replace('<?= BASE_URL ?>', '.', $content);
  $content = str_replace('<?php', '', $content);
  $content = str_replace('?>', '', $content);
  $html = $header . $content . $footer;

  $html_file = 'build/' . str_replace(PHP, HTML, basename($file));
  file_put_contents($html_file, $html);
}

