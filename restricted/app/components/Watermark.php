<?php
namespace App\components;

class Watermark
{
    public static function watermark_image($target, $wtrmrk_file, $newcopy)
    {
        $watermark = imagecreatefrompng($wtrmrk_file);
        imagealphablending($watermark, false);
        imagesavealpha($watermark, true);
        $img = imagecreatefromjpeg($target);
        $img_w = imagesx($img);
        $img_h = imagesy($img);
        $wtrmrk_w = imagesx($watermark);
        $wtrmrk_h = imagesy($watermark);
        $dst_x = ($img_w / 2) - ($wtrmrk_w / 2);
        $dst_y = ($img_h / 2) - ($wtrmrk_h / 2);
        $sx = 100;
        $sy = 100;
        $posX = imagesx($img) - $sx - 10;
        $posY = imagesy($img) - ($sy / 2) - 10;
        imagecopy($img, $watermark, $posX, $posY, 0, 0, $wtrmrk_w, $wtrmrk_h);
        imagejpeg($img, $newcopy, 100);
        imagedestroy($img);
        imagedestroy($watermark);
    }

    public static function Upload($file, $uploadTo, $namaFile)
    {
        $jenis_konten = $file->getMimeType();

        if (preg_match("/image/", $jenis_konten)) {
            $file_sementara = $file->getRealPath();
            $file_dipermanenkan = storage_path("app\public\\$uploadTo\\") . $namaFile;
            $filename = $file_sementara;
            $percent = 1;

            // ciplak resolusi
            // pendeteksian ini masih bisa lolos dgn teknik RGB
            $size = getimagesize($filename); //diambil dari file temp, bukan $_FILE['mime']
            $width = $size[0];
            $height = $size[1];
            $mime = $size['mime'];

            //jika butuh memperkecil gambar
            $new_width = $width * $percent;
            $new_height = $height * $percent;
            // patenkan width
            $new_width = 600;
            $new_height = $width == 0 ? 0 : $height * $new_width / $width;

            // buat gambar baru

            if (preg_match('/png|jpeg|jpg|gif/', $mime)) {
                $image_p = imagecreatetruecolor($new_width, $new_height);
                if ((preg_match('/jpg/', $mime)) || (preg_match('/jpeg/', $mime))) {
                    $image = imagecreatefromjpeg($filename);
                }
                if (preg_match('/png/', $mime)) {
                    $image = imagecreatefrompng($filename);
                }
                if (preg_match('/gif/', $mime)) {
                    $image = imagecreatefromgif($filename);
                }
            }
            if (!@imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height)) {
                $image_p = imagecreate(200, 100);
                $bg = imagecolorallocate($image_p, 255, 255, 255);
                $black = imagecolorallocate($image_p, 0, 0, 0);
                imagestring($image_p, 5, 2, 2, 'Gambar Korupsi', $black);
            }

            // Output
            imagejpeg($image_p, $file_dipermanenkan, 100);
            Watermark::watermark_image($file_dipermanenkan, public_path('/wm.png'), $file_dipermanenkan);
            return $namaFile;

        } else {
            return "Jenis file yang anda unggah bukan gambar.";
        }
    }

}
