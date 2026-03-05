<?php
// includes/admin-contacts.php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Hook para crear el submenú de registros
function creatblue_contact_records_menu() {
    add_submenu_page(
        'creatblue-contact',
        'Records',
        'Records',
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
            echo '<div class="updated"><p>Record deleted successfully.</p></div>';
        } else {
            echo '<div class="error"><p>Security error when trying to delete the record.</p></div>';
        }
    }

    // Obtener los resultados ordenados del más reciente al más antiguo
    // Suprimimos el reporte de error temporalmente en caso de que dbDelta no haya terminado
    $suppress = $wpdb->suppress_errors();
    $results = $wpdb->get_results( "SELECT * FROM $table_name ORDER BY fecha DESC", ARRAY_A );
    $wpdb->suppress_errors( $suppress );
    ?>
    <div class="wrap">
        <h1 class="wp-heading-inline">Creatblue Contact Records</h1>
        <hr class="wp-header-end">
        <table class="wp-list-table widefat fixed striped table-view-list">
            <thead>
                <tr>
                    <th scope="col" class="manage-column column-primary">Name & Email</th>
                    <th scope="col" class="manage-column">Date</th>
                    <th scope="col" class="manage-column">Company / State</th>
                    <th scope="col" class="manage-column">Phone / Zip</th>
                    <th scope="col" class="manage-column">Solution & Details</th>
                    <th scope="col" class="manage-column">Preferences</th>
                    <th scope="col" class="manage-column">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ( $results ) : ?>
                    <?php foreach ( $results as $row ) : ?>
                        <tr>
                            <td class="has-row-actions column-primary">
                                <strong><?php echo esc_html( $row['nombre'] . ' ' . $row['apellido'] ); ?></strong><br>
                                <a href="mailto:<?php echo esc_attr( $row['correo'] ); ?>"><?php echo esc_html( $row['correo'] ); ?></a>
                                <button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button>
                            </td>
                            <td><?php echo date_i18n( get_option('date_format') . ' ' . get_option('time_format'), strtotime( $row['fecha'] ) ); ?></td>
                            <td>
                                <strong>Company:</strong> <?php echo esc_html( $row['empresa'] ?: '-' ); ?><br>
                                <strong>State:</strong> <?php echo esc_html( $row['estado'] ?: '-' ); ?>
                            </td>
                            <td>
                                <strong>Phone:</strong> <?php echo esc_html( $row['telefono'] ?: '-' ); ?><br>
                                <strong>Zip:</strong> <?php echo esc_html( $row['codigo_postal'] ?: '-' ); ?>
                            </td>
                            <td>
                                <strong>Solution:</strong> <?php echo esc_html( $row['solucion'] ?: '-' ); ?><br>
                                <strong>View details:</strong> <span title="<?php echo esc_attr( $row['detalles'] ); ?>"><?php echo esc_html( wp_trim_words( $row['detalles'], 10, '...' ) ); ?></span>
                            </td>
                            <td>
                                Marketing: <?php echo $row['marketing'] ? 'Yes' : 'No'; ?><br>
                                Consent: <?php echo $row['consentimiento'] ? 'Yes' : 'No'; ?>
                            </td>
                            <td>
                                <?php
                                $delete_url = admin_url( 'admin.php?page=creatblue-contact-records&action=delete&id=' . $row['id'] );
                                $nonce_url  = wp_nonce_url( $delete_url, 'delete_contact_' . $row['id'] );
                                ?>
                                <a href="<?php echo esc_url( $nonce_url ); ?>" class="button button-small" onclick="return confirm('Are you sure you want to permanently delete this record? This action cannot be undone.');" style="color: #b32d2e; border-color: #b32d2e;">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7">No submissions registered yet.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}
