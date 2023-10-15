<?php
namespace App\Services;
use App\Repository\CategoryRepository;
class CategoryService{
public $categoryRepository;
function __construct(CategoryRepository $categoryRepository){
    $this->categoryRepository=$categoryRepository;
}
function addNewCategory($req){
   $category= $this->categoryRepository->addCategoryToDatabase($req);
   return $category;
}
}