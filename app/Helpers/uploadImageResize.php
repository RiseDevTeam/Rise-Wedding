<?php

// $file di kirim dari parameter di controller contoh $request->file('file');
// $path di kirim dari parameter di controller contoh 'public/upload/';
// $name di kirim dari parameter di controller yang akan menjadi nama baru file contoh gamar123.png';
if (!function_exists('uploadImageResize')) {
    function uploadImageResize($file, $path, $name = null)
    {
        $fileName = time() . rand(1, 100) . '.' . $file->getClientOriginalExtension();
        // $extension = $file->getClientOriginalExtension();
        // $fileName = $name ? $name . '.' .  : $fileName;
        $file->save($path, $fileName);
        return $fileName;
    }
}

// contoh untuk controllers uploadImage($request->file('file'), 'public/upload/', 'gambar123');
