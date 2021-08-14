<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryList extends Component
{   public $category;
    public function mount(){
        $this->category = Category::all();
    }
    public function render()
    {
        return <<<'blade'
            <div>
                <div class="list-group mt-5">
                    @foreach($category as $cat)
                        <a herf="", class="list-group-item list-group-item-action">{{$cat->title}}</a>
                    @endforeach
                </div>
            </div>
        blade;
    }
}
