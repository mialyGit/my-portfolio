<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\MediaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function uploadFile(Request $request, MediaService $mediaService)
    {
        $path = 'temp';

        $file = $request->file('file');

        Storage::disk('public')->makeDirectory($path);

        $fileUploaded = Storage::disk('public')->put($path, $file);

        return response()->json([
            'name' => $file->getClientOriginalName(),
            'temporary_name' => $fileUploaded,
            'path' => $mediaService->getUrlFilePreview($fileUploaded, $file->getClientMimeType()),
            'size' => $mediaService->readableHumanSize($file->getSize()),
            'extension' => $file->getClientOriginalExtension(),
            'type' => $file->getClientMimeType(),
        ]);
    }

    public function removeFile(Request $request)
    {
        $filename = $request->filename;

        Storage::disk('public')->delete($filename);

        return response()->json(['success' => "$filename removed succesfully"]);
    }
}
