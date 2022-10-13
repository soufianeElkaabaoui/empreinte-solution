<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if ($request->has('image')) {
            $path = $request->file('image')->store('images'); // upload the image.
            $params = [
                'image_path' => $path,
            ];
            // It will check if this request is made for update:
            if ($request->has('param_name')) {
                $params[$request->param_name] = $request->param_val;
            }
            return redirect()->route($request->to, $params)->withInput();
        }
    }
}
