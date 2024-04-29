<?php

namespace App\Livewire\Catalogs;

use App\Models\Catalog;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CatalogCreate extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $name;

    #[Validate('required')]
    public $code;

    #[Validate('image|max:1024')]
    public $image;

    public function save()
    {
        $validated  = $this->validate();
        $validated['image'] = $this->image->store('catalog');
        Catalog::create($validated);

    }

    public function render()
    {
        return view('livewire.catalogs.catalog-create');
    }
}
