<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Services\CategoryService;
class CategoryController extends Controller
{

    public $CategoryService;
    function __construct(CategoryService $CategoryService){
$this->CategoryService=$CategoryService;
    }


    function createNewCategoryPage(){
        return view('category.createCategory');
    }
#############################################


function createNewCategory(CategoryRequest $req){
$category=$this->CategoryService->addNewCategory($req);
return back();
}

}
