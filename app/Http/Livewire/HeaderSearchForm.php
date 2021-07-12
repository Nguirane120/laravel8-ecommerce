<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class HeaderSearchForm extends Component
{
    public $search;
    public $product_cat;
    public $product_cat_id;
    public function mount(){
        $this->product_cat = 'All Categories';
        $this->fill(request()->only('search', 'product_cat', 'product_cat_id'));
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.header-search-form', ['categories'=>$categories]);
    }
}
