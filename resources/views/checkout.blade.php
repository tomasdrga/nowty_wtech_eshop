<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>Nowty Clothing • Checkout</title>
  <meta name="description" content="Checkout page of Nowty Clothing website."/>

  <link rel="icon" href="/img/favicon/nowty_face.png" sizes="any"/>
  <link rel="apple-touch-icon" href="/img/favicon/nowty_face.png"/>

  <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
  <!--Body-->
  <main class="grid grid-rows-10 grid-cols-6 gap-y-4 grid-flow-col-dense max-w-screen h-screen lg:overflow-hidden">
    <!--Sidebar, only on LG and up-->
    <aside class="max-lg:hidden lg:row-span-10 bg-[#F5F5F5]">
      <nav class="flex flex-col justify-between h-full">
        <a class="w-full h-auto" href="/">
          <img class="h-auto max-w-full mx-auto" src="../img/logo/nowty_animation_croped.gif" alt="Nowty Clothing logo"/>
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
            <img class="max-w-full h-auto mx-auto" src="../img/logo/nowty_animation_croped.gif"
                 alt="Nowty Clothing logo"/>
          </a>
          <!--Action buttons (cart, user, dark)-->
          <section class="flex gap-2 pr-4 pt-4">
            <!--Cart-->
            <a href="/cart">
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 lg:w-7 lg:h-7 2xl:w-8 2xl:h-8" width="25" height="25" viewBox="0 0 24 24">
                  <path fill="#260065" d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421a60.358 60.358 0 0 0 2.96-7.228a.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25Zm1.5 18a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0Zm12.75 0a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0Z"/>
                </svg>
              </i>
            </a>
            <!--Cart end-->
            <!--User-->
            <a href="/account">
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 lg:w-7 lg:h-7 2xl:w-8 2xl:h-8"
                     width="25" height="25" viewBox="0 0 24 24">
                  <path fill="none" stroke="#260065" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0a3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                </svg>
              </i>
            </a>
            <!--User end-->
            <!--Dark-->
            <a href="">
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 lg:w-7 lg:h-7 2xl:w-8 2xl:h-8"
                     width="25" height="25" viewBox="0 0 24 24">
                  <path fill="none" stroke="#260065" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M21.752 15.002A9.718 9.718 0 0 1 18 15.75A9.75 9.75 0 0 1 8.25 6c0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25A9.75 9.75 0 0 0 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"/>
                </svg>
              </i>
            </a>
            <!--Dark end-->
          </section>
          <!--Action buttons end-->
        </div>
      </header>
      <!--Top bar end-->

      <!--Checkout main content-->
      <section class="flex-1 flex-col justify-between w-full">
        <div class="row-span-8 lg:row-span-9 col-span-6 lg:col-span-5 justify-center overflow-hidden">
          <!--Header-->
          <h2 class="text-base md:text-xl lg:text-2xl font-semibold mb-1 pl-4">Checkout</h2>

          <ol class="flex items-center border-b-2 border-[#260065]/75 whitespace-nowrap overflow-auto no-scrollbar pl-4 pb-1" aria-label="Breadcrumb">
            <li class="inline-flex items-center">
              <a class="flex items-center text-xs opacity-50 hover:opacity-75 text-breadcrumb" href="/cart">Cart</a>
              <svg class="w-5 h-5 md:w-6 md:h-6 opacity-50" width="12" height="10" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M6 13L10 3" stroke="#260065" stroke-linecap="round" />
              </svg>
            </li>
            <li class="inline-flex items-center text-xs opacity-50">
              Checkout
            </li>
          </ol>
          <!--Header end-->

          <!--Scrollable checkout content-->
          <section class="max-lg:overflow-auto max-h-[calc(100vh-11rem)] sm:max-h-[calc(100vh-12rem)] md:max-h-[calc(100vh-13rem)] lg:md:max-h-[calc(100vh-6rem)]">
            <div class="col-span-5 flex w-full flex-col lg:overflow-auto lg:h-screen">
              <section class="flex flex-row max-lg:flex-col">
                <!--Checkout user information-->
                <article class="flex flex-col max-lg:border-b-2 lg:border-r-2 border-[#260065] lg:w-8/12 lg:max-h-screen lg:overflow-auto no-scrollbar border-opacity-75 gap-y-6">
                  <!--Contact input-->
                  <div class="flex flex-col px-6 lg:px-10 pt-4">
                    <h2 class="text-sm md:text-base font-medium mb-1">Contact</h2>
                    <label for="email">
                      <input type="email" id="email" class="outline-none border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 p-2.5" placeholder="EMAIL" required="">
                    </label>
                  </div>
                  <!--Contact input end-->
                  <!--Shipping information-->
                  <div class="flex flex-col px-6 lg:px-10">
                    <!--Shipping information header-->
                    <div>
                      <h2 class="text-sm md:text-base font-medium">Billing/Shipping information</h2>
                      <h3 class="text-sm max-sm:text-[.6rem] font-medium opacity-30 mb-1">
                        Must be the same as your credit card address
                      </h3>
                    </div>
                    <!--Shipping information header end-->
                    <div class="flex flex-col gap-y-2">
                      <!--Country/region-->
                      <label for="country">
                        <input type="text" id="country"
                               class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 outline-none placeholder:opacity-50 p-2.5"
                               placeholder="COUNTRY/REGION" required="">
                      </label>
                      <!--Country/region end-->

                      <!--First name and last name-->
                      <div class="flex flex-col sm:flex-row w-full gap-x-8 max-sm:gap-y-2">
                        <div class="flex w-full sm:w-1/2">
                          <label for="firstname" class="w-full">
                            <input type="text" id="firstname"
                                   class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5"
                                   placeholder="FIRST NAME" required="">
                          </label>
                        </div>
                        <div class="flex w-full sm:w-1/2">
                          <label for="lastname" class="w-full">
                            <input type="text" id="lastname"
                                   class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5"
                                   placeholder="LAST NAME" required="">
                          </label>
                        </div>
                      </div>
                      <!--First name and last name end-->

                      <!--Address-->
                      <label for="address">
                        <input type="text" id="address"
                               class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5"
                               placeholder="ADDRESS"
                               required="">
                      </label>
                      <!--Address end-->

                      <!--City and postal code-->
                      <div class="flex flex-col sm:flex-row gap-x-8 max-sm:gap-y-2 w-full">
                        <div class="flex w-full sm:w-4/6">
                          <label for="city" class="w-full">
                            <input type="text" id="city"
                                   class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5"
                                   placeholder="CITY"
                                   required="">
                          </label>
                        </div>
                        <div class="flex w-full sm:w-2/6">
                          <label for="postalcode" class="w-full">
                            <input type="text" id="postalcode"
                                   class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5"
                                   placeholder="POSTAL CODE" required="">
                          </label>
                        </div>
                      </div>
                      <!--City and postal code end-->

                      <!--Phone number-->
                      <label for="phone">
                        <input type="text" id="phone"
                               class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5"
                               placeholder="PHONE"
                               required="">
                      </label>
                      <!--Phone number end-->
                    </div>
                  </div>
                  <!--Shipping information end-->

                  <!--Shipping method-->
                  <div class="flex flex-col px-6 lg:px-10">
                    <h2 class="text-sm md:text-base font-medium mb-1">Shipping method</h2>
                    <!--Shipping method radio buttons-->
                    <div class="flex flex-col gap-y-2">
                      <!--Standard shipping radio button-->
                      <div class="flex flex-row items-center border w-full rounded-[5px] h-7 md:h-9">
                        <div class="flex items-center w-3/4">
                          <label class="label cursor-pointer px-2">
                            <input type="radio" name="radio-10" class="accent-[#260065]" checked/>
                          </label>
                          <span class="text-xs md:text-sm font-medium">Standard shipping</span>
                        </div>
                        <div class="flex justify-end w-1/4 pr-8">
                          <span class="text-xs md:text-sm font-medium"><u>Free</u></span>
                        </div>
                      </div>
                      <!--Standard shipping radio button end-->

                      <!--Express shipping radio button-->
                      <div class="flex flex-row items-center border h-9 rounded-[5px] w-full">
                        <div class="flex items-center w-3/4">
                          <label class="label cursor-pointer px-2">
                            <input type="radio" name="radio-10" class="accent-[#260065]" checked/>
                          </label>
                          <span class="text-xs md:text-sm font-medium">Express shipping</span>
                        </div>
                        <div class="flex justify-end w-1/4 pr-8">
                          <span class="text-xs md:text-sm font-medium"><u>€26.00</u></span>
                        </div>
                      </div>
                      <!--Express shipping radio button end-->
                    </div>
                    <!--Shipping method radio buttons end-->
                  </div>
                  <!--Shipping method end-->

                  <!--Payment method-->
                  <div class="flex flex-col px-6 lg:px-10 pb-6">
                    <h2 class="text-sm md:text-base font-medium mb-1">Credit Card Info</h2>
                    <!--Card number information-->
                    <div class="flex flex-col gap-y-2">
                      <label for="card_number">
                        <input type="text" id="card_number" class="border rounded-[5px] w-full text-xs md:text-sm h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5" placeholder="CARD NUMBER" required="">
                      </label>
                      <div class="flex flex-col sm:flex-row w-full gap-x-8 max-sm:gap-y-2">
                        <div class="flex w-full sm:w-1/2">
                          <label for="expiration_date" class="w-full">
                            <input type="text" id="expiration_date" class="border rounded-[5px] w-full h-7 md:h-9 text-xs md:text-sm placeholder:opacity-50 outline-none p-2.5" placeholder="EXPIRATION DATE (MM/YY)" required="">
                          </label>
                        </div>
                        <div class="flex w-full sm:w-1/2">
                          <label for="security_code" class="w-full">
                            <input type="text" id="security_code" class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5" placeholder="SECURITY CODE" required="">
                          </label>
                        </div>
                      </div>
                      <label for="name_on_card" class="lg:pb-40">
                        <input type="text" id="name_on_card" class="border rounded-[5px] w-full h-7 md:h-9 text-xs md:text-sm placeholder:opacity-50 outline-none p-2.5" placeholder="CARD NUMBER" required="">
                      </label>
                    </div>
                    <!--Card number information end-->
                  </div>
                </article>
                <!--Checkout user information end-->

                <!--Order summary-->
                <section class="flex flex-row no-scrollbar max-sm:flex-col max-lg:justify-between lg:flex-col lg:overflow-auto lg:w-4/12 lg:max-h-screen max-sm:gap-y-4 lg:gap-y-16">
                  <!--Price summary calculation-->
                  <article class="flex flex-col max-sm:w-full max-lg:w-1/2 sm:border-r-2 lg:border-none border-[#260065] gap-y-4 pt-3 lg:pt-6">
                    <!--Summary-->
                    <div class="flex flex-col gap-y-1">
                      <div class="flex flex-row justify-between px-6">
                        <span class="text-xs font-medium md:text-sm">cart total</span>
                        <span class="text-xs font-medium md:text-sm">3456.00€</span>
                      </div>
                      <div class="flex flex-row justify-between px-6">
                        <span class="text-xs font-medium md:text-sm">Shipping</span>
                        <span class="text-xs font-medium md:text-sm">18.00€</span>
                      </div>
                      <div class="flex flex-row justify-between px-6">
                        <span class="text-xs font-medium md:text-sm">Coupon</span>
                        <span class="text-xs font-medium md:text-sm">-28.00€</span>
                      </div>
                    </div>
                    <!--Summary end-->

                    <!--Discount code-->
                    <div class="flex flex-row px-6">
                      <div class="w-9/12">
                        <label for="discount" class="w-full">
                          <input type="text" id="discount" class="border border-[#260065]/70 border-2 rounded-l-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5" placeholder="DISCOUNT CODE" required="">
                        </label>
                      </div>
                      <div class="w-3/12">
                        <button
                          class="border border-[#260065]/70 border-2 rounded-r-[5px] text-xs md:text-sm w-full h-7 md:h-9 bg-[#260065] hover:bg-[#531DACFF] transition hover:transition-250 text-white">
                          APPLY
                        </button>
                      </div>
                    </div>
                    <!--Discount code end-->
                  </article>
                  <!--Price summary calculation end-->

                  <!--Order total-->
                  <article class="flex max-sm:w-full max-lg:w-1/2 max-lg:pt-3 flex-col gap-y-2">
                    <div>
                      <div class="flex flex-row justify-between px-6">
                        <span class="text-xs font-medium md:text-sm">Order total</span>
                        <span class="text-xs font-medium md:text-sm">€3474.00</span>
                      </div>
                      <div class="px-6">
                        <span
                          class="text-[.6rem] sm:text-xs font-medium opacity-50">Including €34.33 in taxes</span>
                      </div>
                    </div>
                    <!--Button cancel order-->
                    <div class="px-6">
                      <button class="rounded-[5px] cursor-pointer block opacity-75 text-xs md:text-sm w-full h-8 font-medium mx-auto border-2 border-[#260065] hover:text-white hover:bg-[#260065] hover:opacity-100 hover:transition-250">
                        CANCEL
                      </button>
                    </div>
                    <!--Button cancel order end-->

                    <!--Button order-->
                    <div class="px-6">
                      <button class="rounded-[5px] cursor-pointer block text-white text-xs md:text-sm font-medium w-full h-8 bg-[#260065] hover:bg-[#531DACFF] transition hover:transition-250 mx-auto lg:mb-40">
                        ORDER
                      </button>
                    </div>
                    <!--Button order end-->
                  </article>
                  <!--Order total end-->
                </section>
                <!--Order summary end-->
              </section>
            </div>
          </section>
          <!--Scrollable checkout content end-->
        </div>
      </section>
      <!--Checkout main content end-->

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
        <!--Socials icons end-->
      </footer>
      <!--Bottom bar end-->
    </section>
    <!--Main body end-->
  </main>
  <!--Body end-->

  <!--Navbar overlay-->
  <div id="navbar-overlay"
       class="fixed -bottom-full left-0 z-[1] flex flex-col justify-between w-screen h-screen bg-white transition-all duration-250 overflow-hidden">
    <!--Spacer-->
    <div></div>

    <!--Navlinks-->
    <div class="self-center flex flex-col items-center overlay-content">
      <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]"
         href="/products">Products</a>
      <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]"
         href="/signup">Sign up</a>
      <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]"
         href="/size_guide">Size guide</a>
      <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]"
         href="/terms">Terms</a>
      <a class="leading-relaxed md:leading-10 font-bold text-xl md:text-2xl hover:text-[#531DACFF] focus:text-[#531DACFF]"
         href="/shipping">Shipping</a>
    </div>
    <!--Navlinks end-->

    <!--Overlay bottom bar-->
    <div class="flex justify-between pb-4">
      <!--Overlay close button-->
      <button class="pl-4" onclick="closeNavbar()">
        <i>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 lg:w-7 lg:h-7 2xl:w-8 2xl:h-8" width="25"
               height="25" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M20 4L4 20M4 4l16 16"/>
          </svg>
        </i>
      </button>
      <!--Overlay close button end-->
      <!--Overlay socials-->
      <section class="flex gap-2 items-center pr-4">
        <!--Instagram-->
        <a href="https://www.instagram.com/nowtyclothing/">
          <i>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 lg:w-7 lg:h-7 2xl:w-8 2xl:h-8" width="25"
                 height="25" viewBox="0 0 24 24">
              <g fill="none" stroke="#260065" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                <path
                  d="M16.5 3h-9A4.5 4.5 0 0 0 3 7.5v9A4.5 4.5 0 0 0 7.5 21h9a4.5 4.5 0 0 0 4.5-4.5v-9A4.5 4.5 0 0 0 16.5 3Z"/>
                <path d="M15.462 11.487a3.5 3.5 0 1 1-6.925 1.026a3.5 3.5 0 0 1 6.925-1.026ZM17 6.5h.5"/>
              </g>
            </svg>
          </i>
        </a>
        <!--Instagram end-->
        <!--X-->
        <a href="">
          <i>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 lg:w-7 lg:h-7 2xl:w-8 2xl:h-8" width="25"
                 height="25" viewBox="0 0 24 24">
              <path fill="none" stroke="#260065" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="m19 4l-5.93 6.93M5 20l5.93-6.93m0 0l5.795 6.587c.19.216.483.343.794.343h1.474c.836 0 1.307-.85.793-1.435L13.07 10.93m-2.14 2.14L4.214 5.435C3.7 4.85 4.17 4 5.007 4h1.474c.31 0 .604.127.794.343l5.795 6.587"/>
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
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
