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
if (!function_exists('wa_link')) {
    function wa_link($text = '') {
        global $doctor_phone;
        $base = 'https://wa.me/' . $doctor_phone;
        if ($text === '') return $base;
        return $base . '?text=' . rawurlencode($text);
    }
}

if (!function_exists('load_json_data')) {
    function load_json_data($relativePath, $default = []) {
        static $cache = [];

        $basePath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'json';
        $normalizedPath = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, ltrim($relativePath, '/\\'));
        $fullPath = $basePath . DIRECTORY_SEPARATOR . $normalizedPath;

        if (array_key_exists($fullPath, $cache)) {
            return $cache[$fullPath];
        }

        if (!is_file($fullPath)) {
            return $cache[$fullPath] = $default;
        }

        $contents = file_get_contents($fullPath);
        if ($contents === false) {
            return $cache[$fullPath] = $default;
        }

        $decoded = json_decode($contents, true);
        if (!is_array($decoded)) {
            return $cache[$fullPath] = $default;
        }

        return $cache[$fullPath] = $decoded;
    }
}

?>
