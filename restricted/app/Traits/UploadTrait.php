<?php
namespace App\Traits;

use App\components\Watermark;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
// use Image;

trait UploadTrait
{
    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null, $withWM = false)
    {
        $name = !is_null($filename) ? $filename : Str::random(50);

        $ext = $uploadedFile->getClientOriginalExtension();

        if (!isset($ext)) {
            $ext = "jpg";
        } else if ($ext == null) {
            $ext = "jpg";
        }

        $fileName = "$name.$ext";
        $file = $uploadedFile->storeAs($folder, $fileName, $disk);
        if ($withWM) {
            Watermark::Upload($uploadedFile, $folder, $fileName);
        }
        return $file;
    }

    public function deleteOne($folder = null, $disk = 'public', $filename = null)
    {
        Storage::disk($disk)->delete($filename);
    }
}
