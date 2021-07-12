<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CardComponent extends Component
{
    public function increaseQuantity($rowId){
      $product =  Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
    }

    public function deccreaseQuantity($rowId){
        $product =  Cart::get($rowId);
          $qty = $product->qty - 1;
          Cart::update($rowId, $qty);
      }

    public function destroy($rowId){
      Cart::remove($rowId);
      session()->flash('success', 'Item has been deleted');
    }

    public function destroyAll(){
      Cart::destroy();
    }

    public function render()
    {
        return view('livewire.card-component')->layout('layouts.base');
    }
}
