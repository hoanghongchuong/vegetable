<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCateRequest;

use Illuminate\Http\Request;
use App\ProductCate;
use Input, File;
use Validator;

class ProductCateController extends Controller {

	public function getDanhSach()
    {
        $data = ProductCate::all();
    	return view('admin.productcate.list', compact('data'));
    }
    public function getAdd()
    {
        $parent = ProductCate::select('id','name','parent_id')->get()->toArray();
    	return view('admin.productcate.add', compact('parent'));
    }
    public function postAdd(ProductCateRequest $request)
    {
        $img = $request->file('fImages');
        $path_img='upload/product';
        $img_name='';
        if(!empty($img)){
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
        }
        $img2 = $request->file('fImagesBg');
        $path_img2='upload/product';
        $img_name2='';
        if(!empty($img2)){
            $img_name2=$img2->getClientOriginalName();
            $img2->move($path_img2,$img_name2);
        }
    	$cate = new ProductCate;
        $cate->parent_id = $request->txtProductCate;
        $cate->name = $request->txtName;
        $cate->alias = changeTitle($request->txtName);
        $cate->photo = $img_name;
         $cate->background = $img_name2;
        $cate->title = $request->txtTitle;
        $cate->keyword = $request->txtKeyword;
        $cate->description = $request->txtDescription;
        $cate->stt = $request->stt;

        if($request->status=='on'){
            $cate->status = 1;
        }else{
            $cate->status = 0;
        }
        $cate->save();
        return redirect()->route('admin.productcate.index')->with('status','Thêm mới thành công !');
    }
    public function getEdit(Request $request)
    {
        $id= $request->get('id');
        //Tìm article thông qua mã id tương ứng
        $data = ProductCate::find($id);
        if(!empty($data)){
            if($request->get('hienthi')>0){
                if($data->status == 1){
                    $data->status = 0; 
                }else{
                    $data->status = 1; 
                }
                $data->update();
                return redirect()->route('admin.productcate.index')->with('status','Cập nhật thành công !');
            }
            
            $parent = ProductCate::orderBy('stt', 'asc')->get()->toArray();
           // Gọi view edit.blade.php hiển thị bải viết
            return view('admin.productcate.edit',compact('data','parent','id'));
        }else{
            $data = ProductCate::all();
            return redirect()->route('admin.productcate.index')->with('status','Dữ liệu không có thực');
        }
    }

    public function update(Request $request)
    {
        $this->validate($request,
            ["txtName" => "required"],
            ["txtName.required" => "Bạn chưa nhập tên danh mục"]
        );
        $id=$request->get('id');
        $product_cate = ProductCate::find($id);
        if(!empty($product_cate)){
            $img = $request->file('fImages');
            $img_current = 'upload/product/'.$request->img_current;
            if(!empty($img)){
                $path_img='upload/product';
                $img_name=time().'_'.$img->getClientOriginalName();
                $img->move($path_img,$img_name);
                $product_cate->photo = $img_name;
            }

            $img2 = $request->file('fImagesBg');
            $img_current2 = 'upload/product/'.$request->img_current2;
            if(!empty($img2)){
                $path_img2='upload/product';
                $img_name2=time().'_'.$img2->getClientOriginalName();
                $img2->move($path_img2,$img_name2);
                $product_cate->background = $img_name2;
                if (File::exists($img_current2)) {
                    File::delete($img_current2);
                }
            }
            
            if($request->txtProductCate!= $id && $request->txtProductCate>0){
                $product_cate->parent_id = $request->txtProductCate;
            }else{
                $product_cate->parent_id = 0;
            }
            $product_cate->name = $request->txtName;
            $product_cate->alias = changeTitle($request->txtName);
            $product_cate->title = $request->txtTitle;
            $product_cate->keyword = $request->txtKeyword;
            $product_cate->description = $request->txtDescription;
            $product_cate->stt = $request->stt;

            if($request->status=='on'){
                $product_cate->status = 1;
            }else{
                $product_cate->status = 0;
            }

            $product_cate->save();

            return redirect('admin/productcate/edit?id='.$id)->with('status','Cập nhật thành công');
        }else{
            return redirect('admin/productcate/')->with('status','Dữ liệu không có thực');
        }
    }
    public function getDelete($id)
    {
        $product = ProductCate::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.productcate.index');
    }
    public function getDeleteList($id){
        $listid = explode(",",$id);
        foreach($listid as $listid_item){
            $product = ProductCate::findOrFail($listid_item);
            $product->delete();
            //File::delete('upload/product/'.$product->photo);
        }
        return redirect()->route('admin.productcate.index');
    }
}
