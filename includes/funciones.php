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

if (!function_exists('app_base_url')) {
    function app_base_url() {
        static $baseUrl = null;

        if ($baseUrl !== null) {
            return $baseUrl;
        }

        $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
        $directory = str_replace('\\', '/', dirname($scriptName));

        if ($directory === '/' || $directory === '.' || $directory === '\\') {
            $directory = '';
        }

        $directory = rtrim($directory, '/');
        $baseUrl = $directory === '' ? '/' : $directory;

        return $baseUrl;
    }
}

if (!function_exists('project_url')) {
    function project_url($path = '') {
        $path = (string) $path;

        if ($path === '' || $path === './') {
            return app_base_url() === '/' ? '/' : app_base_url() . '/';
        }

        if (preg_match('/^(?:[a-z][a-z0-9+.-]*:|\/\/|#)/i', $path)) {
            return $path;
        }

        $baseUrl = app_base_url();
        $normalizedPath = ltrim($path, '/');

        if ($baseUrl === '/') {
            return '/' . $normalizedPath;
        }

        return $baseUrl . '/' . $normalizedPath;
    }
}

if (!function_exists('asset_url')) {
    function asset_url($path = '') {
        return project_url($path);
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

if (!function_exists('load_json_collection')) {
    function load_json_collection($relativeDir) {
        static $cache = [];

        $basePath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'json';
        $normalizedPath = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, trim($relativeDir, '/\\'));
        $fullPath = $basePath . DIRECTORY_SEPARATOR . $normalizedPath;

        if (array_key_exists($fullPath, $cache)) {
            return $cache[$fullPath];
        }

        if (!is_dir($fullPath)) {
            return $cache[$fullPath] = [];
        }

        $items = [];
        $files = scandir($fullPath);
        if ($files === false) {
            return $cache[$fullPath] = [];
        }

        foreach ($files as $file) {
            if ($file === '.' || $file === '..') {
                continue;
            }

            $filePath = $fullPath . DIRECTORY_SEPARATOR . $file;
            if (!is_file($filePath) || strtolower(pathinfo($filePath, PATHINFO_EXTENSION)) !== 'json') {
                continue;
            }

            $contents = file_get_contents($filePath);
            if ($contents === false) {
                continue;
            }

            $decoded = json_decode($contents, true);
            if (!is_array($decoded)) {
                continue;
            }

            if (!isset($decoded['_source'])) {
                $decoded['_source'] = $file;
            }

            $items[] = $decoded;
        }

        usort($items, function ($left, $right) {
            $leftOrder = $left['orden'] ?? PHP_INT_MAX;
            $rightOrder = $right['orden'] ?? PHP_INT_MAX;

            if ($leftOrder === $rightOrder) {
                return strcmp((string) ($left['_source'] ?? ''), (string) ($right['_source'] ?? ''));
            }

            return $leftOrder <=> $rightOrder;
        });

        return $cache[$fullPath] = $items;
    }
}

?>
