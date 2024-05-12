<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Product;

class ShowProduct extends Component
{
    public Product $product;

    public function render()
    {
        return view('livewire.show-product');
    }
}
