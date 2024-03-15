<?php

if (! function_exists('get_logo')) {
    function get_logo($mimeType): string
    {
        $baseURL = 'assets/images/logos/';

        return $baseURL.match ($mimeType) {
            'application/pdf' => 'file-pdf.png',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'file-word.png',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => 'file-excel.png',
            default => 'file.png'
        };
    }
}
