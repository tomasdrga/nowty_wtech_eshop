<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Nowty Clothing • Products</title>
  <meta name="description" content="Products page for Nowty Clothing." />

  <link rel="icon" href="/img/favicon/nowty_face.png" sizes="any" />
  <link rel="apple-touch-icon" href="/img/favicon/nowty_face.png" />

  <link rel="stylesheet" href="../css/style.css" />
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
          <li class="leading-relaxed xl:leading-10 font-bold text-xl xl:text-2xl 2xl:text-3xl hover:text-[#531DACFF]"><a href="/signup">Sign up</a></li>
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
          <section class="w-1/2 md:w-1/3">
            <form class="max-sm:hidden min-w-72 lg:pl-4 pt-4">
              <label class="text-xs md:text-sm lg:text-base font-medium sr-only mb-2">SEARCH</label>
              <div class="relative flex">
                <input type="search" class="block w-full text-xs md:text-sm lg:text-base border border-gray-300 rounded-lg placeholder:text-[#260065]/50 p-2 focus:outline-none" placeholder="SEARCH" required />
                <button type="submit" class="absolute right-0 top-0 bottom-0 text-sm text-white font-medium rounded-r-lg m-auto px-3 py-2 hover:bg-[#260065] hover:text-white hover:transition-all hover:transition-250 focus:outline-none">
                  <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                  </svg>
                </button>
              </div>
            </form>
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
        <form class="sm:hidden min-w-56 px-4 pt-4">
          <label class="text-xs md:text-sm lg:text-base font-medium sr-only mb-2">SEARCH</label>
          <div class="relative flex">
            <input type="search" class="block w-full text-xs md:text-sm lg:text-base border border-gray-300 rounded-lg placeholder:text-[#260065]/50 p-2 focus:outline-none" placeholder="SEARCH" required />
            <button type="submit" class="absolute right-0 top-0 bottom-0 text-sm text-white font-medium rounded-r-lg m-auto px-3 py-2 hover:bg-[#260065] hover:text-white hover:transition-all hover:transition-250 focus:outline-none">
              <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
              </svg>
            </button>
          </div>
        </form>
        <!--Searchbar on < SM end-->

        <!--Top row-->
        <section class="flex flex-row justify-between px-4 border-b-2 border-[#260065] pt-2">
          <!--Tab system-->
          <div class="flex flex-row gap-x-8 overflow-x-auto no-scrollbar text-xs md:text-sm lg:text-base">
            <button class="tab-btn tab-inactive text-nowrap font-semibold" data-target="new">NEW</button>
            <button class="tab-btn tab-active text-nowrap font-semibold" data-target="all">ALL</button>
            <button class="tab-btn tab-inactive text-nowrap font-semibold" data-target="bottoms">BOTTOMS</button>
            <button class="tab-btn tab-inactive text-nowrap font-semibold" data-target="hoods">HOODS</button>
            <button class="tab-btn tab-inactive text-nowrap font-semibold" data-target="tees">TEES</button>
            <button class="tab-btn tab-inactive text-nowrap font-semibold" data-target="hats">HATS</button>
            <button class="tab-btn tab-inactive text-nowrap font-semibold" data-target="accessories">ACCESSORIES</button>
          </div>
          <!--Tab system end-->

          <!--Dropdown-->
          <div class="relative z-10">
            <!--Dropdown button-->
            <button id="dropdownButton" data-dropdown-toggle="dropdownMenu" class="inline-flex items-center text-xs md:text-sm lg:text-base font-semibold text-center rounded-lg pl-4 py-2.5" type="button">
              FILTER
              <svg class="w-2 h-2 md:w-2.5 md:h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="#260065" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </button>
            <!--Dropdown button end-->
            <!--Dropdown menu-->
            <div id="dropdownMenu" class="absolute top-full right-0 -mt-2 w-48 md:w-56 hidden rounded-lg bg-white divide-y-2 divide-[#260065]/50 outline outline-2 outline-[#260065]">
              <!--General filters-->
              <ul class="text-xs md:text-sm py-2" aria-labelledby="dropdownButton">
                <li><a href="#" class="block px-4 py-2 hover:text-[#531DACFF]">New arrivals</a></li>
                <li><a href="#" class="block px-4 py-2 hover:text-[#531DACFF]">Lowest price</a></li>
                <li><a href="#" class="block px-4 py-2 hover:text-[#531DACFF]">Highest price</a></li>
              </ul>
              <!--General filters end-->
              <!--Size filters-->
              <section>
                <p class="block text-xs md:text-sm font-medium px-4 pt-2">Size</p>
                <div class="flex flex-row">
                  <ul class="text-xs md:text-sm w-1/2 px-4 py-3 space-y-3" aria-labelledby="dropdownCheckboxButton">
                    <li>
                      <div class="flex items-center">
                        <input id="checkbox-item-1" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2">
                        <label for="checkbox-item-1" class="ms-2">XS</label>
                      </div>
                    </li>
                    <li>
                      <div class="flex items-center">
                        <input id="checkbox-item-3" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2">
                        <label for="checkbox-item-3" class="ms-2">M</label>
                      </div>
                    </li>
                    <li>
                      <div class="flex items-center">
                        <input id="checkbox-item-5" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2">
                        <label for="checkbox-item-5" class="ms-2">XL</label>
                      </div>
                    </li>
                  </ul>
                  <ul class="text-xs md:text-sm w-1/2 px-4 py-3 space-y-3" aria-labelledby="dropdownCheckboxButton">
                    <li>
                      <div class="flex items-center">
                        <input id="checkbox-item-2" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2">
                        <label for="checkbox-item-2" class="ms-2">S</label>
                      </div>
                    </li>
                    <li>
                      <div class="flex items-center">
                        <input id="checkbox-item-4" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2">
                        <label for="checkbox-item-4" class="ms-2">L</label>
                      </div>
                    </li>
                    <li>
                      <div class="flex items-center">
                        <input id="checkbox-item-6" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2">
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
                      <input id="checkbox-item-7" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2">
                      <label for="checkbox-item-7" class="ms-2">Black</label>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <input id="checkbox-item-8" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2">
                      <label for="checkbox-item-8" class="ms-2">Denim</label>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <input id="checkbox-item-9" type="checkbox" value="" class="w-3 h-3 md:w-4 md:h-4 rounded-lg accent-[#260065] cursor-pointer focus:ring-violet-500 focus:ring-2">
                      <label for="checkbox-item-9" class="ms-2">Wild</label>
                    </div>
                  </li>
                </ul>
              </section>
              <!--Material filters end-->
            </div>
            <!--Dropdown menu end-->
          </div>
          <!--Dropdown end-->
        </section>
        <!--Top row end-->

        <!--Scrollable content-->
        <section class="overflow-auto max-h-[calc(100vh-12.5rem)] sm:max-h-[calc(100vh-12rem)] md:max-h-[calc(100vh-13rem)] lg:md:max-h-[calc(100vh-6rem)]">
          <!--New tab-->
          <div id="new" class="tab-content hidden grid max-[350px]:grid-cols-1 grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 items-start justify-items-center gap-8 px-4 sm:px-16 py-8">
            @foreach($products as $product)
                <a class="flex flex-col gap-y-4 relative w-full h-full min-w-42 min-h-56 max-w-52 max-h-76 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="{{ route('product.show', $product->slug) }}">
                    <span class="absolute top-0 right-0 px-1 rounded-lg bg-[#260065] text-[#F5F5F5]">New</span>
                    <div class="flex items-center justify-center rounded-lg bg-[#F5F5F5] min-h-44 md:max-2xl:min-h-52 px-4 py-2 md:px-8 md:py-4">
                        <img class="min-w-16 min-h-24 md:max-2xl:min-h-44 max-h-36 md:max-2xl:max-h-48 object-scale-down" src="../img/products/{{ $product->mainImage->name }}" alt="{{ $product->name }}">
                    </div>
                    <div class="flex flex-col h-full justify-between text-xs md:text-sm lg:text-base">
                        <p class="font-normal">{{ $product->name }}</p>
                        <p class="text-sm md:text-base lg:text-lg font-bold">${{ $product->price }}</p>
                    </div>
                </a>
            @endforeach
          </div>
          <!--New tab end-->
          <!--All tab-->
          <div id="all" class="tab-content grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 items-start justify-items-center gap-8 px-4 sm:px-16 py-8">
            <a class="flex flex-col gap-y-4 min-w-42 min-h-72 max-w-52 max-h-96 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="product_detail.html">
              <div class="rounded-lg bg-[#F5F5F5] px-4 py-2 md:px-8 md:py-4">
                <img class="min-w-16 max-h-56 object-contain" src="../img/products/palace_5.png" alt="">
              </div>
              <div class="text-xs md:text-sm lg:text-base">
                <p class="font-normal">BIG OL' JEAN KRYPTEK CAMO</p>
                <p class="text-sm md:text-base lg:text-lg font-bold">420$</p>
              </div>
            </a>
            <a class="flex flex-col gap-y-4 min-w-42 min-h-72 max-w-52 max-h-96 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="product_detail.html">
              <div class="rounded-lg bg-[#F5F5F5] px-4 py-2 md:px-8 md:py-4">
                <img class="min-w-16 max-h-56 object-contain" src="../img/products/palace_5.png" alt="">
              </div>
              <div class="text-xs md:text-sm lg:text-base">
                <p class="font-normal">BIG OL' JEAN KRYPTEK CAMO</p>
                <p class="text-sm md:text-base lg:text-lg font-bold">420$</p>
              </div>
            </a>
            <a class="flex flex-col gap-y-4 min-w-42 min-h-72 max-w-52 max-h-96 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="product_detail.html">
              <div class="rounded-lg bg-[#F5F5F5] px-4 py-2 md:px-8 md:py-4">
                <img class="min-w-16 max-h-56 object-contain" src="../img/products/palace_5.png" alt="">
              </div>
              <div class="text-xs md:text-sm lg:text-base">
                <p class="font-normal">BIG OL' JEAN KRYPTEK CAMO</p>
                <p class="text-sm md:text-base lg:text-lg font-bold">420$</p>
              </div>
            </a>
            <a class="flex flex-col gap-y-4 min-w-42 min-h-72 max-w-52 max-h-96 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="product_detail.html">
              <div class="rounded-lg bg-[#F5F5F5] px-4 py-2 md:px-8 md:py-4">
                <img class="min-w-16 max-h-56 object-contain" src="../img/products/palace_5.png" alt="">
              </div>
              <div class="text-xs md:text-sm lg:text-base">
                <p class="font-normal">BIG OL' JEAN KRYPTEK CAMO</p>
                <p class="text-sm md:text-base lg:text-lg font-bold">420$</p>
              </div>
            </a>
          </div>
          <!--All tab end-->
          <!--Bottoms tab-->
          <div id="bottoms" class="tab-content hidden grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 items-start justify-items-center gap-8 px-4 sm:px-16 py-8">
            <a class="flex flex-col gap-y-4 min-w-42 min-h-72 max-w-52 max-h-96 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="product_detail.html">
              <div class="rounded-lg bg-[#F5F5F5] px-4 py-2 md:px-8 md:py-4">
                <img class="min-w-16 max-h-56 object-contain" src="../img/products/palace_5.png" alt="">
              </div>
              <div class="text-xs md:text-sm lg:text-base">
                <p class="font-normal">BIG OL' JEAN KRYPTEK CAMO</p>
                <p class="text-sm md:text-base lg:text-lg font-bold">420$</p>
              </div>
            </a>
            <a class="flex flex-col gap-y-4 min-w-42 min-h-72 max-w-52 max-h-96 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="product_detail.html">
              <div class="rounded-lg bg-[#F5F5F5] px-4 py-2 md:px-8 md:py-4">
                <img class="min-w-16 max-h-56 object-contain" src="../img/products/palace_5.png" alt="">
              </div>
              <div class="text-xs md:text-sm lg:text-base">
                <p class="font-normal">BIG OL' JEAN KRYPTEK CAMO</p>
                <p class="text-sm md:text-base lg:text-lg font-bold">420$</p>
              </div>
            </a>
          </div>
          <!--Bottoms tab end-->
          <!--Hoods tab-->
          <div id="hoods" class="tab-content hidden grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 items-start justify-items-center gap-8 px-4 sm:px-16 py-8">
            <a class="flex flex-col gap-y-4 min-w-42 min-h-72 max-w-52 max-h-96 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="product_detail.html">
              <div class="rounded-lg bg-[#F5F5F5] px-4 py-2 md:px-8 md:py-4">
                <img class="min-w-16 max-h-56 object-contain" src="../img/products/palace_5.png" alt="">
              </div>
              <div class="text-xs md:text-sm lg:text-base">
                <p class="font-normal">BIG OL' JEAN KRYPTEK CAMO</p>
                <p class="text-sm md:text-base lg:text-lg font-bold">420$</p>
              </div>
            </a>
            <a class="flex flex-col gap-y-4 min-w-42 min-h-72 max-w-52 max-h-96 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="product_detail.html">
              <div class="rounded-lg bg-[#F5F5F5] px-4 py-2 md:px-8 md:py-4">
                <img class="min-w-16 max-h-56 object-contain" src="../img/products/palace_5.png" alt="">
              </div>
              <div class="text-xs md:text-sm lg:text-base">
                <p class="font-normal">BIG OL' JEAN KRYPTEK CAMO</p>
                <p class="text-sm md:text-base lg:text-lg font-bold">420$</p>
              </div>
            </a>
            <a class="flex flex-col gap-y-4 min-w-42 min-h-72 max-w-52 max-h-96 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="product_detail.html">
              <div class="rounded-lg bg-[#F5F5F5] px-4 py-2 md:px-8 md:py-4">
                <img class="min-w-16 max-h-56 object-contain" src="../img/products/palace_5.png" alt="">
              </div>
              <div class="text-xs md:text-sm lg:text-base">
                <p class="font-normal">BIG OL' JEAN KRYPTEK CAMO</p>
                <p class="text-sm md:text-base lg:text-lg font-bold">420$</p>
              </div>
            </a>
          </div>
          <!--Hoods tab end-->
          <!--Tees tab-->
          <div id="tees" class="tab-content hidden grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 items-start justify-items-center gap-8 px-4 sm:px-16 py-8">
            <a class="flex flex-col gap-y-4 min-w-42 min-h-72 max-w-52 max-h-96 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="product_detail.html">
              <div class="rounded-lg bg-[#F5F5F5] px-4 py-2 md:px-8 md:py-4">
                <img class="min-w-16 max-h-56 object-contain" src="../img/products/palace_5.png" alt="">
              </div>
              <div class="text-xs md:text-sm lg:text-base">
                <p class="font-normal">BIG OL' JEAN KRYPTEK CAMO</p>
                <p class="text-sm md:text-base lg:text-lg font-bold">420$</p>
              </div>
            </a>
          </div>
          <!--Tees tab end-->
          <!--Hats tab-->
          <div id="hats" class="tab-content hidden grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 items-start justify-items-center gap-8 px-4 sm:px-16 py-8">
            <a class="flex flex-col gap-y-4 min-w-42 min-h-72 max-w-52 max-h-96 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="product_detail.html">
              <div class="rounded-lg bg-[#F5F5F5] px-4 py-2 md:px-8 md:py-4">
                <img class="min-w-16 max-h-56 object-contain" src="../img/products/palace_5.png" alt="">
              </div>
              <div class="text-xs md:text-sm lg:text-base">
                <p class="font-normal">BIG OL' JEAN KRYPTEK CAMO</p>
                <p class="text-sm md:text-base lg:text-lg font-bold">420$</p>
              </div>
            </a>
            <a class="flex flex-col gap-y-4 min-w-42 min-h-72 max-w-52 max-h-96 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="product_detail.html">
              <div class="rounded-lg bg-[#F5F5F5] px-4 py-2 md:px-8 md:py-4">
                <img class="min-w-16 max-h-56 object-contain" src="../img/products/palace_5.png" alt="">
              </div>
              <div class="text-xs md:text-sm lg:text-base">
                <p class="font-normal">BIG OL' JEAN KRYPTEK CAMO</p>
                <p class="text-sm md:text-base lg:text-lg font-bold">420$</p>
              </div>
            </a>
            <a class="flex flex-col gap-y-4 min-w-42 min-h-72 max-w-52 max-h-96 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="product_detail.html">
              <div class="rounded-lg bg-[#F5F5F5] px-4 py-2 md:px-8 md:py-4">
                <img class="min-w-16 max-h-56 object-contain" src="../img/products/palace_5.png" alt="">
              </div>
              <div class="text-xs md:text-sm lg:text-base">
                <p class="font-normal">BIG OL' JEAN KRYPTEK CAMO</p>
                <p class="text-sm md:text-base lg:text-lg font-bold">420$</p>
              </div>
            </a>
          </div>
          <!--Hats tab end-->
          <!--Accessories tab-->
          <div id="accessories" class="tab-content hidden grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 items-start justify-items-center gap-8 px-4 sm:px-16 py-8">
            <a class="flex flex-col gap-y-4 min-w-42 min-h-72 max-w-52 max-h-96 p-2 rounded-lg hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="product_detail.html">
              <div class="rounded-lg bg-[#F5F5F5] px-4 py-2 md:px-8 md:py-4">
                <img class="min-w-16 max-h-56 object-contain" src="../img/products/palace_5.png" alt="">
              </div>
              <div class="text-xs md:text-sm lg:text-base">
                <p class="font-normal">BIG OL' JEAN KRYPTEK CAMO</p>
                <p class="text-sm md:text-base lg:text-lg font-bold">420$</p>
              </div>
            </a>
          </div>
          <!--Accessories tab end-->
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
  <script src="../js/tabs.js"></script>
  <script src="../js/dropdown.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
