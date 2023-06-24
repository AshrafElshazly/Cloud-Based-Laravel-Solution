<?php 

namespace App\Http\Traits;

use App\Http\Requests\FeedbackPostRequest;

trait ImgTrait
{
    public function SaveImg(FeedbackPostRequest $request, $path)
    {
        $fileExtension = $request->img->getClientOriginalExtension();
        $fileName      = time().'.'.$fileExtension;
        $request->img->move($path,$fileName);
        
        return $fileName;
    }
}