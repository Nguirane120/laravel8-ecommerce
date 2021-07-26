<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductCategoryComponent extends Component
{
    use WithPagination;

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        session()->flash('message', "Product has been deleted sucessfuly");
    }

    public function render()
    {
        $products = Product::paginate(10);
       
        return view('livewire.admin.admin-product-category-component', ['products'=>$products])->layout("layouts.base");
    }
}
