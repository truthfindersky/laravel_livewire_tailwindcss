<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductComponent extends Component
{
    public $products, $name, $description, $price, $product_id;
    public $layout = 'layouts.app';

    public function render()
    {
        $this->products = Product::all();
        return view('livewire.product-component');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ]);

        $this->resetFields();
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $product = Product::find($this->product_id);
        $product->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ]);

        $this->resetFields();
    }

    public function delete($id)
    {
        Product::find($id)->delete();
    }

    private function resetFields()
    {
        $this->name = '';
        $this->description = '';
        $this->price = '';
    }
}
