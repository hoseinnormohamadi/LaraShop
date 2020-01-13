<?php

namespace App\Http\Controllers\Api\v1;

use App\Course;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function image(Request $request, Filesystem $filesystem)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('image');
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $day = Carbon::now()->day;
        $imagepath = "/upload/images/{$year}/{$month}/{$day}";
        $filename = $file->getClientOriginalName();
        if ($filesystem->exists(public_path("{$imagepath}/{$filename}"))) {
            $filename = Carbon::now()->timestamp."-{$filename}";
        }
        $file->move(public_path($imagepath), $filename);
        return response([
            'Data' => [
                'Image-Url' => url("{$imagepath}/{$filename}")
            ],
            'Status' => 'Success'
        ]);
    }
}
