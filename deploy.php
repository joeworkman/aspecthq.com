<?php
// This script relies on a cron job that will check for the existence of a file.
// Then the cron job will need to pull down the latest changes via git.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = 'deploy-hook';
    file_put_contents($file, json_encode($_POST, JSON_PRETTY_PRINT));
}
