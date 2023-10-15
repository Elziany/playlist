<?php 
namespace App\Repository;
use App\Models\Category;
class categoryRepository{
    function addCategoryToDatabase($req)
    {
        try{
            $category=Category::create([
                'name'=>$req->name
            ]);
            return $category;
        
        }
        catch(\Exception $ex){
            return back()->withErrors('database error');
        }
    }
}