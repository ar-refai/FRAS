<?php

namespace App\Http\Controllers\Admin\Image;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Photo;
class Image_cont extends Controller
{
    // this is the index image function
    public function index(Request $request){
        $photos = Photo::select('*')->get();
        $arr['photos'] = $photos;
        return view('Admin.Image.index_view',$arr);      
    }
    // this is the add image function
    public function add(Request $request){
        if($request->isMethod('post')){
            $photo = $request->file('photo');
            $path = $photo->storeAs('user',$photo->getClientOriginalName(),'image');
              Photo::create([
                 'path' => $path,
             ]);              #this should be like this     
            return redirect()->back();
            }
        else{
            return view('Admin.Image.add_view');
        }
    }

    // this is the delete image function
    public function delete(Request $request ,$id){
        $photo = Photo::find($id);
        if($request->isMethod('post')){
            try{
                // dd(public_path('image/'. $photo->path));
                unlink(public_path('image/'. $photo->path));
                
                $photo->delete();
            }catch(\Exception $exception){
            }
            return redirect(route('Image.Index'));
        }else{
            $arr['photo'] = $photo;
            return view('Admin.Image.delete_view' ,$arr);
        }
    }


}
