<?php
namespace App\Services\Company\Picture;


use Illuminate\Http\Request;

class UploadImage{
     public function validationRules()
     {
          return [
               'company_profile_picture' => 'nullable', 'image', 'mimes:jpeg,png,jpg',
               'cert1' => 'nullable', 'image', 'mimes:jpeg,png,jpg',
               'cert2' => 'nullable', 'image', 'mimes:jpeg,png,jpg',
               'cert3' => 'nullable', 'image', 'mimes:jpeg,png,jpg',
               'license1' => 'nullable', 'image', 'mimes:jpeg,png,jpg',
               'license2' => 'nullable', 'image', 'mimes:jpeg,png,jpg',
               'license3' => 'nullable', 'image', 'mimes:jpeg,png,jpg',
          ];
     }

     public function storeImg(Request $request, string $location,$image)
     {
          // upload image
          $ImgNameHash = null;
          $uploadResutl = null;
          if ($this->isImgValid($request,$image)) {
               $ImgNameHash = $request->file('profile_picture')->hashName();
               $uploadResutl = $request->file($image)->move($location, $ImgNameHash);

               return $uploadResutl;
          }
          return $uploadResutl;
          // Storage::disk('public')->put($imgName,file_get_contents($request->file('image')->getRealPath()));
     }

     public function isImgValid(Request $request,$imageName)
     {
          return $request->hasFile($imageName) && $request->file($imageName)->isValid();
     }

  
}

?>