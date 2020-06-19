<?php
$ogp_title = 'ogpタイトル';
$ogp_description = 'ogpディスクリプション';
$ogp_URL = 'URL';
?>
<meta property="og:title" content="<?php echo $ogp_title ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $ogp_URL ?>">
<meta property="og:image" content="<?php echo $ogp_URL . "/img/ogp/ogp.png"; ?>">
<meta property="og:site_name" content="<?php echo $ogp_title ?>">
<meta property="og:description" content="<?php echo $ogp_description ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $ogp_title ?>">
<meta name="twitter:description" content="<?php echo $ogp_description ?>">
<meta name="twitter:image" content="<?php echo $ogp_URL . "/img/ogp/ogp.png"; ?>">
<meta name="twitter:url" content="<?php echo $ogp_URL ?>">