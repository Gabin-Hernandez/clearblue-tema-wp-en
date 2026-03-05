<?php
// includes/db-setup.php
if (!defined('ABSPATH')) {
    exit;
}

function creatblue_create_contacts_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'creatblue_contacts';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        fecha datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        nombre varchar(255) NOT NULL,
        apellido varchar(255) NOT NULL,
        correo varchar(255) NOT NULL,
        empresa varchar(255) DEFAULT '',
        estado varchar(255) DEFAULT '',
        codigo_postal varchar(50) DEFAULT '',
        telefono varchar(50) DEFAULT '',
        solucion varchar(255) DEFAULT '',
        detalles text DEFAULT '',
        consentimiento tinyint(1) DEFAULT 0,
        marketing tinyint(1) DEFAULT 0,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// Ejecutar con admin_init según requisitos
add_action('admin_init', 'creatblue_create_contacts_table');