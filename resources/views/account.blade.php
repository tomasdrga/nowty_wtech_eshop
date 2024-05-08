<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>Nowty Clothing • Account</title>
  <meta name="description" content="Account overview page of Nowty Clothing website."/>

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
          <img class="h-auto max-w-full mx-auto" src="/img/logo/nowty_animation_croped.gif" alt="Nowty Clothing logo"/>
        </a>
        <div class="flex flex-col pb-4 pl-4">
          <a class="leading-relaxed xl:leading-10 font-bold text-xl xl:text-2xl 2xl:text-3xl hover:text-[#531DACFF]"
             href="/products">Products</a>
          <a class="leading-relaxed xl:leading-10 font-bold text-xl xl:text-2xl 2xl:text-3xl hover:text-[#531DACFF]"
             href="/signup">Sign up</a>
          <a class="leading-relaxed xl:leading-10 font-bold text-xl xl:text-2xl 2xl:text-3xl hover:text-[#531DACFF]"
             href="/size_guide">Size guide</a>
          <a class="leading-relaxed xl:leading-10 font-bold text-xl xl:text-2xl 2xl:text-3xl hover:text-[#531DACFF]"
             href="/terms">Terms</a>
          <a class="leading-relaxed xl:leading-10 font-bold text-xl xl:text-2xl 2xl:text-3xl hover:text-[#531DACFF]"
             href="/shipping">Shipping</a>
        </div>
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
            <img class="max-w-full h-auto mx-auto" src="img/logo/nowty_animation_croped.gif" alt="Nowty Clothing logo"/>
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
                  <path fill="#260065" stroke="#260065" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6a3.75 3.75 0 1 1-7.5 0a3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
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

      <!--My account overview content-->
      <section class="flex-1 flex-col justify-between w-full">
        <!--Top row-->
        <h2 class=" sm:text-lg md:text-xl lg:text-2xl font-semibold mb-1 pl-4">My account</h2>
        <div class="flex flex-row justify-between px-4 border-b-2 border-[#260065] pt-2 pb-1">
          <!--Tab system-->
          <div class="flex flex-row gap-x-8 overflow-x-auto no-scrollbar text-xs md:text-sm lg:text-base">
            <button class="tab-btn tab-active text-nowrap font-semibold" data-target="tab1">OVERVIEW</button>
            <button class="tab-btn tab-inactive text-nowrap font-semibold" data-target="tab2">ORDERS</button>
            <button class="tab-btn tab-inactive text-nowrap font-semibold" data-target="tab3">MY DETAILS</button>
            <button class="tab-btn tab-inactive text-nowrap font-semibold" data-target="tab4">ADDRESSES</button>
          </div>
          <!--Tab system end-->
          <!--Log out button-->
          <div class="flex">
            <button class="text-xs sm:text-sm text-nowrap font-bold pl-4 hover:opacity-50">LOG OUT</button>
          </div>
          <!--Log out button end-->
        </div>

        <!--Scrollable content-->
        <section class="overflow-auto max-h-[calc(100vh-11rem)] sm:max-h-[calc(100vh-12rem)] md:max-h-[calc(100vh-13rem)] lg:md:max-h-[calc(100vh-5rem)]">
          <!--Overview tab-->
          <section id="tab1" class="tab-content py-4">
            <article class="flex flex-col">
              <!--Recent orders-->
              <div class="flex flex-col border-b-2 border-[#260065]/50">
                <h3 class="text-sm lg:text-base font-medium mb-1 pl-4">Recent orders</h3>
                <!--First order-->
                <article class="flex flex-row justify-between border-b-[1px] border-[#260065]/50">
                  <div class="flex flex-col pl-4">
                    <div class="flex flex-row gap-x-8 sm:gap-x-16">
                      <div class="text-xs sm:text-sm opacity-90">26/2/2024</div>
                      <div class="text-xs sm:text-sm opacity-50">#2001781488156</div>
                    </div>
                    <div class="text-xs sm:text-sm opacity-90">ASAP Rocky</div>
                    <div class="text-xs sm:text-sm opacity-90">€780</div>
                    <div class="text-xs sm:text-sm opacity-50">shipped</div>
                  </div>
                  <div class="flex items-center">
                    <a href="" class="text-xs sm:text-sm mr-2 sm:mr-8"><u>View</u></a>
                  </div>
                </article>
                <!--First order end-->

                <!--Second order-->
                <article class="flex flex-row justify-between">
                  <div class="flex flex-col pl-4">
                    <div class="flex flex-row gap-x-8 sm:gap-x-16">
                      <div class="text-user text-xs sm:text-sm opacity-90">26/2/2024</div>
                      <div class="text-user text-xs sm:text-sm opacity-50">#2001781488156</div>
                    </div>
                    <div class="text-user text-xs sm:text-sm opacity-90">ASAP Rocky</div>
                    <div class="text-user text-xs sm:text-sm opacity-90">€780</div>
                    <div class="text-user text-xs sm:text-sm opacity-50">shipped</div>
                  </div>
                  <div class="flex items-center">
                    <a href="" class="text-user text-xs sm:text-sm mr-2 sm:mr-8"><u>View</u></a>
                  </div>
                </article>
                <!--Second order end-->
              </div>
              <!--Recent orders end-->

              <!--My details-->
              <section class="flex flex-row justify-between border-b-2 border-[#260065]/50">
                <div class="flex flex-col pl-4">
                  <h3 class="text-sm lg:text-base font-medium mb-1 mt-2">My details</h3>
                  <div class="text-xs sm:text-sm opacity-90">ASAP Rocky</div>
                  <div class="text-xs sm:text-sm opacity-90">asapko@gmail.com</div>
                  <div class="text-xs sm:text-sm opacity-90">•••••••••••</div>
                </div>
                <div class="flex items-center">
                  <a href="" class="text-xs sm:text-sm mr-2 sm:mr-8"><u>View</u></a>
                </div>
              </section>
              <!--My details end-->

              <!--Shipping address-->
              <section class="flex flex-row justify-between border-b-2 border-[#260065]/50">
                <div class="flex flex-col pl-4">
                  <h3 class="text-sm lg:text-base font-medium mb-1 mt-2">Shipping address</h3>
                  <div class="text-xs sm:text-sm opacity-90">ASAP Rocky</div>
                  <div class="text-xs sm:text-sm opacity-90">Partizanska 382</div>
                  <div class="text-xs sm:text-sm opacity-90">Bratislava</div>
                  <div class="text-xs sm:text-sm opacity-90">811 01</div>
                  <div class="text-xs sm:text-sm opacity-90">Slovakia</div>
                </div>
                <div class="flex items-center">
                  <a href="" class="text-xs sm:text-sm mr-2 sm:mr-8"><u>View</u></a>
                </div>
              </section>
              <!--Shipping address end-->
            </article>
          </section>
          <!--Overview tab end-->
          <!--Orders tab-->
          <section id="tab2" class="tab-content hidden">
            <!--Orders content-->
            <div class="flex flex-col pt-2 gap-y-2">
              <!--Order-->
              <article class="flex flex-col pl-4 justify-between border-b-2 border-[#260065]/20 pb-2">
                <div class="flex flex-row gap-x-8 sm:gap-x-16">
                  <div class="text-xs sm:text-sm opacity-90">26/2/2024</div>
                  <div class="text-xs sm:text-sm opacity-50">#2001781488156</div>
                </div>
                <div class="text-xs sm:text-sm opacity-90">ASAP Rocky</div>
                <div class="text-xs sm:text-sm opacity-90">€780</div>
                <div class="text-xs sm:text-sm opacity-50">shipped</div>
              </article>
              <!--Order end-->

              <!--Order-->
              <article class="flex flex-col pl-4 justify-between border-b-2 border-[#260065]/20 pb-2">
                <div class="flex flex-row gap-x-8 sm:gap-x-16">
                  <div class="text-xs sm:text-sm opacity-90">12/1/2024</div>
                  <div class="text-xs sm:text-sm opacity-50">#2001781488761</div>
                </div>
                <div class="text-xs sm:text-sm opacity-90">ASAP Rocky</div>
                <div class="text-xs sm:text-sm opacity-90">€15780</div>
                <div class="text-xs sm:text-sm opacity-50">shipped</div>
              </article>
              <!--Order end-->

              <!--Order-->
              <article class="flex flex-col pl-4 justify-between border-b-2 border-[#260065]/20 pb-2">
                <div class="flex flex-row gap-x-8 sm:gap-x-16">
                  <div class="text-user text-xs sm:text-sm opacity-90">1/1/2024</div>
                  <div class="text-user text-xs sm:text-sm opacity-50">#2001781488228</div>
                </div>
                <div class="text-user text-xs sm:text-sm opacity-90">ASAP Rocky</div>
                <div class="text-user text-xs sm:text-sm opacity-90">€12800</div>
                <div class="text-user text-xs sm:text-sm opacity-50">shipped</div>
              </article>
              <!--Order end-->

              <!--Order-->
              <article class="flex flex-col pl-4 justify-between border-b-2 border-[#260065]/20 pb-2">
                <div class="flex flex-row gap-x-8 sm:gap-x-16">
                  <div class="text-xs sm:text-sm opacity-90">2/12/2023</div>
                  <div class="text-xs sm:text-sm opacity-50">#2001781981273</div>
                </div>
                <div class="text-xs sm:text-sm opacity-90">ASAP Rocky</div>
                <div class="text-xs sm:text-sm opacity-90">€680</div>
                <div class="text-xs sm:text-sm opacity-50">shipped</div>
              </article>
              <!--Order end-->

              <!--Order-->
              <article class="flex flex-col pl-4 justify-between border-b-2 border-[#260065]/20 pb-2">
                <div class="flex flex-row gap-x-8 sm:gap-x-16">
                  <div class="text-xs sm:text-sm opacity-90">23/11/2023</div>
                  <div class="text-xs sm:text-sm opacity-50">#2001781487452</div>
                </div>
                <div class="text-xs sm:text-sm opacity-90">ASAP Rocky</div>
                <div class="text-xs sm:text-sm opacity-90">€1980</div>
                <div class="text-xs sm:text-sm opacity-50">shipped</div>
              </article>
              <!--Order end-->

              <!--Order-->
              <article class="flex flex-col pl-4 justify-between border-b-2 border-[#260065]/20 pb-2">
                <div class="flex flex-row gap-x-8 sm:gap-x-16">
                  <div class="text-xs sm:text-sm opacity-90">18/9/2023</div>
                  <div class="text-xs sm:text-sm opacity-50">#2001781488156</div>
                </div>
                <div class="text-xs sm:text-sm opacity-90">ASAP Rocky</div>
                <div class="text-xs sm:text-sm opacity-90">€1880</div>
                <div class="text-xs sm:text-sm opacity-50">shipped</div>
              </article>
              <!--Order end-->
            </div>
            <!--Orders content end-->
          </section>
          <!--Orders tab end-->
          <!--My details new tab-->
          <section id="tab3" class="tab-content hidden">
            <!--Account details-->
            <div class="flex flex-row justify-between border-b-2 border-[#260065]/50 pt-2">
              <!--Left side of component-->
              <section class="flex flex-col pl-4">
                <label for="first_name">
                  <input type="text" id="first_name" class="text-xs sm:text-sm text-[#260065] placeholder:text-[#260065] w-full outline-none" placeholder="ASAP" required="">
                </label>
                <label for="last_name">
                  <input type="text" id="last_name" class="text-xs sm:text-sm text-[#260065] placeholder:text-[#260065] w-full outline-none" placeholder="ROCKY" required="">
                </label>
                <label for="email">
                  <input type="email" id="email" class="text-xs sm:text-sm text-[#260065] placeholder:text-[#260065] w-full outline-none" placeholder="asapko@gmail.com" required="">
                </label>
                <label for="password">
                  <input type="password" id="password" class="text-xs sm:text-sm text-[#260065] placeholder:text-[#260065] w-full outline-none pb-4" placeholder="•••••••••••" required="">
                </label>
              </section>
              <!--Left side of component end-->

              <!--Right side of component-->
              <div class="flex items-center">
                <button class="text-user text-xs sm:text-sm mr-2 sm:mr-8"><u>EDIT</u></button>
              </div>
              <!--Right side of component end-->
            </div>
            <!--Account details end-->
          </section>
          <!--My details tab end-->
          <!--Addresses tab-->
          <section id="tab4" class="tab-content hidden">
            <!--Shipping address-->
            <div class="flex flex-row justify-between border-b-2 border-[#260065]/50 pt-2">
              <!--Left part of shipping address-->
              <section class="flex flex-col pl-4">
                <h3 class="text-sm lg:text-base font-medium text-user mb-1 mt-2">Shipping address</h3>

                <!--Name-->
                <label for="name">
                  <input type="text" id="name" class="text-xs sm:text-sm text-[#260065] placeholder:text-[#260065] w-full outline-none" placeholder="ASAP ROCKY" required="">
                </label>
                <!--Name end-->

                <!--Address-->
                <label for="address">
                  <input type="text" id="address" class="text-xs sm:text-sm text-[#260065] placeholder:text-[#260065] w-full outline-none" placeholder="PARTIZANSKA 382" required="">
                </label>
                <!--Address end-->

                <!--City-->
                <label for="city">
                  <input type="text" id="city" class="text-xs sm:text-sm text-[#260065] placeholder:text-[#260065] w-full outline-none" placeholder="BRATISLAVA" required="">
                </label>
                <!--City end-->

                <!--Postal code-->
                <label for="postal_code">
                  <input type="text" id="postal_code" class="text-xs sm:text-sm text-[#260065] placeholder:text-[#260065] w-full outline-none" placeholder="811 01" required="">
                </label>
                <!--Postal code end-->

                <!--Country-->
                <label for="country">
                  <input type="text" id="country" class="text-xs sm:text-sm text-[#260065] placeholder:text-[#260065] w-full outline-none pb-4" placeholder="SLOVAKIA" required="">
                </label>
                <!--Country end-->
              </section>
              <!--Left part of shipping address end-->

              <!--Right part of shipping address-->
              <div class="flex items-center">
                <button class="text-user text-xs sm:text-sm mr-2 sm:mr-8"><u>EDIT</u></button>
              </div>
              <!--Right part of shipping address end-->
            </div>
            <!--Shipping address end-->
          </section>
          <!--Addresses tab end-->
        </section>
        <!--Scrollable content end-->
      </section>
      <!--My account overview content end-->

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
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
