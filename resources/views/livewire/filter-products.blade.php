<!--Dropdown-->
<div class="relative z-10">
  <!--Dropdown button-->
  <button id="dropdownButton" data-dropdown-toggle="dropdownMenu" class="inline-flex items-center text-xs md:text-sm lg:text-base font-semibold text-center rounded-lg pl-4 py-2.5" type="button">
    FILTER
  </button>
  <!--Dropdown button end-->
  <!--Dropdown menu-->
  <div id="dropdownMenu" class="absolute top-full right-0 -mt-2 w-48 md:w-56 hidden rounded-lg bg-white divide-y-2 divide-[#260065]/50 outline outline-2 outline-[#260065]" wire:ignore>
    <!--General filters-->
    <ul class="text-xs md:text-sm px-4 py-2 space-y-3" aria-labelledby="dropdownButton">
      <li>
        <div class="flex items-center">
          <input id="checkbox-item-10" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2" wire:model="newArrivals">
          <label for="checkbox-item-10" class="ms-2">New arrivals</label>
        </div>
      </li>
      <li>
        <div class="flex items-center">
          <input id="checkbox-item-11" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2" wire:model="lowestPrice" wire:change="handleCheckbox('lowestPrice')" onclick="handlePriceChange('checkbox-item-11')">
          <label for="checkbox-item-11" class="ms-2">Lowest price</label>
        </div>
      </li>
      <li>
        <div class="flex items-center">
          <input id="checkbox-item-12" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2" wire:model="highestPrice" wire:change="handleCheckbox('highestPrice')" onclick="handlePriceChange('checkbox-item-12')">
          <label for="checkbox-item-12" class="ms-2">Highest price</label>
        </div>
      </li>
    </ul>
    <!--General filters end-->
    <!--Size filters-->
    <section>
      <p class="block text-xs md:text-sm font-medium px-4 pt-2">Size</p>
      <div class="flex flex-row">
        <ul class="text-xs md:text-sm w-1/2 px-4 py-3 space-y-3" aria-labelledby="dropdownCheckboxButton">
          <li>
            <div class="flex items-center">
              <input id="checkbox-item-1" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2" wire:model="sizes.XS">
              <label for="checkbox-item-1" class="ms-2">XS</label>
            </div>
          </li>
          <li>
            <div class="flex items-center">
              <input id="checkbox-item-3" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2" wire:model="sizes.M">
              <label for="checkbox-item-3" class="ms-2">M</label>
            </div>
          </li>
          <li>
            <div class="flex items-center">
              <input id="checkbox-item-5" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2" wire:model="sizes.XL">
              <label for="checkbox-item-5" class="ms-2">XL</label>
            </div>
          </li>
        </ul>
        <ul class="text-xs md:text-sm w-1/2 px-4 py-3 space-y-3" aria-labelledby="dropdownCheckboxButton">
          <li>
            <div class="flex items-center">
              <input id="checkbox-item-2" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2" wire:model="sizes.S">
              <label for="checkbox-item-2" class="ms-2">S</label>
            </div>
          </li>
          <li>
            <div class="flex items-center">
              <input id="checkbox-item-4" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2" wire:model="sizes.L">
              <label for="checkbox-item-4" class="ms-2">L</label>
            </div>
          </li>
          <li>
            <div class="flex items-center">
              <input id="checkbox-item-6" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2" wire:model="sizes.XXL">
              <label for="checkbox-item-6" class="ms-2">XXL</label>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!--Size filters end-->
    <!--Material filters-->
    <section>
      <p class="block text-xs md:text-sm font-medium px-4 pt-2">Color</p>
      <ul class="text-xs md:text-sm px-4 py-3 space-y-3" aria-labelledby="dropdownCheckboxButton">
        <li>
          <div class="flex items-center">
            <input id="checkbox-item-7" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2" wire:model="colors.Black">
            <label for="checkbox-item-7" class="ms-2">Black</label>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <input id="checkbox-item-8" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2" wire:model="colors.Denim">
            <label for="checkbox-item-8" class="ms-2">Denim</label>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <input id="checkbox-item-9" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2" wire:model="colors.Wild">
            <label for="checkbox-item-9" class="ms-2">Wild</label>
          </div>
        </li>
      </ul>
    </section>
    <!--Material filters end-->
    <!-- Apply filters -->
    <section>
      <button class="block text-sm xl:text-md font-bold border-0 rounded-lg cursor-pointer bg-[#260065] text-white my-4 px-8 py-2 lg:px-12 mx-auto hover:bg-[#531DACFF] transition hover:transition" wire:click="applyFilters()">APPLY</button>
    </section>
    <!-- Apply filters end -->
  </div>
  <!--Dropdown menu end-->
</div>
<!--Dropdown end-->
