<?php

namespace Backpack\Banners\app\Http\Controllers\Api;

use Illuminate\Http\Request;
use \Illuminate\Database\Eloquent\ModelNotFoundException;

use Backpack\Banners\app\Models\Banner;

class BannerController extends \App\Http\Controllers\Controller
{ 

  public function index(Request $request) {
    $per_page = config('backpack.banners.per_page', 12);
    
    $banners = Banner::active()->paginate($per_page);
    return response()->json($banners);
  }

  public function show(Request $request, $id_or_slug) {
    $banner = Banner::find($id_or_slug);

    if(!$banner) {
      try {
        $banner = Banner::where('slug', $id_or_slug)->firstOrFail();
      }catch(ModelNotFoundException $e) {
        return response()->json($e->getMessage(), 404);
      }
    }

    return response()->json($banner);
  }

}
