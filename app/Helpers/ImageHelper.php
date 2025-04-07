<?php
<<<<<<< HEAD

namespace App\Helpers;

class ImageHelper
{
    public static function uploadAndResize(
        $file,
        $directory,
        $fileName,
        $width = null,
        $height = null
    ) {
=======
namespace App\Helpers;
class ImageHelper
{
    public static function uploadAndResize($file, $directory, $fileName, $width = null, 
    $height = null)
    {
>>>>>>> 565bb27 (First commit)
        $destinationPath = public_path($directory);
        $extension = strtolower($file->getClientOriginalExtension());
        $image = null;
        // Tentukan metode pembuatan gambar berdasarkan ekstensi file
        switch ($extension) {
            case 'jpeg':
            case 'jpg':
                $image = imagecreatefromjpeg($file->getRealPath());
                break;
            case 'png':
                $image = imagecreatefrompng($file->getRealPath());
                break;
            case 'gif':
                $image = imagecreatefromgif($file->getRealPath());
                break;
            default:
                throw new \Exception('Unsupported image type');
<<<<<<< HEAD
        }
        // Resize gambar jika lebar diset
=======
    }
    // Resize gambar jika lebar diset
>>>>>>> 565bb27 (First commit)
        if ($width) {
            $oldWidth = imagesx($image);
            $oldHeight = imagesy($image);
            $aspectRatio = $oldWidth / $oldHeight;
<<<<<<< HEAD
            if (!$height) {
                $height = $width / $aspectRatio; // Hitung tinggi dengan mempertahankan aspek rasio
            }
            $newImage = imagecreatetruecolor($width, $height);
            imagecopyresampled($newImage, $image, 0, 0, 0, 0, $width, $height, $oldWidth, $oldHeight);
            imagedestroy($image);
            $image = $newImage;
        }
        // Simpan gambar dengan kualitas asli
        switch ($extension) {
            case 'jpeg':
            case 'jpg':
                imagejpeg($image, $destinationPath . '/' . $fileName);
                break;
            case 'png':
                imagepng($image, $destinationPath . '/' . $fileName);
                break;
            case 'gif':
                imagegif($image, $destinationPath . '/' . $fileName);
                break;
        }
        imagedestroy($image);
        return $fileName;
=======
        if (!$height) {
            $height = $width / $aspectRatio; // Hitung tinggi dengan mempertahankan aspek rasio
        }
        $newImage = imagecreatetruecolor($width, $height);
        imagecopyresampled($newImage, $image, 0, 0, 0, 0, $width, $height, $oldWidth, 
        $oldHeight);
        imagedestroy($image);
        $image = $newImage;
    }
    // Simpan gambar dengan kualitas asli
    switch ($extension) {
        case 'jpeg':
        case 'jpg':
            imagejpeg($image, $destinationPath . '/' . $fileName);
            break;
        case 'png':
            imagepng($image, $destinationPath . '/' . $fileName);
            break;
        case 'gif':
            imagegif($image, $destinationPath . '/' . $fileName);
            break;
    }
    imagedestroy($image);
    return $fileName;
>>>>>>> 565bb27 (First commit)
    }
}
