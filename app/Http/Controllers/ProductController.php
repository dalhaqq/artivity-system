<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Product;
use App\Models\Category;
use App\Models\Finishing;
use App\Models\ProductVideo;
use Illuminate\Http\Request;
use App\Models\ProductPicture;
use App\Models\ProductCategory;
use App\Models\ProductMaterial;
use App\Models\ProductFinishing;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = Category::All();
        if($request->search){
            dd($request->search);
        }
        $product = Product::All();
        return view('pages.dashboard.product.all-product', ["products"=>$product, "category"=>$category] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kertas = Stock::Where('material_categories_id',1)->get();
        $category = Category::All();
        $finishing = Finishing::All();
        return view('pages.dashboard.product.add-product',[
            "category" => $category,
            "papers" => $kertas,
            "finishings" => $finishing
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['users_id'] = Auth::user()->id;

        // add to product
        $product = Product::create($data);
        // add to product categories
        foreach ($data['kategori'] as $key => $value) {
            $product_categories = new ProductCategory;
            $product_categories->product_id = $product->id;
            $product_categories->category_id = $value;
            $product_categories->save();
        }
        // add to product material
        if($request['kertas'][0] != null){
            foreach ($data['kertas'] as $key => $value) {
                $product_material = new ProductMaterial;
                $product_material->product_id = $product->id;
                $product_material->stock_id = $value;
                $product_material->save();
            }
        }
        // add to product finishing
        if($request['finishing'][0] != null){
            foreach ($data['finishing'] as $key => $value) {
                $product_finishing = new ProductFinishing;
                $product_finishing->product_id = $product->id;
                $product_finishing->finishing_id = $value;
                $product_finishing->save();
            }
        }
        // add to product picture
        if($request->hasfile('picture'))
        {
            foreach($request->file('picture') as $file)
            {
                $path = $file->store(
                    'assets/product/picture', 'public'
                );

                $ProductPicture = new ProductPicture;
                $ProductPicture->product_id = $product['id'];
                $ProductPicture->picture_file = $path;
                $ProductPicture->save();
            }
        }
        // add to product video
        if($request->hasfile('video'))
        {
            foreach($request->file('video') as $file)
            {
                $path = $file->store(
                    'assets/product/video', 'public'
                );

                $Productvideo = new ProductVideo;
                $Productvideo->product_id = $product['id'];
                $Productvideo->video_file = $path;
                $Productvideo->save();
            }
        }

        // toast()->success('Save has been success');
        return redirect()->route('manage-product.index')->with('berhasil', 'menambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($manage_product)
    {
        $product = Product::find($manage_product);
        // dd($product->picture);
        return view('pages.dashboard.product.show-product', ["product" => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($manage_product)
    {
        $product = Product::find($manage_product);
        $category = Category::All();
        $finishing = Finishing::All();
        $pinishing = Finishing::All();
        $kertas = Stock::Where('material_categories_id',1)->get();

        return view('pages.dashboard.product.edit-product',
        [
            "product" => $product,
            "category" => $category,
            "finishing" => $finishing,
            "pinishing" => $finishing,
            "papers" => $kertas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, $manage_product)
    {
        $product = $product->find($manage_product);

        $product_categories = ProductCategory::where('product_id', $manage_product);
        $product_finishing =  ProductFinishing::where('product_id', $manage_product);
        $product_material =  ProductMaterial::where('product_id', $manage_product);
        $product_categories->delete();
        $product_finishing->delete();
        $product_material->delete();

        // UPDATE PRODUK
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        // add to product categories
        foreach ($request['kategori'] as $key => $value) {
            $product_categories = new ProductCategory;
            $product_categories->product_id = $product->id;
            $product_categories->category_id = $value;
            $product_categories->save();
        }
        // add to product materials
        if($request->has('kertas')){
            foreach ($request['kertas'] as $key => $value) {
                $product_material = new ProductMaterial;
                $product_material->product_id = $product->id;
                $product_material->stock_id = $value;
                $product_material->save();
            }
        }
        // add to product finishing
        if($request->has('finishing')){
            foreach ($request['finishing'] as $key => $value) {
                $product_finishing = new ProductFinishing;
                $product_finishing->product_id = $product->id;
                $product_finishing->finishing_id = $value;
                $product_finishing->save();
            }
        }
        // add to product picture
        if($request->hasfile('picture'))
        {
            foreach($request->file('picture') as $file)
            {
                $path = $file->store(
                    'assets/product/picture', 'public'
                );
                $ProductPicture = new ProductPicture;
                $ProductPicture->product_id = $product['id'];
                $ProductPicture->picture_file = $path;
                $ProductPicture->save();
            }
        }

        return redirect()->route('manage-product.show', $product->id)->with('berhasil', 'mengubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($manage_product)
    {
        $Product = Product::find($manage_product);
        $product_categories = ProductCategory::where('product_id', $manage_product);
        $product_finishing =  ProductFinishing::where('product_id', $manage_product);
        $product_categories->delete();
        $product_finishing->delete();
        $Product->delete();
        return redirect()->route('manage-product.index')->with('berhasil', 'menghapus');
    }
    public function hapusfoto($idfoto){
        $foto = ProductPicture::find($idfoto);

        if (Storage::disk('public')->exists($foto->picture_file)) {
            Storage::disk('public')->delete($foto->picture_file);
        }
        $foto->delete();

        return redirect()->back()->with('berhasil', 'menghapus');
    }
}
