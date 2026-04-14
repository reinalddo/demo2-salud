<?php
// Configuración base para demomedicina2 (Doctor individual)
$doctor_name = 'Dr. Alejandro Ruiz';
$doctor_specialty = 'Cardiología y Medicina Preventiva';

// WhatsApp (wa.me format, no +)
$doctor_phone = '584241234567';
$doctor_phone_display = '+58 424 123 4567';

// Consultorio / dirección (muestra)
$doctor_address = 'Consultorio Privado - Av. Ejemplo 123, Ciudad';

// Helper para generar enlace de WhatsApp
function wa_link($text = '') {
    global $doctor_phone;
    $base = 'https://wa.me/' . $doctor_phone;
    if ($text === '') return $base;
    return $base . '?text=' . rawurlencode($text);
}

?>
