<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class S3Controller
{
    public function upload(Request $request)
    {
        $upload_file = $request->file('upload_file');

        if(!empty($upload_file)) {
            // ※オプション（ファイルダウンロード、削除時に使用するS3でのファイル保存名、アップロード先のパスを取得します。）
            // アップロードファイルurlを取得
            $path = $upload_file->storeAs('images', $upload_file->getClientOriginalName(), 's3');
            \Log::info('Uploaded file path: ' . $path);
            return view("upload");
        }
    }
}