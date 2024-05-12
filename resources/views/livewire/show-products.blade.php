<div id="{{ $activeTab }}" class="tab-content {{ $isHidden ? 'hidden' : '' }} grid max-[350px]:grid-cols-1 grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 items-start justify-items-center gap-8 px-4 sm:px-16 py-8">
  <!-- Loading indication -->
    @if ($loading)
      <div wire:loading
            class="w-16 h-16 border-4 border-violet-400 border-solid animate-spin">
      </div>
    @else
    @forelse($this->products as $product)
      <livewire:show-product :$product :key="$product->id">
    @empty
      <p>No Products Found</p>
    @endforelse

    @if($this->limit < $this->totalProducts)
      <div x-intersect.full="$wire.loadMore()" class="p-4">
        <div wire:loading wire:target="loadMore"
              class="w-16 h-16 border-4 border-violet-400 border-solid animate-spin">
        </div>
      </div>
    @endif
  @endif
</div>
