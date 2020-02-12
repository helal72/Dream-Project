<?php

namespace App\Http\Controllers\API;

use App\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostCategoryController extends Controller
{
  
    public function index()
    {
        $tag = \App\PostCategory::latest()->get();

        return response()->json([
            'tag' => $tag
        ]);
    }

    public function store(Request $request)
    {
        $request -> validate([
            'categoryName' => 'required'
        ]);
        \App\PostCategory::create([
            'categoryName'=>$request->categoryName,
            'user_id'=>$request->user_id
        ]);
        return response()->json([
            'message'=> 'Data Submitted Successfully'
        ]);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'categoryName' => 'required'
          ]);
          
          $category = \App\PostCategory::find($id);
          
          $category->update($request->all());
  
          return response()->json([
            'message' => 'Data submitted successfully'
          ]);
    }

    public function destroy($id)
    {
        //
    }
}
