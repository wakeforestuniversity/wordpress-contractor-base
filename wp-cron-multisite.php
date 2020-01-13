<?php
/**
 * This file handles the wp-cron.php functionality for every site in our network.
 * This allows us to move server load to a cron and away from user experience.
 */

// WP setup
require_once './bootstrap.php';
require_once ROOT_PATH . '/wp/wp-load.php';

// Config
$iIterationsPerLoad = 50;
$iCurrentID = (isset($_GET['offset'])) ? $_GET['offset'] : 0;
$iEndID = $iCurrentID + $iIterationsPerLoad;

// Update the cache every day, get the list of active blogs
$sCachePath = WFU_WP_CONTENT_DIR . '/blogs.dir/' . BLOG_ID . '/files/cache/cron-list.json';
if (\Wfu_File::is_file_current($sCachePath, 1440) === false) {
    global $wpdb;
    $sDomainSQL = "SELECT domain FROM $wpdb->blogs WHERE public='1'";
    $sDomainSQL = $wpdb->prepare($sDomainSQL, '');
    $aActiveBlogs = $wpdb->get_results($sDomainSQL);
    \Wfu_File::create_json_file($sCachePath, $aActiveBlogs);
}

// Get file contents
$sProcessedDataJson = \Wfu_File::read_file($sCachePath);
$aActiveBlogs = json_decode($sProcessedDataJson, true);
$iActiveBlogCount = count($aActiveBlogs);

// Hit WP Cron for the sites in range
while ($iCurrentID <= $iEndID && $iCurrentID < $iActiveBlogCount) {
    $sCommand = 'https://' . $aActiveBlogs[$iCurrentID]['domain'] . '/wp-cron.php';
    $ch = curl_init($sCommand);
    $rc = curl_setopt($ch, CURLOPT_RETURNTRANSFER, FALSE);
    $rc = curl_exec($ch);
    curl_close($ch);
    $iCurrentID++;
}

// If more sites need to be hit, continue to next set
if ($iCurrentID < $iActiveBlogCount) {
    header('Location: /wp-cron-multisite.php?offset=' . $iCurrentID);
}
die;