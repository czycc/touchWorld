<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class UploadController extends Controller
{
    public function image(Request $request)
    {
        if (!is_null($request->file('wangEditorH5File'))){
            $url= Storage::disk('admin')
                ->putFile('images', new File($request->file('wangEditorH5File')));
        }elseif (!is_null($request->file('wangEditorPasteFile'))){
            $url= Storage::disk('admin')
                ->putFile('images', new File($request->file('wangEditorPasteFile')));
        }else{
            $url= Storage::disk('admin')
                ->putFile('images', new File($request->file('wangEditorDragFile')));
        }
        return env('APP_URL').'/uploads/'.$url;
    }
}
