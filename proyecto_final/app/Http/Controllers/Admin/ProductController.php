<?php 

namespace App\Http\Controllers\Admin;



use App\Http\Requests;
use App\Http\Requests\SaveProductRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;
use App\Category;

class ProductController extends Controller {

	public function __construct()
	{
		//
	}

	
	public function index()
	{

		$products = products::all();
		
		//dd($products);
		return view('admin.product.index', compact('products'));


		

	
	}

	
	public function create()
	{
		//$categories = Category::orderBy('id', 'desc')->lists('id', 'name');
		$categories = Category::pluck('name','id');
		//dd($categories);
		return view('admin.product.create', compact('categories'));
	}

	
	public function store(SaveProductRequest $request)
    {
        $data = [
			'name' 			=> $request->get('name'),
			'author' 	    => $request->get('name'),
			'description' 	=> $request->get('description'),
			'extract' 		=> $request->get('extract'),
			'price' 		=> $request->get('price'),
			'image' 		=> $request->get('image'),
			'visible' 		=> $request->has('visible') ? 1 : 0,
			'category_id' 	=> $request->get('category_id')
		];

		

		$products = Products::create($data);

		$message = $products ? 'Producto agregado correctamente!' : 'El producto NO pudo agregarse!';
        
        return redirect()->route('product.index')->with('message', $message);
    }

	
	public function show(Products $products)
	{
		return $products;
	}

	
	public function edit(Products $products)
	{
		$categories = Category::pluck('name','id');
		return view('admin.product.edit', compact('categories', 'products'));
	}

	
	public function update(Products $products, SaveProductRequest $request)
{
    $products->fill($request->all());
    
    $products->visible = $request->has('visible') ? 1 : 0;
        
    $updated = $products->save();
        
    $message = $updated ? 'Producto actualizado correctamente!' : 'El Producto NO pudo actualizarse!';
        
    return redirect()->route('admin.product.index')->with('message', $message);
}

	
public function destroy(Products $products)
{
    $deleted = $products->delete();
       
    $message = $deleted ? 'Producto eliminado correctamente!' : 'El producto NO pudo eliminarse!';
        
    return redirect()->route('product.index')->with('message', $message);
}

}
