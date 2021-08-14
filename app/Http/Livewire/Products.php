<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{   
    public $products;

    public function mount(){
        $this->products = Product::all();
    }
    public function render()
    {
        return <<<'blade'
            <div>
                <div class="container">
                    <div class="row">
                    @foreach($products as $p)
                        <div class="col-lg-3">@livewire('ProductCard',["data"=>$p])</div>
                    </div>
                    @endforeach
                </div>
            </div>
        blade;
    }
}
