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
              <a class="flex items-center text-xs opacity-50 hover:opacity-75 text-breadcrumb" href="/products#{{$product->category}}">Bottoms</a>
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
            <div class="justify-center justify-items-center self-center w-3/4 h-3/5 min-h-24 max-h-96"><img class="h-full object-contain mx-auto main-image" src="{{ asset('storage/uploads/' .$product->mainImage->name) }}" alt="{{ $product->name }}"></div>
            <div class="flex flex-row justify-center items-center w-full gap-x-2">
              <div class="rounded-lg border border-double border-transparent hover:border-violet-500"><img class="w-20 h-20 md:w-24 md:h-24 xl:w-28 xl:h-28 object-contain secondary-image cursor-pointer" src="{{ asset('storage/uploads/' .$product->mainImage->name) }}" alt="{{ $product->name }} front"></div>
              @foreach($product->secondaryImages as $image)
              <div class="rounded-lg border border-double border-transparent hover:border-violet-500">
                  <img class="w-20 h-20 md:w-24 md:h-24 xl:w-28 xl:h-28 object-contain secondary-image cursor-pointer" src="{{ asset('storage/uploads/' .$image->name) }}" alt="{{ $product->name }} secondary images">
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

                {{ $product->description }}
              </div>
              <!--General end-->

              <!--Details-->
              <div class="flex flex-col gap-y-1 text-xs md:text-sm font-medium text-label">
                <a href="#" class="hover:text-[#531DACFF]"><u>Technical details</u></a>
                <a href="/size_guide" class="hover:text-[#531DACFF]"><u>Size guide</u></a>
              </div>
              <!--Details end-->

              <!--Sizes-->
              <div class="flex flex-col gap-y-1">
                <p class="text-xs md:text-sm font-medium text-label">Size</p>
                <div class="flex items-baseline">
                  <div class="flex text-xs md:text-sm space-x-2">
                    <label>
                      <input class="sr-only peer" name="size" type="radio" value="xs" checked/>
                      <span class="flex items-center justify-center w-10 h-10 lg:w-12 lg:h-12 rounded-lg cursor-pointer peer-checked:font-semibold peer-checked:bg-[#260065] peer-checked:text-white outline outline-2 outline-[#260065]">XS</span>
                    </label>
                    <label>
                      <input class="sr-only peer" name="size" type="radio" value="s"/>
                      <span class="flex items-center justify-center w-10 h-10 lg:w-12 lg:h-12 rounded-lg cursor-pointer peer-checked:font-semibold peer-checked:bg-[#260065] peer-checked:text-white outline outline-2 outline-[#260065]">S</span>
                    </label>
                    <label>
                      <input class="sr-only peer" name="size" type="radio" value="m"/>
                      <span class="flex items-center justify-center w-10 h-10 lg:w-12 lg:h-12 rounded-lg cursor-pointer peer-checked:font-semibold peer-checked:bg-[#260065] peer-checked:text-white outline outline-2 outline-[#260065]">M</span>
                    </label>
                    <label>
                      <input class="sr-only peer" name="size" type="radio" value="l"/>
                      <span class="flex items-center justify-center w-10 h-10 lg:w-12 lg:h-12 rounded-lg cursor-pointer peer-checked:font-semibold peer-checked:bg-[#260065] peer-checked:text-white outline outline-2 outline-[#260065]">L</span>
                    </label>
                    <label>
                      <input class="sr-only peer" name="size" type="radio" value="xl"/>
                      <span class="flex items-center justify-center w-10 h-10 lg:w-12 lg:h-12 rounded-lg cursor-pointer peer-checked:font-semibold peer-checked:bg-[#260065] peer-checked:text-white outline outline-2 outline-[#260065]">XL</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <!--Sizes end-->

            <!--Bottom-->
            <div class="flex flex-row justify-between md:justify-around w-full max-md:mt-16">
              <p class="text-xl sm:text-2xl md:text-3xl font-bold">{{ $product->price }}$</p>
              <button class="text-sm sm:text-sm md:text-md lg:text-xl font-bold border-0 rounded-lg cursor-pointer bg-[#260065] text-white hover:bg-[#531DACFF] transition hover:transition-250 px-4 py-2 sm:px-4 sm:py-2 md:px-5 lg:px-8">ADD TO CART</button>
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
  <script src="../js/image_change.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
