<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Nowty Clothing • {{$product->name}}</title>
  <meta name="description" content="Product detail page for Nowty Clothing." />

  <link rel="icon" href="/img/favicon/nowty_face.png" sizes="any" />
  <link rel="apple-touch-icon" href="/img/favicon/nowty_face.png" />

  <link rel="stylesheet" href="../css/style.css" />
  @livewireStyles
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
  <!--Body-->
  <main class="grid grid-rows-10 grid-cols-6 gap-y-4 grid-flow-col-dense max-w-screen h-screen max-md:overflow-auto lg:overflow-hidden">
    <!--Sidebar, only on LG and up-->
    <aside class="max-lg:hidden lg:row-span-10 bg-[#F5F5F5]">
      <nav class="flex flex-col justify-between h-full">
        <a class="w-full h-auto" href="/">
          <img class="h-auto max-w-full mx-auto" src="../img/logo/nowty_animation_croped.gif" alt="Nowty Clothing logo" />
        </a>
        <ul class="flex flex-col pb-4 pl-4">
          <li class="leading-relaxed xl:leading-10 font-bold text-xl xl:text-2xl 2xl:text-3xl hover:text-[#531DACFF]"><a href="/products">Products</a></li>
          @auth
            @if(Auth::user()->role == 'admin')
              <li class="leading-relaxed xl:leading-10 font-bold text-xl xl:text-2xl 2xl:text-3xl hover:text-[#531DACFF]"><a href="/admin">Dashboard</a></li>
            @else
              <li class="leading-relaxed xl:leading-10 font-bold text-xl xl:text-2xl 2xl:text-3xl hover:text-[#531DACFF]"><a href="/account">Account</a></li>
            @endif
          @else
            <li class="leading-relaxed xl:leading-10 font-bold text-xl xl:text-2xl 2xl:text-3xl hover:text-[#531DACFF]"><a href="/signup">Sign up</a></li>
          @endauth
          <li class="leading-relaxed xl:leading-10 font-bold text-xl xl:text-2xl 2xl:text-3xl hover:text-[#531DACFF]"><a href="/size_guide">Size guide</a></li>
          <li class="leading-relaxed xl:leading-10 font-bold text-xl xl:text-2xl 2xl:text-3xl hover:text-[#531DACFF]"><a href="/terms">Terms</a></li>
          <li class="leading-relaxed xl:leading-10 font-bold text-xl xl:text-2xl 2xl:text-3xl hover:text-[#531DACFF]"><a href="/shipping">Shipping</a></li>
        </ul>
      </nav>
    </aside>
    <!--Sidebar end-->

    <!--Main body-->
    <section class="row-span-10 col-span-6 flex flex-col h-screen">
      <!--Top bar-->
      <header class="self-start flex-none w-full">
        <div class="flex justify-between">
          <!--Website logo on smaller than LG-->
          <div class="lg:hidden w-1/4 md:w-1/3">
            <a class="justify-start w-24 sm:w-32 md:w-36 h-auto pt-2" href="/">
              <img class="w-24 sm:w-32 md:w-36 h-auto" src="../img/logo/nowty_animation_croped.gif" alt="Nowty Clothing logo" />
            </a>
          </div>
          <!--Searchbar on >= MD-->
          <section class="relative z-20 w-1/2 md:w-1/3">
            <form id="searchForm" class="search-bar max-sm:hidden min-w-72 lg:ml-4 pt-4">
              <label for="searchInput" class="text-xs md:text-sm lg:text-base font-medium sr-only mb-2">SEARCH</label>
              <div class="relative flex">
                <input id="searchInput" type="search" class="searchInput block w-full text-xs md:text-sm lg:text-base border border-gray-300 rounded-lg placeholder:text-[#260065]/50 p-2 focus:outline-none" placeholder="SEARCH" required />
              </div>
            </form>
            <div id="results" class="hidden min-w-72 max-h-96 max-lg:w-full absolute top-full max-lg:-mt-7 lg:left-4 flex flex-col rounded-lg bg-white divide-y-2 divide-[#260065]/50 outline outline-2 outline-[#260065] overflow-y-auto"></div>
          </section>
          <!--Searchbar on >= MD end-->
          <!--Action buttons (cart, user, dark)-->
          <section class="flex gap-2 pr-4 pt-4 w-1/4 md:w-1/3 justify-end">
            <!--Cart-->
            <a href="/cart">
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 lg:w-7 lg:h-7 2xl:w-8 2xl:h-8" width="25" height="25" viewBox="0 0 24 24">
                  <path fill="none" stroke="#260065" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0Z"/>
                </svg>
              </i>
            </a>
            <!--Cart end-->
            <!--User-->
            <a href="/account">
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 lg:w-7 lg:h-7 2xl:w-8 2xl:h-8" width="25" height="25" viewBox="0 0 24 24">
                  <path fill="none" stroke="#260065" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6a3.75 3.75 0 1 1-7.5 0a3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                </svg>
              </i>
            </a>
            <!--User end-->
            <!--Dark-->
            <a href="">
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 lg:w-7 lg:h-7 2xl:w-8 2xl:h-8" width="25" height="25" viewBox="0 0 24 24">
                  <path fill="none" stroke="#260065" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.752 15.002A9.718 9.718 0 0 1 18 15.75A9.75 9.75 0 0 1 8.25 6c0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25A9.75 9.75 0 0 0 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"/>
                </svg>
              </i>
            </a>
            <!--Dark end-->
          </section>
          <!--Action buttons end-->
        </div>
      </header>
      <!--Top bar end-->

      <!--Products-->
      <section class="flex-1 flex-col justify-between w-full">
        <!--Searchbar on < SM-->
        <section class="relative">
          <form id="searchFormSmall" class="sm:hidden search-bar min-w-56 px-4 pt-4">
          <label for="searchInputSmall" class="text-xs md:text-sm lg:text-base font-medium sr-only mb-2">SEARCH</label>
            <div class="relative flex">
              <input id="searchInputSmall" type="search" class="searchInput block w-full text-xs md:text-sm lg:text-base border border-gray-300 rounded-lg placeholder:text-[#260065]/50 p-2 focus:outline-none" placeholder="SEARCH" required />
            </div>
          </form>
          <div id="resultsSmall" class="hidden min-w-56 max-h-72 absolute top-full lg:left-4 mx-4 flex flex-col rounded-lg bg-white divide-y-2 divide-[#260065]/50 outline outline-2 outline-[#260065] overflow-y-auto z-20"></div>
        </section>
        <!--Searchbar on < SM end-->

        <!--Breadcrumbs-->
        <section class="text-xs flex w-full border-b-2 border-[#260065]/75 overflow-x-auto no-scrollbar">
          <ol class="flex items-center whitespace-nowrap pl-4 pb-1 pt-2" aria-label="Breadcrumb">
            <li class="inline-flex items-center">
              <a class="flex items-center text-xs opacity-50 hover:opacity-75 text-breadcrumb" href="/products#all">All products</a>
              <svg class="w-5 h-5 md:w-6 md:h-6 opacity-50" width="12" height="10" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M6 13L10 3" stroke="#260065" stroke-linecap="round" />
              </svg>
            </li>
            <li class="inline-flex items-center">
              <a class="flex items-center text-xs opacity-50 hover:opacity-75 text-breadcrumb" href="/products#{{$product->category}}">{{$product->category}}</a>
              <svg class="w-5 h-5 md:w-6 md:h-6 opacity-50" width="12" height="10" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M6 13L10 3" stroke="#260065" stroke-linecap="round" />
              </svg>
            </li>
            <li class="inline-flex items-center text-xs opacity-50">
              {{$product->name}}
            </li>
          </ol>
        </section>
        <!--Breadcrumbs end-->

        <!--Scrollable content-->
        <section class="overflow-auto h-[calc(100vh-12.5rem)] sm:h-[calc(100vh-12rem)] md:h-[calc(100vh-13rem)] lg:md:h-[calc(100vh-6rem)] grid grid-cols-1 md:grid-cols-2 items-center justify-items-center gap-8 px-4 sm:px-16 py-8">
          <!--Image side-->
          <section class="flex flex-col justify-around items-center h-full">
            <div class="justify-center justify-items-center self-center w-3/4 h-3/5 min-h-24 max-h-96"><img class="h-full object-contain mx-auto main-image" src="../img/products/{{ $product->mainImage->name }}" alt="{{ $product->name }}"></div>
            <div class="flex flex-row justify-center items-center w-full gap-x-2">
              <div class="rounded-lg border border-double border-transparent hover:border-violet-500"><img class="w-20 h-20 md:w-24 md:h-24 xl:w-28 xl:h-28 object-contain secondary-image cursor-pointer" src="../img/products/{{ $product->mainImage->name }}" alt="{{ $product->name }} front"></div>
              @foreach($product->secondaryImages as $image)
              <div class="rounded-lg border border-double border-transparent hover:border-violet-500">
                  <img class="w-20 h-20 md:w-24 md:h-24 xl:w-28 xl:h-28 object-contain rounded-lg secondary-image cursor-pointer" src="../img/products/{{ $image->name }}" alt="{{ $product->name }} secondary images">
              </div>
              @endforeach
            </div>
          </section>
          <!--Image side end-->
          <!--Right side-->
          <section class="flex flex-col justify-between max-md:items-center w-full h-full">
            <div class="flex flex-col gap-y-4 w-full">
              <!--General-->
              <h1 class="flex-auto text-lg lg:text-xl font-bold">{{ $product->name }}</h1>
              <div class="flex w-full text-xs md:text-sm font-medium ml-3">
                <ul class="list-disc">
                    @foreach($product->description as $detail)
                        <li>{{ $detail }}</li>
                    @endforeach
                </ul>
              </div>
              <!--General end-->

              <!--Details-->
              <div class="flex flex-col gap-y-1 text-xs md:text-sm font-medium text-label" x-data="{ isOpenTechDetails: false, isOpenSizeGuide: false, isOpenCart: false }">
                <a href="#" @click.prevent="isOpenTechDetails = true" class="hover:text-[#531DACFF]"><u>Technical details</u></a>
                <div x-show="isOpenTechDetails"
                  x-transition:enter="transition ease-out duration-300"
                  x-transition:enter-start="opacity-0 transform scale-90"
                  x-transition:enter-end="opacity-100 transform scale-100"
                  x-transition:leave="transition ease-in duration-300"
                  x-transition:leave-start="opacity-100 transform scale-100"
                  x-transition:leave-end="opacity-0 transform scale-90"
                  class="fixed inset-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto">
                  <div class="relative min-w-52 w-3/4 md:w-1/2 lg:w-1/3 max-h-72  max-w-3xl mx-auto rounded-lg outline outline-2 outline-[#260065] focus:outline-none overflow-y-auto">
                    <!--content-->
                    <div class="relative flex flex-col w-full bg-white rounded-lg outline-none focus:outline-none max-h-[calc(100vh-2rem)] overflow-y-auto">
                      <!--header-->
                      <div class="flex items-center justify-between p-5 border-b-2 border-solid rounded-t border-[#260065]/20">
                        <h3 class="text-xl font-semibold">Technical details</h3>
                        <a href="#" @click.prevent="isOpenTechDetails = false" class="text-center text-right text-xl font-semibold leading-none text-black opacity-50 cursor-pointer outline-none focus:outline-none">X</a>
                      </div>
                      <!--body-->
                      <div class="flex flex-col text-xs md:text-sm font-medium divide-y divide-[#260065]/20">
                        <div class="py-2 px-8">
                          <ul class="list-disc">
                              @forelse($product->technical_details as $detail)
                                  <li>{{ $detail }}</li>
                              @empty
                                  <li>No technical details found</li>
                              @endforelse
                          </ul>
                        </div>
                        <div class="flex flex-col py-2 px-4">
                          <p class="font-bold">Colors</p>
                          <ul class="list-disc px-8">
                            @forelse($product->colors as $color)
                                <li>{{ $color->name }}</li>
                            @empty
                                <li>No colors found</li>
                            @endforelse
                          </ul>
                        </div>
                        <div class="flex flex-col py-2 px-4">
                          <p class="font-bold">Materials</p>
                          <ul class="list-disc px-8">
                            @forelse($product->materials as $material)
                                <li>{{ $material->name }}</li>
                            @empty
                                <li>No materials found</li>
                            @endforelse
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--end content-->
                  </div>
                </div>
                <a href="#" @click.prevent="isOpenSizeGuide = true" class="hover:text-purple-800"><u>Size Guide</u></a>
                <div x-show="isOpenSizeGuide"
                  x-transition:enter="transition ease-out duration-300"
                  x-transition:enter-start="opacity-0 transform scale-90"
                  x-transition:enter-end="opacity-100 transform scale-100"
                  x-transition:leave="transition ease-in duration-300"
                  x-transition:leave-start="opacity-100 transform scale-100"
                  x-transition:leave-end="opacity-0 transform scale-90"
                  class="fixed inset-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto">
                  <div class="relative min-w-52 w-3/4 md:w-1/2 lg:w-1/3 max-h-72  max-w-3xl mx-auto rounded-lg outline outline-2 outline-[#260065] focus:outline-none overflow-y-auto">
                    <!--content-->
                    <div class="relative flex flex-col w-full bg-white rounded-lg outline-none focus:outline-none max-h-[calc(100vh-2rem)] overflow-y-auto">
                      <!--header-->
                      <div class="flex items-center justify-between p-5 border-b-2 border-solid rounded-t border-[#260065]/20">
                        <h3 class="text-xl font-semibold">Size guide</h3>
                        <a href="#" @click.prevent="isOpenSizeGuide = false" class="text-center text-right text-xl font-semibold leading-none text-black opacity-50 cursor-pointer outline-none focus:outline-none">X</a>
                      </div>
                      <!--body-->
                      @if($product->sizeGuideImage)
                      <div class="flex justify-center">
                          <img src="../img/products/{{ $product->sizeGuideImage->name }}" alt="Size Guide" class="w-96 h-52 object-contain">
                      </div>
                      @else
                      <div class="flex justify-center p-5">
                          <p>No size guide image available for this product.</p>
                      </div>
                      @endif
                    </div>
                    <!--end content-->
                  </div>
                </div>
                <button id="cartButton" href="#" @click.prevent="isOpenCart = true" class="hidden hover:text-[#531DACFF]"><u>Show Cart</u></button>
                <div x-show="isOpenCart"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    class="fixed inset-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto">
                    <div class="relative min-w-52 w-3/4 md:w-1/2 lg:w-1/3 max-h-72 max-w-3xl mx-auto rounded-lg outline outline-2 outline-[#260065] focus:outline-none overflow-y-auto">
                      <!--content-->
                      <div class="relative flex flex-col w-full bg-white rounded-lg outline-none focus:outline-none max-h-[calc(100vh-2rem)] overflow-y-auto">
                        <!--header-->
                        <div class="flex items-center justify-between p-5 border-b-2 border-solid rounded-t border-[#260065]/20">
                          <h3 class="text-xl font-semibold">Product added to cart</h3>
                          <a href="#" @click.prevent="isOpenCart = false" class="text-center text-right text-xl font-semibold leading-none text-black opacity-50 cursor-pointer outline-none focus:outline-none">X</a>
                        </div>
                        <!--body-->
                        <div class="relative flex flex-col justify-center min-h-[200px] gap-y-8">
                          <div class="flex items-center px-8">
                            <img class="w-16 h-16 md:w-20 md:h-20 xl:w-24 xl:h-24 object-contain rounded-lg" src="../img/products/{{ $product->mainImage->name }}" alt="{{ $product->name }}">
                            <div class="flex flex-col justify-between h-full ml-4">
                              <h5 class="font-bold mb-2">{{ $product->name }}</h5>
                              <div class="text-sm">
                                <h6>Category: {{ $product->category }}</h6>
                                <h6>Color: {{ $product->colors()->first()->name }}</h6>
                                <h6>Material: {{ $product->materials()->first()->name }}</h6>
                              </div>
                            </div>
                          </div>
                          <div class="flex flex-row gap-x-2">
                            <button class="block opacity-75 text-xs lg:text-md xl:text-lg font-semibold rounded-lg cursor-pointer border-2 border-[#260065] mx-auto px-4 py-2 lg:px-6 transition hover:text-white hover:bg-[#260065] hover:opacity-100 hover:transition-250" @click.prevent="isOpenCart = false">KEEP SHOPPING</button>
                            <button class="block text-xs lg:text-md xl:text-lg font-bold border-0 rounded-lg cursor-pointer bg-[#260065] text-white px-6 py-2 lg:px-8 mx-auto hover:bg-[#531DACFF] transition hover:transition" onclick="window.location.href='/cart'">GO TO CART</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <!--Details end-->

              <!--Sizes-->
              <div class="flex flex-col gap-y-1">
                <p class="text-xs md:text-sm font-medium text-label">Sizes:</p>
                @php
                    $all_sizes = ['xs', 's', 'm', 'l', 'xl'];

                    $product_sizes = [];
                    foreach ($product->sizes as $size) {
                        $product_sizes[$size->name] = $size;
                    }
                    $all_disabled = true;
                @endphp

                <div class="flex flex-col items-baseline">
                    <div class="flex text-xs md:text-sm space-x-2">
                        @foreach($all_sizes as $possible_size)
                            @php
                                $product_size = $product_sizes[$possible_size] ?? null;
                                $size_quantity = $product_size ? $product_size->quantity : 0;
                                if ($size_quantity > 0) {
                                    $all_disabled = false;
                                }
                            @endphp
                            <label class="{{ $size_quantity <= 0 ? 'pointer-events-none' : '' }}">
                                <input data-low="{{ $size_quantity <= 10 && $size_quantity > 0 ? 'true' : 'false' }}"
                                       class="sr-only peer size-option"
                                       name="size"
                                       type="radio"
                                       value="{{ $possible_size }}"
                                       {{ $size_quantity <= 0 ? 'disabled' : '' }}/>
                                <span class="flex items-center justify-center w-10 h-10 lg:w-12 lg:h-12 rounded-lg cursor-pointer peer-checked:font-semibold peer-checked:bg-[#260065] peer-checked:text-white outline outline-2
                               {{ $size_quantity <= 0 ? 'outline-[#260065]/50 text-[#260065]/50' : 'text-[#260065] outline-[#260065]' }}">
                                    {{ $possible_size }}
                                </span>
                            </label>
                        @endforeach
                    </div>
                    @if($all_disabled)
                      <div id="outOfStockMessage" class="text-[#260065]/50 mt-2">Product out of stock!</div>
                    @endif
                    <div id="lowStockMessage" class="text-[#260065]/50 mt-2" style="opacity: 0; transition: opacity 0.3s ease;">Low stock!</div>
                </div>
              </div>
            </div>
            <!--Sizes end-->

            <!--Bottom-->
            <div class="flex flex-row justify-between md:justify-around w-full max-md:mt-16">
              <p class="text-xl sm:text-2xl md:text-3xl font-bold">{{ $product->price }}$</p>

              @if(count($product->sizes) > 0 && $product->sizes->contains(function($size) { return $size->quantity > 0; }))

              <form id="add-to-cart-form" method="POST" action="{{ route('add-to-cart') }}">
                 @csrf
                 <input type="hidden" name="productId" id="productId" value="{{ $product->id }}" required>
                 <!-- Add the 'size' input to your form. This will hold the selected size -->
                 <input type="hidden" id="size" name="size" required>

                 <button type="submit" class="text-sm sm:text-sm md:text-md lg:text-xl font-bold border-0 rounded-lg cursor-pointer bg-[#260065] text-white hover:bg-[#531DACFF] transition hover:transition-250 px-4 py-2 sm:px-4 sm:py-2 md:px-5 lg:px-8">ADD TO CART</button>
              </form>
              @else
              <button disabled class="text-sm sm:text-sm md:text-md lg:text-xl font-bold border-0 rounded-lg cursor-not-allowed bg-[#260065]/50 text-white px-4 py-2 sm:px-4 sm:py-2 md:px-5 lg:px-8">SOLD OUT</button>
              @endif
            </div>
            <!--Bottom end-->
          </section>
          <!--Right side end-->
        </section>
        <!--Scrollable content end-->
      </section>
      <!--Products end-->

      <!--Bottom bar-->
      <footer class="self-end flex-none w-full">
        <div class="flex justify-between lg:justify-end pb-4">
          <!--Hamburger-->
          <button tabindex="0" role="button" class="lg:hidden pl-4" onclick="openNavbar()">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 lg:w-7 lg:h-7 2xl:w-8 2xl:h-8" width="25" height="25" viewBox="0 0 15 15">
              <path fill="#260065" fill-rule="evenodd" d="M1.5 3a.5.5 0 0 0 0 1h12a.5.5 0 0 0 0-1h-12ZM1 7.5a.5.5 0 0 1 .5-.5h12a.5.5 0 0 1 0 1h-12a.5.5 0 0 1-.5-.5Zm0 4a.5.5 0 0 1 .5-.5h12a.5.5 0 0 1 0 1h-12a.5.5 0 0 1-.5-.5Z" clip-rule="evenodd"/>
            </svg>
          </button>
          <!--Hamburger end-->
        </div>
      </footer>
      <!--Bottom bar end-->
    </section>
    <!--Main body end-->
  </main>
  <!--Body end-->

  <!--Navbar overlay-->
  <div id="navbar-overlay" class="fixed -bottom-full left-0 z-[1] flex flex-col justify-between w-screen h-screen bg-white transition-all duration-250 md:overflow-hidden">
    <!--Spacer-->
    <div></div>

    <!--Navlinks-->
    <nav class="self-center flex flex-col items-center overlay-content">
      <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]" href="/products">Products</a>
      <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]" href="/signup">Sign up</a>
      <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]" href="/size_guide">Size guide</a>
      <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]" href="/terms">Terms</a>
      <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]" href="/shipping">Shipping</a>
    </nav>
    <!--Navlinks end-->

    <!--Overlay bottom bar-->
    <div class="flex justify-between pb-4">
      <!--Overlay close button-->
      <button class="pl-4" onclick="closeNavbar()">
        <i>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 lg:w-7 lg:h-7 2xl:w-8 2xl:h-8" width="25" height="25" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 4L4 20M4 4l16 16"/>
          </svg>
        </i>
      </button>
      <!--Overlay close button end-->
      <!--Overlay socials-->
      <section class="flex gap-2 items-center pr-4">
        <!--Instagram-->
        <a href="https://www.instagram.com/nowtyclothing/">
          <i>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 lg:w-7 lg:h-7 2xl:w-8 2xl:h-8" width="25" height="25" viewBox="0 0 24 24">
              <g fill="none" stroke="#260065" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                <path d="M16.5 3h-9A4.5 4.5 0 0 0 3 7.5v9A4.5 4.5 0 0 0 7.5 21h9a4.5 4.5 0 0 0 4.5-4.5v-9A4.5 4.5 0 0 0 16.5 3Z"/>
                <path d="M15.462 11.487a3.5 3.5 0 1 1-6.925 1.026a3.5 3.5 0 0 1 6.925-1.026ZM17 6.5h.5"/>
              </g>
            </svg>
          </i>
        </a>
        <!--Instagram end-->
        <!--X-->
        <a href="">
          <i>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 lg:w-7 lg:h-7 2xl:w-8 2xl:h-8" width="25" height="25" viewBox="0 0 24 24">
              <path fill="none" stroke="#260065" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19 4l-5.93 6.93M5 20l5.93-6.93m0 0l5.795 6.587c.19.216.483.343.794.343h1.474c.836 0 1.307-.85.793-1.435L13.07 10.93m-2.14 2.14L4.214 5.435C3.7 4.85 4.17 4 5.007 4h1.474c.31 0 .604.127.794.343l5.795 6.587"/>
            </svg>
          </i>
        </a>
        <!--X end-->
      </section>
      <!--Overlay socials end-->
    </div>
    <!--Overlay bottom bar end-->
  </div>
  <!--Navbar overlay end-->

  <!--  Place for importing scripts-->
  <script src="../js/navbar.js"></script>
  <script src="../js/search.js"></script>
  <script src="../js/image_change.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="text/javascript">
    window.onload = function() {
      document.querySelectorAll('.size-option').forEach(radio => {
        radio.addEventListener('change', function() {
          if (this.dataset.low === 'true') {
            document.getElementById("lowStockMessage").style.opacity = 1;
          } else {
            document.getElementById("lowStockMessage").style.opacity = 0;
          }
        });
      });
    };
  </script>
  <script>
    function showCartModal() {
        document.getElementById('cart-modal').style.display = 'block';
    }

    function hideCartModal() {
        document.getElementById('cart-modal').style.display = 'none';
    }

    // Get all radio buttons
    let radios = document.getElementsByClassName('size-option');

    // Add event listener to each radio button
    for(let i = 0; i < radios.length; i++) {
        radios[i].addEventListener('change', handleSizeChange);
    }

    function handleSizeChange(event) {
        // On change, get the selected size and set size input in the form
        document.getElementById('size').value = event.target.value;
    }

    document.getElementById('add-to-cart-form').addEventListener('submit', function(e) {
      // Prevent the default form submission
      e.preventDefault();

      let sizeInput = document.getElementById('size');

      if(!sizeInput.value) {
          alert('Please select a size before adding to the cart.');
          return;
      }

      // Prepare the data
      let formData = new FormData();
      formData.append('productId', document.getElementById('productId').value);
      formData.append('size', document.getElementById('size').value);

      // Send a POST request to the server
      fetch('{{ route('add-to-cart') }}', {
          method: 'POST',
          headers: {
              // Append CSRF token to prevent cross-site request forgery
              'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
          },
          body: formData
      })
      .then(response => response.json())
      .then(data => {
          // Here you can handle the response (success or failure)
          if (data.status && data.status === 'success') {
              let event = new Event('click');
              let btn = document.getElementById('cartButton');  // replace 'yourButtonId' with your actual button's id
              btn.dispatchEvent(event);
          } else {
              alert('There was a problem adding the product to the cart');
          }
      })
      .catch(error => {
          alert('There was an error with the request.');
      });
  });
  </script>
  @livewireScripts
</body>
</html>
