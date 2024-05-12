<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Carbon\Carbon;

use Livewire\Attributes\Computed;
use Illuminate\Support\Collection;
use App\Models\Product;

class ShowHoodProducts extends Component
{
    public $activeTab;
    public $isHidden;

    public $limit = 10;

    public $newArrivals = false;
    public $lowestPrice = false;
    public $highestPrice = false;

    public $sizes = [];
    public $colors = [];

    public $totalProducts;

    public $loading = false;

    #[Computed]
    public function products(): Collection
    {
        $this->loading = true;

        $query = Product::query();

        $this->applyCategoryFilter($query);

        $this->applyNewArrivalsFilter($query);
        $this->applyLowestPriceFilter($query);
        $this->applyHighestPriceFilter($query);
        $this->applySizeFilter($query);
        $this->applyColorFilter($query);

        $products = $query->latest()->take($this->limit)->get();

        $this->loading = false;

        return $products;
    }

    private function applyCategoryFilter($query) {
        $query->where('category', $this->activeTab);
    }

    private function applyNewArrivalsFilter($query)
    {
        if ($this->newArrivals) {
            $query->where('created_at', '>', Carbon::now()->subDays(3));
        }
    }

    private function applyLowestPriceFilter($query)
    {
        if ($this->lowestPrice && !$this->highestPrice) {
            $query->orderBy('price', 'asc');
        }
    }

    private function applyHighestPriceFilter($query)
    {
        if ($this->highestPrice && !$this->lowestPrice) {
            $query->orderBy('price', 'desc');
        }
    }

    private function applySizeFilter($query)
    {
        if (!empty($this->sizes)) {
            $sizes = $this->sizes;
            $query->whereHas('sizes', function ($query) use ($sizes) {
                $query->whereIn('name', $sizes);
            });
        }
    }

    private function applyColorFilter($query)
    {
        if (!empty($this->colors)) {
            $colors = $this->colors;
            $query->whereHas('colors', function ($query) use ($colors) {
                $query->whereIn('name', $colors);
            });
        }
    }

    public function loadMore(): void
    {
        $this->limit += 10;
        $this->isHidden = false;
    }

    public function mount($activeTab, $isHidden)
    {
        $this->activeTab = $activeTab;
        $this->isHidden = $isHidden;
        $this->totalProducts = Product::count();
    }

    public function render()
    {
        return view('livewire.show-hood-products');
    }

    #[On('update-products')]
    public function reloadProducts($newArrivals, $lowestPrice, $highestPrice, $sizes, $colors)
    {
        $this->isHidden = false;
        $this->limit = 10;
        $this->activeTab = 'hoods';

        $this->newArrivals = $newArrivals;
        $this->lowestPrice = $lowestPrice;
        $this->highestPrice = $highestPrice;
        $this->sizes = array_map('strtolower', $sizes);
        $this->colors = array_map('strtolower', $colors);
    }
}
