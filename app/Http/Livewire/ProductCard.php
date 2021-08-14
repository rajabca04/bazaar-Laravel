<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCard extends Component
{
    public $data;
    public function render()
    {   
        
        return <<<'blade'
            <div>
                <div class="card">
                <img src="" class="card-img-top" style="object-fit:contain;height:200px"/> 
                    <div class="card-body">
                        <h2>{{$data->discount_price}} <del>{{$data->price}}</del></h2>
                        <h4>{{$data->price}}</h4>
                        <p class="small">{{$data->categoty->title}}</p>
                    </div>
                </div>
            </div>
        blade;
    }
}
