<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Nowty Clothing</title>
  <meta name="description" content="Main page of Nowty Clothing website with lookbook." />

  <link rel="icon" href="/img/favicon/nowty_face.png" sizes="any" />
  <link rel="apple-touch-icon" href="/img/favicon/nowty_face.png" />

  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
  <!--Body-->
  <main class="grid grid-rows-10 grid-cols-6 gap-y-4 grid-flow-col-dense max-w-screen h-screen overflow-auto">
    <!--Sidebar, only on LG and up-->
    <aside class="max-lg:hidden lg:row-span-10">
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
        <div class="flex justify-between lg:justify-end">
          <!--Website logo on smaller than LG-->
          <a class="lg:hidden w-24 sm:w-32 md:w-36 h-auto pt-2" href="/">
            <img class="max-w-full h-auto mx-auto" src="../img/logo/nowty_animation_croped.gif" alt="Nowty Clothing logo" />
          </a>
          <!--Action buttons (cart, user, dark)-->
          <section class="flex gap-2 pr-4 pt-4">
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

      <!--Scrollable lookbook-->
      <section class="flex-1 w-full grid grid-cols-5 items-center">
        <div class="col-span-5 mx-4 md:mx-8 py-2 lg:col-span-4 items-center flex flex-row overflow-y-hidden overflow-x-auto whitespace-nowrap no-scrollbar h-3/4">
          @foreach($products as $product)
            <a style='background-image: url({{ asset('storage/uploads/' .$product->indexImage->name) }})' class="shrink rounded-lg bg-cover max-sm:min-w-16 min-w-24 xl:min-w-28 2xl:min-w-32 h-full max-sm:my-1 mx-1 hover:outline hover:outline-2 hover:outline-[#260065]/20 hover:text-[#531DACFF] hover:transition-all hover:transition-100" href="{{ route('product.show', $product->slug) }}"></a>
          @endforeach
        </div>
      </section>
      <!--Scrollable lookbook end-->

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
          <!--Socials icons-->
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
        </div>
        <!--Socials icons end-->
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
      <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]"
         href="/products">Products</a>
      @auth
        @if(Auth::user()->role == 'admin')
          <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]" href="/admin">Dashboard</a>
        @else
          <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]" href="/account">Account</a>
        @endif
      @else
        <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]" href="/signup">Sign up</a>
      @endauth
      <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]"
         href="/size_guide">Size guide</a>
      <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]"
         href="/terms">Terms</a>
      <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]"
         href="/shipping">Shipping</a>
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

  <!--Place for importing scripts-->
  <script src="../js/navbar.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
