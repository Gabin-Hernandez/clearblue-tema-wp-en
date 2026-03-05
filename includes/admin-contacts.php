<?php
// includes/admin-contacts.php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Hook para crear el submenú de registros
function creatblue_contact_records_menu() {
    add_submenu_page(
        'creatblue-contact',
        'Registros',
        'Registros',
        'manage_options',
        'creatblue-contact-records',
        'creatblue_contact_records_page'
    );
}
add_action('admin_menu', 'creatblue_contact_records_menu');

// Renderiza la tabla de registros en el backend
function creatblue_contact_records_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    global $wpdb;
    $table_name = $wpdb->prefix . 'creatblue_contacts';

    // Manejar la acción de eliminar manualmente
    if ( isset( $_GET['action'] ) && $_GET['action'] == 'delete' && isset( $_GET['id'] ) ) {
        $id_to_delete = intval( $_GET['id'] );
        // Verificar el nonce para evitar CSRF
        if ( isset( $_GET['_wpnonce'] ) && wp_verify_nonce( $_GET['_wpnonce'], 'delete_contact_' . $id_to_delete ) ) {
            $wpdb->delete( $table_name, array( 'id' => $id_to_delete ), array( '%d' ) );
            echo '<div class="updated"><p>Registro eliminado exitosamente.</p></div>';
        } else {
            echo '<div class="error"><p>Error de seguridad al intentar eliminar el registro.</p></div>';
        }
    }

    // Obtener los resultados ordenados del más reciente al más antiguo
    // Suprimimos el reporte de error temporalmente en caso de que dbDelta no haya terminado
    $suppress = $wpdb->suppress_errors();
    $results = $wpdb->get_results( "SELECT * FROM $table_name ORDER BY fecha DESC", ARRAY_A );
    $wpdb->suppress_errors( $suppress );
    ?>
    <div class="wrap">
        <h1 class="wp-heading-inline">Registros de Contacto Creatblue</h1>
        <hr class="wp-header-end">
        <table class="wp-list-table widefat fixed striped table-view-list">
            <thead>
                <tr>
                    <th scope="col" class="manage-column column-primary">Nombre y Correo</th>
                    <th scope="col" class="manage-column">Fecha</th>
                    <th scope="col" class="manage-column">Empresa / Estado</th>
                    <th scope="col" class="manage-column">Teléfono / C.P.</th>
                    <th scope="col" class="manage-column">Solución y Detalles</th>
                    <th scope="col" class="manage-column">Preferencias</th>
                    <th scope="col" class="manage-column">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if ( $results ) : ?>
                    <?php foreach ( $results as $row ) : ?>
                        <tr>
                            <td class="has-row-actions column-primary">
                                <strong><?php echo esc_html( $row['nombre'] . ' ' . $row['apellido'] ); ?></strong><br>
                                <a href="mailto:<?php echo esc_attr( $row['correo'] ); ?>"><?php echo esc_html( $row['correo'] ); ?></a>
                                <button type="button" class="toggle-row"><span class="screen-reader-text">Mostrar más detalles</span></button>
                            </td>
                            <td><?php echo date_i18n( get_option('date_format') . ' ' . get_option('time_format'), strtotime( $row['fecha'] ) ); ?></td>
                            <td>
                                <strong>Empresa:</strong> <?php echo esc_html( $row['empresa'] ?: '-' ); ?><br>
                                <strong>Estado:</strong> <?php echo esc_html( $row['estado'] ?: '-' ); ?>
                            </td>
                            <td>
                                <strong>Tel:</strong> <?php echo esc_html( $row['telefono'] ?: '-' ); ?><br>
                                <strong>CP:</strong> <?php echo esc_html( $row['codigo_postal'] ?: '-' ); ?>
                            </td>
                            <td>
                                <strong>Solución:</strong> <?php echo esc_html( $row['solucion'] ?: '-' ); ?><br>
                                <strong>Ver detalles:</strong> <span title="<?php echo esc_attr( $row['detalles'] ); ?>"><?php echo esc_html( wp_trim_words( $row['detalles'], 10, '...' ) ); ?></span>
                            </td>
                            <td>
                                Marketing: <?php echo $row['marketing'] ? 'Sí' : 'No'; ?><br>
                                Consentimiento: <?php echo $row['consentimiento'] ? 'Sí' : 'No'; ?>
                            </td>
                            <td>
                                <?php
                                $delete_url = admin_url( 'admin.php?page=creatblue-contact-records&action=delete&id=' . $row['id'] );
                                $nonce_url  = wp_nonce_url( $delete_url, 'delete_contact_' . $row['id'] );
                                ?>
                                <a href="<?php echo esc_url( $nonce_url ); ?>" class="button button-small" onclick="return confirm('¿Estás seguro de que deseas eliminar permanentemente este registro? Esta acción no se puede deshacer.');" style="color: #b32d2e; border-color: #b32d2e;">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7">No hay envíos registrados aún.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}
