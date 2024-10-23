<?php
// Exit if accessed directly.
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

global $wpdb;

// Define table names
$table_name_stations = $wpdb->prefix . 'weather_stations';
$table_name_data = $wpdb->prefix . 'weather_data';

// Delete custom tables
$wpdb->query("DROP TABLE IF EXISTS $table_name_stations");
$wpdb->query("DROP TABLE IF EXISTS $table_name_data");
?>