<?php
// ================================
// タイトル
// ================================
$url = $_SERVER['REQUEST_URI'];
$defaultTitle = 'タイトル';
$titleName = [
    '/' => $defaultTitle,
    '/page/about.php' => 'アバウト｜' . $defaultTitle,
    '/page/company.php' => '会社情報｜' . $defaultTitle,
];
$titleTxt = $titleName[$url] ?? $defaultTitle;
echo '<title>' . $titleTxt . '</title>';

// ================================
// ディスクリプション
// ================================
$descriptionName = [
    '/' => 'トップページのディスクリプション',
    '/page/about.php' => 'アバウトページのディスクリプション ',
    '/page/company.php' => '会社概要ページのディスクリプション ',
];
$descriptionTxt = $descriptionName[$url];
echo '<meta name="description" content="' . $descriptionTxt . '">';
