<?php
// includes/admin-settings.php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Agregar el menú superior
function creatblue_contact_menu() {
    add_menu_page(
        'Contacto Creatblue',
        'Contacto Creatblue',
        'manage_options',
        'creatblue-contact',
        'creatblue_contact_settings_page',
        'dashicons-email',
        25
    );

    // Agregar submenú de Ajustes
    add_submenu_page(
        'creatblue-contact',
        'Ajustes',
        'Ajustes',
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
        <h1>Ajustes de Contacto Creatblue</h1>
        <form method="post" action="options.php">
            <?php settings_fields('creatblue_contact_options_group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Correos de notificación (separados por comas)</th>
                    <td>
                        <input type="text" name="creatblue_email_contacto" value="<?php echo esc_attr(get_option('creatblue_email_contacto')); ?>" class="regular-text" style="width: 100%; max-width: 500px;" />
                        <p class="description">Ejemplo: admin@email.com, ventas@email.com (Si se deja en blanco, los correos del formulario no podrán enviarse a nadie)</p>
                    </td>
                </tr>
            </table>
            <?php submit_button('Guardar Cambios'); ?>
        </form>
    </div>
    <?php
}
