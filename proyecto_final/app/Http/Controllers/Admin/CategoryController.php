<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
    //



public function index()
	{
		$categories = Category::all();
        //dd($categories);
        
        return view('admin.category.index', compact('categories'));
        
        
        


		
    } 


    public function create()
	{
		return view('admin.category.create');
	}


    public function store(Request $request)
	{

           // return $request->all();
           $this->validate($request,  [
               'name' => 'required|unique:categories|max:100',
               'description' => 'required',
               'author' => 'required',
               'type' => 'required'

           ]);

           
                $category = category::create([
                    'name' => $request->get('name'),
                    'description' => $request->get('description'),
                    'author' => $request->get('author'),
                    'type' => $request->get('type')
                ]);

                $message = $category ? 'Categoria agregada' : 'la Categoria NO puedo agregarse!';

                return redirect()->route('category.index')->with('message', $message);

               }



    public function show(category $category)
	{

             return $category;

    }



    public function edit(category $category)
	{

        return view('admin.category.edit', compact('category'));

    }


    public function update(Request $request, category $category)
	{

        $category->fill($request->all());
        
        $updated = $category->save();

        $message = $updated  ? '¡Categoría actualizada correctamente!' : 'La Categoria NO pudo actualizarse!';

        return redirect()->route('category.index')->with('message', $message);
         

    }



    public function destroy(category $category)
	{
            
            $deleted = $category->delete();
            
            $message = $deleted ? '¡Categoría eliminada correctamente!' : 'La Categoria NO pudo eliminarse';
            
        return redirect()->route('category.index')->with('message', $message);
        

    }




}





 