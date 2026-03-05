<?php
// includes/contact-form.php
if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_ajax_procesar_contacto', 'creatblue_procesar_contacto');
add_action('wp_ajax_nopriv_procesar_contacto', 'creatblue_procesar_contacto');

function creatblue_procesar_contacto()
{
    // 1. Validar el nonce obligatorio para máxima seguridad
    if (!isset($_POST['contacto_nonce']) || !wp_verify_nonce($_POST['contacto_nonce'], 'enviar_contacto')) {
        wp_send_json_error('Security error. Please reload the page and try again.');
    }

    // 2. Sanitizar todas las variables enviadas
    $nombre = sanitize_text_field(wp_unslash($_POST['nombre'] ?? ''));
    $apellido = sanitize_text_field(wp_unslash($_POST['apellido'] ?? ''));
    $correo = sanitize_email(wp_unslash($_POST['correo'] ?? ''));
    $empresa = sanitize_text_field(wp_unslash($_POST['empresa'] ?? ''));
    $estado = sanitize_text_field(wp_unslash($_POST['estado'] ?? ''));
    $codigo_postal = sanitize_text_field(wp_unslash($_POST['codigo-postal'] ?? ''));
    $telefono = sanitize_text_field(wp_unslash($_POST['telefono'] ?? ''));
    $solucion = sanitize_text_field(wp_unslash($_POST['solucion'] ?? ''));
    $detalles = sanitize_textarea_field(wp_unslash($_POST['detalles'] ?? ''));

    // Verificar que el checkbox de consentimiento fue marcado
    $consentimiento = isset($_POST['consentimiento']) ? 1 : 0;
    $marketing = isset($_POST['marketing']) ? 1 : 0;

    if (!$consentimiento) {
        wp_send_json_error('You must accept the privacy policies and conditions to continue.');
    }

    if (empty($nombre) || empty($apellido) || empty($correo)) {
        wp_send_json_error('Please fill in at least the required fields (First Name, Last Name, Email).');
    }

    // 3. Insertar el registro exitosamente en la base de datos
    global $wpdb;
    $table_name = $wpdb->prefix . 'creatblue_contacts';
    $fecha = current_time('mysql');

    $inserted = $wpdb->insert(
        $table_name,
        array(
        'fecha' => $fecha,
        'nombre' => $nombre,
        'apellido' => $apellido,
        'correo' => $correo,
        'empresa' => $empresa,
        'estado' => $estado,
        'codigo_postal' => $codigo_postal,
        'telefono' => $telefono,
        'solucion' => $solucion,
        'detalles' => $detalles,
        'consentimiento' => $consentimiento,
        'marketing' => $marketing,
    ),
        array(
        '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%d'
    )
    );

    if (!$inserted) {
        wp_send_json_error('There was an error saving the record to the database. Please try again later.');
    }

    // 4. Enviar el correo usando Resend (wp_remote_post)
    $destinos = get_option('creatblue_email_contacto', '');
    if (empty($destinos)) {
        // En caso de estar vacío, intenta enviar al admin
        $destinos_array = array(get_option('admin_email'));
    }
    else {
        // Separados por comas, eliminar espacios alrededor de cada correo
        $destinos_array = array_filter(array_map('trim', explode(',', $destinos)));
    }

    $api_key = 're_7XJ2un3S_547Kjap8vUEEwvnY2ce1HSvn';
    $url = 'https://api.resend.com/emails';

    $html_content = "<h2>New contact from Creatblue website</h2>";
    $html_content .= "<p><strong>Full Name:</strong> {$nombre} {$apellido}</p>";
    $html_content .= "<p><strong>Email:</strong> {$correo}</p>";
    $html_content .= "<p><strong>Company:</strong> " . ($empresa ?: 'Not specified') . "</p>";
    $html_content .= "<p><strong>State:</strong> " . ($estado ?: 'Not specified') . "</p>";
    $html_content .= "<p><strong>Zip Code:</strong> " . ($codigo_postal ?: 'Not specified') . "</p>";
    $html_content .= "<p><strong>Phone:</strong> " . ($telefono ?: 'Not specified') . "</p>";
    $html_content .= "<p><strong>Required Solution:</strong> " . ($solucion ?: 'Not specified') . "</p>";
    $html_content .= "<p><strong>Details:</strong><br/>" . nl2br(esc_html($detalles ?: 'None')) . "</p>";
    $html_content .= "<p><strong>Accepted Marketing:</strong> " . ($marketing ? 'Yes' : 'No') . "</p>";

    $body = array(
        'from' => 'Creatblue <noreply@email.jhernandez.mx>',
        'to' => $destinos_array,
        'subject' => 'New contact record - ' . $nombre . ' ' . $apellido,
        'html' => $html_content,
        'reply_to' => $correo
    );

    $args = array(
        'method' => 'POST',
        'timeout' => 15,
        'headers' => array(
            'Authorization' => 'Bearer ' . $api_key,
            'Content-Type' => 'application/json',
        ),
        'body' => wp_json_encode($body)
    );

    $response = wp_remote_post($url, $args);

    // 5. Retornar un wp_send_json_success o error según resultado de Resend
    if (is_wp_error($response)) {
        // Registro fue guardado, pero correo falló (error de WP)
        wp_send_json_error('Record saved successfully, but there was a connection error sending the email to administrators. We will contact you.');
    }
    else {
        $response_code = wp_remote_retrieve_response_code($response);
        if ($response_code >= 200 && $response_code < 300) {
            wp_send_json_success('Your message and request have been sent successfully! We will contact you soon.');
        }
        else {
            // Registro fue guardado, pero API de Resend retornó error
            $response_body = wp_remote_retrieve_body($response);
            $err_msg = json_decode($response_body);
            $msg = $err_msg->message ?? 'Failed to send notification';
            wp_send_json_error('Record saved successfully, but the notification failed (Code ' . $response_code . ': ' . $msg . ').');
        }
    }
}