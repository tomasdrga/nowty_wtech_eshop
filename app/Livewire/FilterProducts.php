<?php

namespace App\Livewire;

use Livewire\Component;

class FilterProducts extends Component
{
    public $sizes = [
      'XS' => false,
      'S'  => false,
      'M'  => false,
      'L'  => false,
      'XL' => false,
      'XXL'=> false
    ];
    public $colors = [
      'denim' => false,
      'black' => false,
      'wild' => false,
    ];
    public $newArrivals = false;

    public $lowestPrice = false;
    public $highestPrice = false;

    protected $listeners = ['lowestPriceUpdated' => 'uncheckHighestPrice', 'highestPriceUpdated' => 'uncheckLowestPrice', 'activeTabChanged'];

    public $selectedSizes = [];
    public $selectedColors = [];

    public $activeTab;

    public function updatedSizes()
    {
        $this->selectedSizes = [];

        foreach ($this->sizes as $size => $selected) {
            if ($selected) {
                $this->selectedSizes[] = $size;
            }
        }
    }

    public function updatedColors()
    {
        $this->selectedColors = [];

        foreach ($this->colors as $color => $selected) {
            if ($selected) {
                $this->selectedColors[] = $color;
            }
        }
        \Debugbar::info($this->selectedColors);
    }

    public function activeTabChanged($activeTab)
    {
        $this->activeTab = $activeTab;
    }

    public function handleCheckbox($checkboxName)
    {
        if ($checkboxName == 'lowestPrice' && $this->lowestPrice) {
            $this->highestPrice = false;
        } elseif ($checkboxName == 'highestPrice' && $this->highestPrice) {
            $this->lowestPrice = false;
        }
    }

    public function render()
    {
        return view('livewire.filter-products');
    }

    public function applyFilters()
    {
     $componentToBeDispatchedTo = '';

        switch ($this->activeTab) {
            case 'new':
                $componentToBeDispatchedTo = 'show-new-products';
                break;
            case 'all':
                $componentToBeDispatchedTo = 'show-products';
                break;
            case 'bottoms':
                $componentToBeDispatchedTo = 'show-bottom-products';
                break;
            case 'hoods':
                $componentToBeDispatchedTo = 'show-hood-products';
                break;
            case 'tees':
                $componentToBeDispatchedTo = 'show-tee-products';
                break;
            case 'hats':
                $componentToBeDispatchedTo = 'show-hat-products';
                break;
            case 'accessories':
                $componentToBeDispatchedTo = 'show-accessories-products';
                break;
            default:
                $componentToBeDispatchedTo = 'show-products';
                break;
        }
        $this->dispatch('update-products', newArrivals: $this->newArrivals,
        lowestPrice: $this->lowestPrice, highestPrice: $this->highestPrice,
        sizes: $this->selectedSizes, colors: $this->selectedColors)->to($componentToBeDispatchedTo);
    }
}
