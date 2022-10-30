<?php
namespace  App\Services;
use Illuminate\Http\Request;

class PictureServices{
     public function isImgValid(Request $request,$imgFileName) : bool
     {
          return $request->hasFile($imgFileName) && $request->file($imgFileName)->isValid();
     }

     public function moveImg($imgFile,$location): string
     {
          $ImgNameHash = $imgFile->hashName();
          return $ImgNameHash ? $imgFile->move($location, $ImgNameHash) : 'false';
     }    
}

?>