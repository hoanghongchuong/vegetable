<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partners;
use File;
class PartnersController extends Controller
{
    public function index(){
    	$partners = Partners::getList();
    	return view('admin.partners.index', compact('partners'));
    }
    public function getCreate(){

    	return view('admin.partners.create');
    }
    public function postCreate(Request $request){
    	$img = $request->file('fImages');
        $path_img='upload/hinhanh';
        $img_name='';
        if(!empty($img)){
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
        }
    	$data = new Partners();
    	$data->photo = $img_name;
    	$data->name = $request->name;
    	$data->link = $request->link;
    	$data->save();
    	return redirect(route('admin.partners.index'))->with('mess','Thêm thành công');
    }
    public function getEdit($id){
    	$data = Partners::where('id',$id)->first();
    	return view('admin.partners.edit', compact('data'));
    }
    public function postEdit(Request $request, $id){
    	$data = Partners::where('id',$id)->first();
    	$img = $request->file('fImages');
        $img_current = 'upload/hinhanh/'.$request->img_current;
        if(!empty($img)){
            $path_img='upload/hinhanh';
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
            $data->photo = $img_name;
            if (File::exists($img_current)) {
                File::delete($img_current);
            }
        }
    	$data->name = $request->name;
    	$data->link = $request->link;
    	$data->save();
    	return redirect()->back()->with('mess','Sửa thành công');
    }
    public function delete($id){
    	$partner = Partners::find($id);
    	$partner->delete();
    	return redirect()->back()->with('mess','Xóa thành công');
    }
}
