<!--Cart component-->
<section class="flex-1 flex-col justify-between w-full pt-4">
  <!--Cart header name-->
  <h2 class="font-semibold text-base md:text-xl lg:text-2xl mb-1 pl-2">Cart</h2>
  <button wire:click="destroyCart" type="button" class="text-sm text-[#260065]/50 mb-1 pl-2"><u>CLEAR CART</u></button>
  <!--Scrollable cart-->
  <section class="overflow-auto flex-1 h-[calc(100vh-17rem)] sm:h-[calc(100vh-18rem)] md:h-[calc(100vh-19rem)] lg:h-[calc(100vh-14rem)] xl:h-[calc(100vh-15rem)]">
    <!--Cart table-->
    <table class="table-auto w-full max-h-min">
      <!--Cart table head-->
      <thead class="border-b-2 border-[#260065]/50">
      <!--Head on LG-->
      <tr class="max-md:hidden max-md:text-sm">
        <th class="font-normal opacity-50">Image</th>
        <th class="font-normal text-left opacity-50">Product</th>
        <th class="font-normal opacity-50">Quantity</th>
        <th class="font-normal opacity-50">Size</th>
        <th class="font-normal opacity-50">Price</th>
        <th class="font-normal opacity-50">Action</th>
      </tr>
      <!--Head on < LG-->
      <tr class="md:hidden max-md:text-sm">
        <th class="font-normal opacity-50">Image</th>
        <th class="font-normal opacity-50" colspan="5">Product</th>
      </tr>
      </thead>
      <!--Head end-->
      <!--Card body-->
      <tbody>
      @if (count(Cart::content()))
        @foreach(Cart::content() as $row)
          @php
            $bgColor = $loop->iteration % 2 ? 'bg-[#F5F5F5]' : 'bg-white';
          @endphp
          <!--Cart item on > LG-->
          <tr class="max-md:hidden {{ $bgColor }}">
            <!--Image-->
            <td>
              <div class="flex justify-center items-center">
                <img src="{{ asset('storage/uploads/' .$row->options->image) }}" alt="{{ $row->options->image }}" class="w-20 h-20 object-contain">
              </div>
            </td>
            <!--Image end-->
            <!--Product-->
            <td class="py-2">
              <div class="flex flex-col justify-between h-full">
                <h5 class="font-medium mb-2">{{ $row->name }}</h5>
                <div class="text-sm">
                  <h6>Category: {{ $row->options->category }}</h6>
                  <h6>Color: {{ $row->options->color }}</h6>
                  <h6>Material: {{ $row->options->material }}</h6>
                </div>
              </div>
            </td>
            <!--Product end-->
            <!--Quantity-->
            <td>
              <div class="flex flex-row justify-center gap-x-2 font-bold">
                  <button wire:click="decreaseQuantity('{{ $row->rowId }}')" class="decr-button">-</button>
                  <h6>{{ $row->qty }}</h6>
                  <button wire:click="increaseQuantity('{{ $row->rowId }}')" class="incr-button">+</button>
              </div>
            </td>
            <!--Quantity end-->
            <!--Sizes-->
            <td class="text-center font-medium">
              <h6>{{ $row->options->size }}</h6>
            </td>
            <!--Sizes end-->
            <!--Price-->
            <td class="text-center font-medium min-w-24">
              <h6>{{ $row->subtotal }}$</h6>
            </td>
            <!--Price end-->
            <!--Actions-->
            <td class="text-center font-medium">
              <a wire:click="deleteCartItem('{{ $row->rowId }}')" href="#" class="underline decoration-2 hover:text-[#531DACFF]">Delete</a>
            </td>
            <!--Actions end-->
          </tr>
          <!--Cart item on > LG end-->
          <!--Cart item on < LG-->
          <tr class="md:hidden {{ $bgColor }}">
            <!--Image-->
            <td>
              <div class="flex justify-center items-center">
                <img src="{{ asset('storage/uploads/' .$row->options->image) }}" class="w-20 h-20 object-contain" alt="{{ $row->options->image }}">
              </div>
            </td>
            <!--Image end-->
            <!--Product-->
            <td class="py-2" colspan="5">
              <div class="flex flex-col justify-between h-full text-sm">
                <!--Product name-->
                <h5 class="font-medium mb-2">{{ $row->name }}</h5>
                <!--Size-->
                <h6>Size: {{ $row->options->size }}</h6>
                <!--Bottom buttons-->
                <div class="flex flex-row justify-between pt-4 pr-4 sm:pr-8">
                  <!--Quantity-->
                  <div class="flex flex-col">
                    <h6 class="opacity-50">Quantity</h6>
                    <div class="flex flex-row justify-center gap-x-2 font-bold">
                      <button wire:click="decreaseQuantity('{{ $row->rowId }}')"  class="decr-button">-</button>
                      <h6>{{ $row->qty}}</h6>
                      <button wire:click="increaseQuantity('{{ $row->rowId }}')"  class="incr-button">+</button>
                    </div>
                  </div>
                  <!--Quantity end-->
                  <!--Price-->
                  <div class="flex flex-col min-w-16">
                    <h6 class="opacity-50">Price</h6>
                    <h6 class="text-center font-medium">{{ $row->subtotal }}$</h6>
                  </div>
                  <!--Price end-->
                  <!--Actions-->
                  <div class="flex flex-col">
                    <h6 class="opacity-50">Action</h6>
                    <a wire:click="deleteCartItem('{{ $row->rowId }}')" href="#" class="text-center font-medium underline decoration-2 focus:text-[#531DACFF] hover:text-[#531DACFF]">Delete</a>
                  </div>
                  <!--Actions end-->
                </div>
                <!--Bottom buttons end-->
              </div>
            </td>
            <!--Product end-->
          </tr>
          <!--Cart item on < LG end-->
        @endforeach
      @else
      <div class="alert alert-info m-0 ml-2" role="alert">
          Your Cart is <b>empty</b>. Go to the <a href="/products"><u><b>shop</b></u></a>.
      </div>
      @endif
      </tbody>
      <!--Card body end-->
    </table>
    <!--Cart table end-->
  </section>
  <!--Scrollable cart end-->
  <!--Subtotal and checkout-->
  <section class="flex grow md:justify-end border-t-2 border-[#260065]/50 py-4 pl-4 md:pr-4">
    <div class="flex flex-col justify-end gap-y-2">
      <!--Subtotal-->
      <h4 class="text-md md:text-lg lg:text-xl font-bold">Subtotal: {{ Cart::subtotal() }}$</h4>
      <!--Action buttons-->
      <div class="flex flex-row gap-x-2">
        <button class="block opacity-75 text-xs lg:text-md xl:text-lg font-semibold rounded-lg cursor-pointer border-2 border-[#260065] mx-auto px-4 py-2 lg:px-6 transition hover:text-white hover:bg-[#260065] hover:opacity-100 hover:transition-250" onclick="window.location.href='/products'">KEEP SHOPPING</button>
        <button class="block text-xs lg:text-md xl:text-lg font-bold border-0 rounded-lg cursor-pointer bg-[#260065] text-white px-8 py-2 lg:px-12 mx-auto hover:bg-[#531DACFF] transition hover:transition" wire:click="goToCheckout()">CHECKOUT</button>
      </div>
      <!--Action buttons-->
    </div>
  </section>
  <!--Subtotal and checkout end-->
</section>
<!--Cart component end-->
