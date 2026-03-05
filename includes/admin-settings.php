<?php
// includes/admin-settings.php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Agregar el menú superior
function creatblue_contact_menu() {
    add_menu_page(
        'Creatblue Contact',
        'Creatblue Contact',
        'manage_options',
        'creatblue-contact',
        'creatblue_contact_settings_page',
        'dashicons-email',
        25
    );

    // Agregar submenú de Ajustes
    add_submenu_page(
        'creatblue-contact',
        'Settings',
        'Settings',
        'manage_options',
        'creatblue-contact', // Usamos el mismo slug para que sea el principal
        'creatblue_contact_settings_page' // Función de callback
    );
}
add_action('admin_menu', 'creatblue_contact_menu');

// Registrar la configuración (Settings API)
function creatblue_register_settings() {
    register_setting('creatblue_contact_options_group', 'creatblue_email_contacto', 'sanitize_text_field');
}
add_action('admin_init', 'creatblue_register_settings');

// Renderizar la página de ajustes
function creatblue_contact_settings_page() {
    ?>
    <div class="wrap">
        <h1>Creatblue Contact Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('creatblue_contact_options_group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Notification emails (comma separated)</th>
                    <td>
                        <input type="text" name="creatblue_email_contacto" value="<?php echo esc_attr(get_option('creatblue_email_contacto')); ?>" class="regular-text" style="width: 100%; max-width: 500px;" />
                        <p class="description">Example: admin@email.com, sales@email.com (If left blank, form emails will not be sent to anyone)</p>
                    </td>
                </tr>
            </table>
            <?php submit_button('Save Changes'); ?>
        </form>
    </div>
    <?php
}
