<?php

/**
 * Clarify.
 * 
 * Copyright (C) 2012 Roger Dudler <roger.dudler@gmail.com>
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

$project_id = intval($_REQUEST['project']);
$projects = $db->data('SELECT id, name FROM project ORDER BY name ASC');
$screens = $db->data('SELECT id, title, width, ext, created FROM screen WHERE project = ' . $project_id . ' ORDER BY created ASC');

?>
<!DOCTYPE html>
<html class="mod modLayout skinLayoutBrowser">
<head>
    <title>Screen Browser - Clarify</title>
    <? require 'partials/head.php' ?>
</head>
<body>
    <div class="mod modProjectBrowser" data-project="<?= $project_id ?>">
        <? require TERRIFIC . 'modules/ProjectBrowser/projectbrowser.phtml'; ?>
    </div>
    <div class="mod modScreenBrowser" data-project="<?= $project_id ?>">
        <? require TERRIFIC . 'modules/ScreenBrowser/screenbrowser.phtml'; ?>
    </div>
    <? require 'partials/foot.php'; ?>
</body>
</html>