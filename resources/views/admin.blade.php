<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Nowty Clothing • Admin</title>
  <meta name="description" content="Admin page for Nowty Clothing." />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="/img/favicon/nowty_face.png" sizes="any" />
  <link rel="apple-touch-icon" href="/img/favicon/nowty_face.png" />

  <link rel="stylesheet" href="../css/style.css" />
  @livewireStyles
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
        <div class="flex justify-between lg:justify-end">
          <!--Website logo on smaller than LG-->
          <div class="lg:hidden w-1/4 md:w-1/3">
            <a class="justify-start w-24 sm:w-32 md:w-36 h-auto pt-2" href="/">
              <img class="w-24 sm:w-32 md:w-36 h-auto" src="../img/logo/nowty_animation_croped.gif" alt="Nowty Clothing logo" />
            </a>
          </div>

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

      <!--Products-->
      <section class="flex-1 flex-col justify-between w-full">
        <!--Top row-->
        <h2 class="sm:text-lg md:text-xl lg:text-2xl font-semibold mb-1 pl-4">Admin Dashboard</h2>
        <section class="flex flex-row justify-between px-4 border-b-2 border-[#260065] pt-2 pb-1">
          <!--Tab system-->
          <div class="flex flex-row gap-x-8 overflow-x-auto no-scrollbar text-xs md:text-sm lg:text-base">
            <button class="tab-btn tab-active text-nowrap font-semibold" data-target="tab1">OVERVIEW</button>
            <button class="tab-btn tab-inactive text-nowrap font-semibold" data-target="tab2">ALL PRODUCTS</button>
            <button class="tab-btn tab-inactive text-nowrap font-semibold" data-target="tab3">CREATE NEW PRODUCT</button>
            <button class="tab-btn tab-inactive text-nowrap font-semibold" data-target="tab4">LIST ALL USERS</button>
          </div>
          <!--Tab system end-->
          <!--Log out button-->
          <form action= "/logout" method="POST" class="flex">
            @csrf
            <button class="text-xs sm:text-sm text-nowrap font-bold pl-4 hover:opacity-50 logout-btn">LOG OUT</button>
          </form>
          <!--Log out button end-->
        </section>
        <!--Top row end-->

        <!--Scrollable content-->
        <section class="overflow-auto max-h-[calc(100vh-9rem)] sm:max-h-[calc(100vh-10rem)] md:max-h-[calc(100vh-11rem)] lg:md:max-h-[calc(100vh-5rem)]">
          <!--Overview tab-->
          <div id="tab1" class="tab-content py-4">
            <!--Charts part-->
            <section class="flex flex-row justify-between border-b-2 border-[#260065]/50 gap-x-4 mx-20">
              <!--Pie chart-->
              <article class="w-1/3 mb-4">
                <div class="flex flex-col rounded-[5px] bg-[#F5F5F5] h-[24rem]">
                  <span class="text-lg font-semibold text-[#260065] py-4 px-2">Order amount</span>
                  <div class="py-6 mt-4 grid place-items-center px-2">
                    <div id="pie-chart"></div>
                  </div>
                </div>
              </article>
              <!--Pie chart end-->

              <!--Line chart-->
              <article class="w-2/3">
                <div class="flex flex-col rounded-[5px] bg-[#F5F5F5] h-[24rem]">
                  <span class="text-lg font-semibold text-[#260065] py-4 px-2">Orders</span>
                  <div class="pt-6 px-2 pb-0">
                    <div id="line-chart"></div>
                  </div>
                </div>
              </article>
              <!--Line chart end-->
            </section>
            <!--Charts part end-->

            <!--One item in list of information part-->
            <div class="flex flex-row justify-between mx-20 py-3">
              <div class="flex flex-col pl-4">
                <h3 class="text-lg font-semibold">Number of users</h3>
              </div>
              <div class="flex items-center">
                <a href="#" class="text-lg font-bold mr-4"><u>1250</u></a>
              </div>
            </div>
            <!--One item in list of information part end-->

            <!--One item in list of information part-->
            <div class="flex flex-row justify-between bg-[#F5F5F5] mx-20 py-3">
              <div class="flex flex-col pl-4">
                <h3 class="text-lg font-semibold">Number of orders</h3>
              </div>
              <div class="flex items-center">
                <a href="#" class="text-lg font-bold mr-4"><u>456</u></a>
              </div>
            </div>
            <!--One item in list of information part end-->

            <!--One item in list of information part-->
            <div class="flex flex-row justify-between mx-20 py-3">
              <div class="flex flex-col pl-4">
                <h3 class="text-lg font-semibold">Number of all products</h3>
              </div>
              <div class="flex items-center">
                <a href="#" class="text-lg font-bold mr-4"><u>123</u></a>
              </div>
            </div>
            <!--One item in list of information part end-->

            <!--One item in list of information part-->
            <div class="flex flex-row justify-between bg-[#F5F5F5] mx-20 py-3">
              <div class="flex flex-col pl-4">
                <h3 class="text-lg font-semibold">Number of bottoms</h3>
              </div>
              <div class="flex items-center">
                <a href="#" class="text-lg font-bold mr-4"><u>12</u></a>
              </div>
            </div>
            <!--One item in list of information part end-->

            <!--One item in list of information part-->
            <div class="flex flex-row justify-between mx-20 py-3">
              <div class="flex flex-col pl-4">
                <h3 class="text-lg font-semibold">Number of hoods</h3>
              </div>
              <div class="flex items-center">
                <a href="#" class="text-lg font-bold mr-4"><u>69</u></a>
              </div>
            </div>
            <!--One item in list of information part end-->

            <!--One item in list of information part-->
            <div class="flex flex-row justify-between bg-[#F5F5F5] mx-20 py-3">
              <div class="flex flex-col pl-4">
                <h3 class="text-lg font-semibold">Number of tees</h3>
              </div>
              <div class="flex items-center">
                <a href="#" class="text-lg font-bold mr-4"><u>29</u></a>
              </div>
            </div>
            <!--One item in list of information part end-->

            <!--One item in list of information part-->
            <div class="flex flex-row justify-between mx-20 py-3">
              <div class="flex flex-col pl-4">
                <h3 class="text-lg font-semibold">Number of hats</h3>
              </div>
              <div class="flex items-center">
                <a href="#" class="text-lg font-bold mr-4"><u>10</u></a>
              </div>
            </div>
            <!--One item in list of information part end-->

            <!--One item in list of information part-->
            <div class="flex flex-row justify-between bg-[#F5F5F5] mx-20 py-3 pb-10">
              <div class="flex flex-col pl-4">
                <h3 class="text-lg font-semibold">Number of accessories</h3>
              </div>
              <div class="flex items-center">
                <a href="#" class="text-lg font-bold mr-4"><u>23</u></a>
              </div>
            </div>
            <!--One item in list of information part end-->
          </div>
          <!--Overview tab end-->
          <!--All tab-->
          <div id="tab2" class="tab-content hidden">
            <!--Cart table-->
            <table class="table-auto w-full max-h-min">
              <!--Cart table head-->
              <thead class="border-b-2 border-[#260065]/50">
              <!--Head on LG-->
              <tr class="max-md:hidden max-md:text-sm">
                <th class="font-normal opacity-50">Image</th>
                <th class="font-normal text-left opacity-50">Product</th>
                <th class="font-normal opacity-50">Quantity</th>
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
              <!--Cart item on > LG-->
              <tr class="max-md:hidden bg-[#F5F5F5]">
                <!--Image-->
                <td>
                  <div class="flex justify-center items-center">
                    <img src="../img/products/palace_5.png" class="w-20 h-20 object-contain" alt="Product image in admin">
                  </div>
                </td>
                <!--Image end-->
                <!--Product-->
                <td class="py-2">
                  <div class="flex flex-col justify-between h-full">
                    <h5 class="font-medium mb-2">P45 STANDARD JEAN SAND WASH</h5>
                    <div class="text-sm">
                      <h6>Category: Bottom</h6>
                      <h6>Color: Pink</h6>
                      <h6>Material: Denim</h6>
                    </div>
                  </div>
                </td>
                <!--Product end-->
                <!--Quantity-->
                <td>
                  <div class="flex flex-row justify-center gap-x-2 font-medium">
                    <h6>1,000+pcs</h6>
                  </div>
                </td>
                <!--Quantity end-->
                <!--Price-->
                <td class="text-center font-medium">
                  <h6>420$</h6>
                </td>
                <!--Price end-->
                <!--Actions-->
                <td class="font-medium">
                  <div class="flex flex-row gap-x-4 justify-center self-center">
                    <a href="#" class="underline decoration-2 hover:text-[#531DACFF]">View</a>
                    <a href="#" class="underline decoration-2 hover:text-[#531DACFF]">Edit</a>
                    <a href="#" class="underline decoration-2 hover:text-[#531DACFF]">Delete</a>
                  </div>
                </td>
                <!--Actions end-->
              </tr>
              <!--Cart item on > LG end-->
              <!--Cart item on < LG-->
              <tr class="md:hidden bg-[#F5F5F5]">
                <!--Image-->
                <td>
                  <div class="flex justify-center items-center">
                    <img src="../img/products/palace_5.png" class="w-20 h-20 object-contain" alt="">
                  </div>
                </td>
                <!--Image end-->
                <!--Product-->
                <td class="py-2" colspan="5">
                  <div class="flex flex-col justify-between h-full text-sm">
                    <!--Product name-->
                    <h5 class="font-medium mb-2">P45 STANDARD JEAN SAND WASH</h5>
                    <!--Bottom buttons-->
                    <div class="flex flex-row justify-between pt-4 pr-4 sm:pr-8">
                      <!--Quantity-->
                      <div class="flex flex-col">
                        <h6 class="opacity-50">Quantity</h6>
                        <div class="flex flex-row justify-center gap-x-2 font-medium">
                          <h6>1,000+pcs</h6>
                        </div>
                      </div>
                      <!--Quantity end-->
                      <!--Price-->
                      <div class="flex flex-col">
                        <h6 class="opacity-50">Price</h6>
                        <h6 class="text-center font-medium">420$</h6>
                      </div>
                      <!--Price end-->
                      <!--Actions-->
                      <div class="flex flex-col">
                        <h6 class="w-full text-center opacity-50">Actions</h6>
                        <div class="flex flex-row gap-x-4 justify-center self-center font-medium">
                          <a href="#" class="underline decoration-2 focus:text-[#531DACFF] hover:text-[#531DACFF]">View</a>
                          <a href="#" class="underline decoration-2 focus:text-[#531DACFF] hover:text-[#531DACFF]">Edit</a>
                          <a href="#" class="underline decoration-2 focus:text-[#531DACFF] hover:text-[#531DACFF]">Delete</a>
                        </div>
                      </div>
                      <!--Actions end-->
                    </div>
                    <!--Bottom buttons end-->
                  </div>
                </td>
                <!--Product end-->
              </tr>
              <!--Cart item on < LG end-->

              <!--Cart item on > LG-->
              <tr class="max-md:hidden">
                <!--Image-->
                <td>
                  <div class="flex justify-center items-center">
                    <img src="../img/products/palace_5.png" class="w-20 h-20 object-contain" alt="Product image in admin">
                  </div>
                </td>
                <!--Image end-->
                <!--Product-->
                <td class="py-2">
                  <div class="flex flex-col justify-between h-full">
                    <h5 class="font-medium mb-2">P45 STANDARD JEAN SAND WASH</h5>
                    <div class="text-sm">
                      <h6>Category: Bottom</h6>
                      <h6>Color: Pink</h6>
                      <h6>Material: Denim</h6>
                    </div>
                  </div>
                </td>
                <!--Product end-->
                <!--Quantity-->
                <td>
                  <div class="flex flex-row justify-center gap-x-2 font-medium">
                    <h6>1,000+pcs</h6>
                  </div>
                </td>
                <!--Quantity end-->
                <!--Price-->
                <td class="text-center font-medium">
                  <h6>420$</h6>
                </td>
                <!--Price end-->
                <!--Actions-->
                <td class="font-medium">
                  <div class="flex flex-row gap-x-4 justify-center self-center">
                    <a href="#" class="underline decoration-2 hover:text-[#531DACFF]">View</a>
                    <a href="#" class="underline decoration-2 hover:text-[#531DACFF]">Edit</a>
                    <a href="#" class="underline decoration-2 hover:text-[#531DACFF]">Delete</a>
                  </div>
                </td>
                <!--Actions end-->
              </tr>
              <!--Cart item on > LG end-->
              <!--Cart item on < LG-->
              <tr class="md:hidden">
                <!--Image-->
                <td>
                  <div class="flex justify-center items-center">
                    <img src="../img/products/palace_5.png" class="w-20 h-20 object-contain" alt="">
                  </div>
                </td>
                <!--Image end-->
                <!--Product-->
                <td class="py-2" colspan="5">
                  <div class="flex flex-col justify-between h-full text-sm">
                    <!--Product name-->
                    <h5 class="font-medium mb-2">P45 STANDARD JEAN SAND WASH</h5>
                    <!--Bottom buttons-->
                    <div class="flex flex-row justify-between pt-4 pr-4 sm:pr-8">
                      <!--Quantity-->
                      <div class="flex flex-col">
                        <h6 class="opacity-50">Quantity</h6>
                        <div class="flex flex-row justify-center gap-x-2 font-medium">
                          <h6>1,000+pcs</h6>
                        </div>
                      </div>
                      <!--Quantity end-->
                      <!--Price-->
                      <div class="flex flex-col">
                        <h6 class="opacity-50">Price</h6>
                        <h6 class="text-center font-medium">420$</h6>
                      </div>
                      <!--Price end-->
                      <!--Actions-->
                      <div class="flex flex-col">
                        <h6 class="w-full text-center opacity-50">Actions</h6>
                        <div class="flex flex-row gap-x-4 justify-center self-center font-medium">
                          <a href="#" class="underline decoration-2 focus:text-[#531DACFF] hover:text-[#531DACFF]">View</a>
                          <a href="#" class="underline decoration-2 focus:text-[#531DACFF] hover:text-[#531DACFF]">Edit</a>
                          <a href="#" class="underline decoration-2 focus:text-[#531DACFF] hover:text-[#531DACFF]">Delete</a>
                        </div>
                      </div>
                      <!--Actions end-->
                    </div>
                    <!--Bottom buttons end-->
                  </div>
                </td>
                <!--Product end-->
              </tr>
              <!--Cart item on < LG end-->

              <!--Cart item on > LG-->
              <tr class="max-md:hidden bg-[#F5F5F5]">
                <!--Image-->
                <td>
                  <div class="flex justify-center items-center">
                    <img src="../img/products/palace_5.png" class="w-20 h-20 object-contain" alt="Product image in admin">
                  </div>
                </td>
                <!--Image end-->
                <!--Product-->
                <td class="py-2">
                  <div class="flex flex-col justify-between h-full">
                    <h5 class="font-medium mb-2">P45 STANDARD JEAN SAND WASH</h5>
                    <div class="text-sm">
                      <h6>Category: Bottom</h6>
                      <h6>Color: Pink</h6>
                      <h6>Material: Denim</h6>
                    </div>
                  </div>
                </td>
                <!--Product end-->
                <!--Quantity-->
                <td>
                  <div class="flex flex-row justify-center gap-x-2 font-medium">
                    <h6>1,000+pcs</h6>
                  </div>
                </td>
                <!--Quantity end-->
                <!--Price-->
                <td class="text-center font-medium">
                  <h6>420$</h6>
                </td>
                <!--Price end-->
                <!--Actions-->
                <td class="font-medium">
                  <div class="flex flex-row gap-x-4 justify-center self-center">
                    <a href="#" class="underline decoration-2 hover:text-[#531DACFF]">View</a>
                    <a href="#" class="underline decoration-2 hover:text-[#531DACFF]">Edit</a>
                    <a href="#" class="underline decoration-2 hover:text-[#531DACFF]">Delete</a>
                  </div>
                </td>
                <!--Actions end-->
              </tr>
              <!--Cart item on > LG end-->
              <!--Cart item on < LG-->
              <tr class="md:hidden bg-[#F5F5F5]">
                <!--Image-->
                <td>
                  <div class="flex justify-center items-center">
                    <img src="../img/products/palace_5.png" class="w-20 h-20 object-contain" alt="">
                  </div>
                </td>
                <!--Image end-->
                <!--Product-->
                <td class="py-2" colspan="5">
                  <div class="flex flex-col justify-between h-full text-sm">
                    <!--Product name-->
                    <h5 class="font-medium mb-2">P45 STANDARD JEAN SAND WASH</h5>
                    <!--Bottom buttons-->
                    <div class="flex flex-row justify-between pt-4 pr-4 sm:pr-8">
                      <!--Quantity-->
                      <div class="flex flex-col">
                        <h6 class="opacity-50">Quantity</h6>
                        <div class="flex flex-row justify-center gap-x-2 font-medium">
                          <h6>1,000+pcs</h6>
                        </div>
                      </div>
                      <!--Quantity end-->
                      <!--Price-->
                      <div class="flex flex-col">
                        <h6 class="opacity-50">Price</h6>
                        <h6 class="text-center font-medium">420$</h6>
                      </div>
                      <!--Price end-->
                      <!--Actions-->
                      <div class="flex flex-col">
                        <h6 class="w-full text-center opacity-50">Actions</h6>
                        <div class="flex flex-row gap-x-4 justify-center self-center font-medium">
                          <a href="#" class="underline decoration-2 focus:text-[#531DACFF] hover:text-[#531DACFF]">View</a>
                          <a href="#" class="underline decoration-2 focus:text-[#531DACFF] hover:text-[#531DACFF]">Edit</a>
                          <a href="#" class="underline decoration-2 focus:text-[#531DACFF] hover:text-[#531DACFF]">Delete</a>
                        </div>
                      </div>
                      <!--Actions end-->
                    </div>
                    <!--Bottom buttons end-->
                  </div>
                </td>
                <!--Product end-->
              </tr>
              <!--Cart item on < LG end-->

              <!--Cart item on > LG-->
              <tr class="max-md:hidden">
                <!--Image-->
                <td>
                  <div class="flex justify-center items-center">
                    <img src="../img/products/palace_5.png" class="w-20 h-20 object-contain" alt="Product image in admin">
                  </div>
                </td>
                <!--Image end-->
                <!--Product-->
                <td class="py-2">
                  <div class="flex flex-col justify-between h-full">
                    <h5 class="font-medium mb-2">P45 STANDARD JEAN SAND WASH</h5>
                    <div class="text-sm">
                      <h6>Category: Bottom</h6>
                      <h6>Color: Pink</h6>
                      <h6>Material: Denim</h6>
                    </div>
                  </div>
                </td>
                <!--Product end-->
                <!--Quantity-->
                <td>
                  <div class="flex flex-row justify-center gap-x-2 font-medium">
                    <h6>1,000+pcs</h6>
                  </div>
                </td>
                <!--Quantity end-->
                <!--Price-->
                <td class="text-center font-medium">
                  <h6>420$</h6>
                </td>
                <!--Price end-->
                <!--Actions-->
                <td class="font-medium">
                  <div class="flex flex-row gap-x-4 justify-center self-center">
                    <a href="#" class="underline decoration-2 hover:text-[#531DACFF]">View</a>
                    <a href="#" class="underline decoration-2 hover:text-[#531DACFF]">Edit</a>
                    <a href="#" class="underline decoration-2 hover:text-[#531DACFF]">Delete</a>
                  </div>
                </td>
                <!--Actions end-->
              </tr>
              <!--Cart item on > LG end-->
              <!--Cart item on < LG-->
              <tr class="md:hidden">
                <!--Image-->
                <td>
                  <div class="flex justify-center items-center">
                    <img src="../img/products/palace_5.png" class="w-20 h-20 object-contain" alt="">
                  </div>
                </td>
                <!--Image end-->
                <!--Product-->
                <td class="py-2" colspan="5">
                  <div class="flex flex-col justify-between h-full text-sm">
                    <!--Product name-->
                    <h5 class="font-medium mb-2">P45 STANDARD JEAN SAND WASH</h5>
                    <!--Bottom buttons-->
                    <div class="flex flex-row justify-between pt-4 pr-4 sm:pr-8">
                      <!--Quantity-->
                      <div class="flex flex-col">
                        <h6 class="opacity-50">Quantity</h6>
                        <div class="flex flex-row justify-center gap-x-2 font-medium">
                          <h6>1,000+pcs</h6>
                        </div>
                      </div>
                      <!--Quantity end-->
                      <!--Price-->
                      <div class="flex flex-col">
                        <h6 class="opacity-50">Price</h6>
                        <h6 class="text-center font-medium">420$</h6>
                      </div>
                      <!--Price end-->
                      <!--Actions-->
                      <div class="flex flex-col">
                        <h6 class="w-full text-center opacity-50">Actions</h6>
                        <div class="flex flex-row gap-x-4 justify-center self-center font-medium">
                          <a href="#" class="underline decoration-2 focus:text-[#531DACFF] hover:text-[#531DACFF]">View</a>
                          <a href="#" class="underline decoration-2 focus:text-[#531DACFF] hover:text-[#531DACFF]">Edit</a>
                          <a href="#" class="underline decoration-2 focus:text-[#531DACFF] hover:text-[#531DACFF]">Delete</a>
                        </div>
                      </div>
                      <!--Actions end-->
                    </div>
                    <!--Bottom buttons end-->
                  </div>
                </td>
                <!--Product end-->
              </tr>
              <!--Cart item on < LG end-->
              </tbody>
              <!--Card body end-->
            </table>
          </div>
          <!--All tab end-->
          <!--Crate new tab-->
          <div id="tab3" class="tab-content hidden">
            <!--Inputs for create product-->
            <section class="grid grid-cols-3 grid-rows-6 gap-y-5 gap-x-4 border-b-2 border-[#260065]/50 pt-2 px-4 pb-4">
              <!--Title of product-->
              <div class="col-start-1 row-start-1">
                <span class="text-sm font-medium">Title</span>
                <label for="title">
                  <input type="text" id="title" class="border border-[#260065]/50 rounded-[5px] font-medium text-xs md:text-sm w-full h-9 placeholder:opacity-50 p-2.5 outline-none" placeholder="P45 STANDARD JEAN SAND WASH" required="">
                </label>
              </div>
              <!--Title of product end-->

              <!--Category-->
              <div class="col-start-1 row-start-2">
                <span class="text-sm font-medium">Category</span>
                <label for="category">
                  <input type="text" id="category" class="border rounded-[5px] border-[#260065]/50 text-xs md:text-sm w-full h-9 placeholder:opacity-50 outline-none p-2.5" placeholder="BOTTOMS" required="">
                </label>
              </div>
              <!--Category end-->

              <!--Material-->
              <div class="col-start-1 row-start-3">
                <span class="text-sm font-medium">Material</span>
                <label for="material">
                  <input type="text" id="material" class="border rounded-[5px] border-[#260065]/50 text-xs md:text-sm w-full h-9 placeholder:opacity-50 outline-none p-2.5" placeholder="DENIM" required="">
                </label>
              </div>
              <!--Material end-->

              <!--Color-->
              <div class="col-start-1 row-start-4">
                <span class="text-sm font-medium">Color</span>
                <label for="color">
                  <input type="text" id="color" class="text-xs border text-admin border-[1px] border-[#260065]/50 outline-none h-9 md:text-sm placeholder:opacity-50 rounded-[5px] w-full p-2.5" placeholder="DARK BLUE" required="">
                </label>
              </div>
              <!--Color end-->

              <!--Price-->
              <div class="col-start-1 row-start-5">
                <span class="text-sm font-medium">Price in €</span>
                <label for="price">
                  <input type="text" id="price" class="border rounded-[5px] border-[#260065]/50 text-xs md:text-sm w-full h-9 placeholder:opacity-50 outline-none p-2.5" placeholder="426" required="">
                </label>
              </div>
              <!--Price end-->

              <!--Size guide-->
              <div class="col-start-1 row-start-6">
                <span class="text-sm font-medium">Size guide</span>
                <div class="flex items-center justify-center w-full">
                  <label for="dropzone-file" class="flex flex-col items-center justify-center border border-[#260065]/50 rounded-[5px] w-full h-9 cursor-pointer">
                    <span class="flex flex-row justify-between w-full">
                      <span id="file-name" class="text-xs md:text-sm font-medium opacity-20 p-2.5">p45_size_guide.png</span>
                    </span>
                    <!--Dropzone field-->
                    <input id="dropzone-file" type="file" class="hidden" onchange="document.getElementById('file-name').textContent = this.files[0].name"/>
                  </label>
                </div>
              </div>
              <!--Size guide end-->

              <!--Description and sizes-->
              <section class="col-start-2 row-start-1 row-span-4 col-span-2">
                <div class="flex flex-row gap-x-4">
                  <!--Texts for description and tech details-->
                  <div class="flex flex-col gap-y-5 w-8/12">
                    <div>
                      <label for="description" class="text-sm font-medium">Description (MAX. 5 bullet Points)</label>
                      <textarea id="description" rows="3" class="resize-none block border border-[#260065]/50 rounded-[5px] w-full h-[116px] outline-none text-xs md:text-sm placeholder:opacity-50 px-2.5 py-1" placeholder="• IF YOU DON’T LIKE \n• THIS PANTS \n• LEAVE THE WEBSITE \n• IMMEDIATELY \n• YOU TOSS POT"></textarea>
                    </div>
                    <div>
                      <label for="tech_details" class="text-admin text-sm font-medium">Technical Details (MAX. 5 bullet Points)</label>
                      <textarea id="tech_details" rows="3" class="resize-none block border border-[#260065]/50 rounded-[5px] w-full h-[116px] outline-none text-xs md:text-sm placeholder:opacity-50 px-2.5 py-1" placeholder="• 80% COTTON \n• 10% WOOL \n• GORATEX \n• WATERPROOF"></textarea>
                    </div>
                  </div>
                  <!--Texts for description and tech details end-->

                  <!--Sizes quantity-->
                  <div class="flex flex-col w-4/12 gap-y-1">
                    <span class="text-sm font-medium">Sizes quantity</span>
                    <div class="flex flex-col gap-y-6">
                      <!--XS quantity-->
                      <div class="flex items-center justify-between rounded-[5px] border border-[#260065]/50 h-9" data-hs-input-number>
                        <!--Label for size-->
                        <div class="flex items-center justify-center border-r border-[#260065]/50 w-10 h-full">
                          <span>XS</span>
                        </div>
                        <!--Label for size end-->

                        <!--Input for quantity-->
                        <label for="quantity_xs">
                          <input id="quantity_xs" class="text-center outline-none w-full p-0" type="text" value="1" data-hs-input-number-input>
                        </label>
                        <!--Input for quantity end-->

                        <!--Buttons for increment and decrement-->
                        <div class="flex justify-end items-center h-full">
                          <!--Decrement button-->
                          <div class="justify-center border-l border-[#260065]/50 h-full p-1">
                            <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md" data-hs-input-number-decrement>
                              <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/>
                              </svg>
                            </button>
                          </div>
                          <!--Decrement button end-->

                          <!--Increment button-->
                          <div class="bg-[#260065] rounded-r-[4px] h-full justify-center p-1">
                            <button type="button" class="size-6 inline-flex justify-center items-center text-sm font-medium text-white" data-hs-input-number-increment>
                              <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/>
                                <path d="M12 5v14"/>
                              </svg>
                            </button>
                          </div>
                          <!--Increment button end-->
                        </div>
                        <!--Buttons for increment and decrement end-->
                      </div>
                      <!--XS quantity end-->

                      <!--S quantity-->
                      <div class="flex items-center justify-between rounded-[5px] border-[1px] border-[#260065]/50 h-9" data-hs-input-number>
                        <!--Label for size-->
                        <div class="flex items-center justify-center border-r border-[#260065]/50 w-10 h-full">
                          <span>S</span>
                        </div>
                        <!--Label for size end-->

                        <!--Input for quantity-->
                        <label for="quantity_s">
                          <input id="quantity_s" class="text-center outline-none w-full p-0" type="number" value="0" data-hs-input-number-input>
                        </label>
                        <!--Input for quantity end-->

                        <!--Buttons for increment and decrement-->
                        <div class="flex justify-end items-center h-full">
                          <!--Decrement button-->
                          <div class="justify-center border-l-[1px] border-[#260065]/50 h-full p-1">
                            <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md" data-hs-input-number-decrement>
                              <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/>
                              </svg>
                            </button>
                          </div>
                          <!--Decrement button end-->

                          <!--Increment button-->
                          <div class="bg-[#260065] rounded-r-[4px] h-full justify-center p-1">
                            <button type="button" class="size-6 inline-flex justify-center items-center text-sm font-medium text-white" data-hs-input-number-increment>
                              <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/>
                                <path d="M12 5v14"/>
                              </svg>
                            </button>
                          </div>
                          <!--Increment button end-->
                        </div>
                        <!--Buttons for increment and decrement end-->
                      </div>
                      <!--S quantity end-->

                      <!--M quantity-->
                      <div class="flex items-center justify-between rounded-[5px] border-[1px] border-[#260065]/50 h-9" data-hs-input-number>
                        <!--Label for size-->
                        <div class="flex items-center justify-center border-r border-[#260065]/50 w-10 h-full">
                          <span>M</span>
                        </div>
                        <!--Label for size end-->

                        <!--Input for quantity-->
                        <label for="quantity_m">
                          <input id="quantity_m" class="text-center outline-none w-full p-0" type="number" value="0" data-hs-input-number-input>
                        </label>
                        <!--Input for quantity end-->

                        <!--Buttons for increment and decrement-->
                        <div class="flex justify-end items-center h-full">
                          <!--Decrement button-->
                          <div class="h-full justify-center border-l border-[#260065]/50 p-1">
                            <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md" data-hs-input-number-decrement>
                              <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/>
                              </svg>
                            </button>
                          </div>
                          <!--Decrement button end-->

                          <!--Increment button-->
                          <div class="bg-[#260065] rounded-r-[4px] h-full justify-center p-1">
                            <button type="button" class="size-6 inline-flex justify-center items-center text-sm font-medium text-white" data-hs-input-number-increment>
                              <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/>
                                <path d="M12 5v14"/>
                              </svg>
                            </button>
                          </div>
                          <!--Increment button end-->
                        </div>
                        <!--Buttons for increment and decrement end-->
                      </div>
                      <!--M quantity end-->

                      <!--L quantity-->
                      <div class="flex items-center justify-between rounded-[5px] border-[1px] border-[#260065]/50 h-9" data-hs-input-number>
                        <!--Label for size-->
                        <div class="flex items-center justify-center border-r border-[#260065]/50 w-10 h-full">
                          <span>L</span>
                        </div>
                        <!--Label for size end-->

                        <!--Input for quantity-->
                        <label for="quantity_l">
                          <input id="quantity_l" class="text-center outline-none w-full p-0" type="number" value="0" data-hs-input-number-input>
                        </label>
                        <!--Input for quantity end-->

                        <!--Buttons for increment and decrement-->
                        <div class="flex justify-end items-center h-full">
                          <!--Decrement button-->
                          <div class="h-full justify-center border-l-[1px] border-[#260065]/50 p-1">
                            <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md" data-hs-input-number-decrement>
                              <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/>
                              </svg>
                            </button>
                          </div>
                          <!--Decrement button end-->

                          <!--Increment button-->
                          <div class="bg-[#260065] rounded-r-[4px] h-full justify-center p-1">
                            <button type="button" class="size-6 inline-flex justify-center items-center text-sm font-medium text-white" data-hs-input-number-increment>
                              <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/>
                                <path d="M12 5v14"/>
                              </svg>
                            </button>
                          </div>
                          <!--Increment button end-->
                        </div>
                        <!--Buttons for increment and decrement end-->
                      </div>
                      <!--L quantity end-->

                      <!--XL quantity-->
                      <div class="flex items-center justify-between rounded-[5px] border-[1px] border-[#260065]/50 h-9" data-hs-input-number>
                        <!--Label for size-->
                        <div class="flex justify-center items-center border-r-[1px] border-[#260065]/50 w-10 h-full">
                          <span>XL</span>
                        </div>
                        <!--Label for size end-->

                        <!--Input for quantity-->
                        <label for="quantity_xl">
                          <input id="quantity_xl" class="text-center outline-none w-full p-0" type="number" value="0" data-hs-input-number-input>
                        </label>
                        <!--Input for quantity end-->

                        <!--Buttons for increment and decrement-->
                        <div class="flex justify-end items-center h-full">
                          <!--Decrement button-->
                          <div class="h-full justify-center p-1 border-l-[1px] border-[#260065]/50">
                            <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md" data-hs-input-number-decrement>
                              <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/>
                              </svg>
                            </button>
                          </div>
                          <!--Decrement button end-->

                          <!--Increment button-->
                          <div class="bg-[#260065] rounded-r-[4px] h-full justify-center p-1">
                            <button type="button" class="size-6 inline-flex justify-center items-center text-sm font-medium text-white" data-hs-input-number-increment>
                              <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/>
                                <path d="M12 5v14"/>
                              </svg>
                            </button>
                          </div>
                          <!--Increment button end-->
                        </div>
                        <!--Buttons for increment and decrement end-->
                      </div>
                      <!--XL quantity end-->
                    </div>
                  </div>
                  <!--Sizes quantity end-->
                </div>
              </section>
              <!--Description and sizes end-->

              <!--Product images-->
              <section class="col-start-2 row-start-5 row-span-2 col-span-2">
                <span class="text-sm font-medium">Images</span>
                <!--Image input with preview-->
                <div class="border-[#260065]/50 border-[1px] h-[116px] rounded-[5px] p-3 grid grid-cols-5 gap-x-8">
                  <div class="flex justify-center h-24 pb-2">
                    <img id='preview_img1' class="object-cover rounded-[5px] h-full w-24" src="../img/icons/add-photo.png" alt="Current profile photo" onclick="document.getElementById('fileInput1').click();" />
                    <input type="file" id="fileInput1" onchange="loadFile(event, 'preview_img1')" class="hidden" />
                  </div>
                  <div class="flex justify-center h-24 pb-2">
                    <img id='preview_img2' class="object-cover rounded-[5px] h-full w-24" src="../img/icons/add-photo.png" alt="Current profile photo" onclick="document.getElementById('fileInput2').click();" />
                    <input type="file" id="fileInput2" onchange="loadFile(event, 'preview_img2')" class="hidden" />
                  </div>
                  <div class="flex justify-center h-24 pb-2">
                    <img id='preview_img3' class="object-cover rounded-[5px] h-full w-24" src="../img/icons/add-photo.png" alt="Current profile photo" onclick="document.getElementById('fileInput3').click();" />
                    <input type="file" id="fileInput3" onchange="loadFile(event, 'preview_img3')" class="hidden" />
                  </div>

                  <div class="flex justify-center h-24 pb-2">
                    <img id='preview_img4' class="object-cover rounded-[5px] h-full w-24" src="../img/icons/add-photo.png" alt="Current profile photo" onclick="document.getElementById('fileInput4').click();" />
                    <input type="file" id="fileInput4" onchange="loadFile(event, 'preview_img4')" class="hidden" />
                  </div>
                  <div class="flex justify-center h-24 pb-2">
                    <img id='preview_img5' class="object-cover rounded-[5px] h-full w-24" src="../img/icons/add-photo.png" alt="Current profile photo" onclick="document.getElementById('fileInput5').click();" />
                    <input type="file" id="fileInput5" onchange="loadFile(event, 'preview_img5')" class="hidden" />
                  </div>
                </div>
                <!--Image input with preview end-->
              </section>
              <!--Product images end-->
            </section>
            <!--Inputs for create product end-->

            <!--Create product button-->
            <section class="flex justify-end pt-8 pr-4 pb-10">
              <button class="text-xl text-white font-bold border-0 rounded-lg bg-[#260065] hover:bg-[#531DACFF] transition hover:transition-250 px-8 py-2">CREATE PRODUCT</button>
            </section>
            <!--Create product button end-->
          </div>
          <!--Create new tab end-->
          <!--List all users tab-->
          <div id="tab4" class="tab-content hidden">
            <table class="table-auto w-full max-h-min mb-10">
              <!--Cart table head-->
              <thead class="border-b-2 border-[#260065]/50">
              <!--Head on LG-->
              <tr class="max-md:hidden max-md:text-sm">
                <th class="font-normal opacity-50">ID</th>
                <th class="font-normal text-left opacity-50">User info</th>
                <th class="font-normal text-left opacity-50">UID</th>
                <th class="font-normal opacity-50">Sign up date</th>
                <th class="font-normal opacity-50">Actions</th>
              </tr>
              <!--Head on < LG-->
              <tr class="md:hidden max-md:text-sm">
                <th class="font-normal opacity-50">ID</th>
                <th class="font-normal opacity-50" colspan="5">User info</th>
              </tr>
              </thead>
              <!--Head end-->


              <!--Card body-->
              <tbody id="usersTableBody">
                @foreach ($users as $user)
                  <!--Admin item on > LG-->
                  <tr class="max-md:hidden {{$loop->iteration % 2 != 1 ? '':'bg-[#F5F5F5]'}}">
                    <!--ID-->
                    <td class="text-center font-bold min-w-20">
                      <h6>#{{$loop->iteration}}</h6>
                    </td>
                    <!--ID end-->
                    <!--User info-->
                    <td class="py-2">
                      <div class="flex flex-col justify-between h-full">
                        <h5 class="font-medium mb-2">{{$user->name}}</h5>
                        <div class="text-sm">
                          <h6>Role: {{$user->role}}</h6>
                          <h6>{{$user->email}}</h6>
                          <h6>Number of orders: {{$user->orders->count()}}</h6>
                        </div>
                      </div>
                    </td>
                    <!--User info end-->
                    <!--UID-->
                    <td class="font-medium">
                      <h6>{{$user->id}}</h6>
                    </td>
                    <!--UID end-->
                    <!--Sign up date-->
                    <td class="text-center font-medium">
                      <h6>{{$user->created_at->format('d.m.Y')}}</h6>
                    </td>
                    <!--Sign up date end-->

                    <!--Actions-->
                    <td class="font-medium">
                      <div class="flex flex-row gap-x-4 justify-center self-center">
                        @if($user->id !== auth()->user()->id)
                          <button type="button" class="underline decoration-2 hover:text-[#531DACFF] delete-btn" data-id="{{ $user->id }}">
                            DELETE
                          </button>
                        @else
                          <button type="button" class="underline decoration-2" data-id="{{ $user->id }}" disabled>
                            DELETE
                          </button>
                        @endif
                      </div>
                    </td>
                    <!--Actions end-->
                  </tr>
                  <!--User item on > LG end-->
                @endforeach
              </tbody>
              <!--Card body end-->

            </table>
          </div>
          <!--List all users tab end-->
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

  <!--  Place for importing scripts-->
  <script src="../js/navbar.js"></script>
  <script src="../js/tabs.js"></script>
  <script src="../js/admin.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="../js/chart.js"></script>
  <script src="{{ asset('../js/deleteUser.js') }}"></script>
  <script src="{{ asset('../js/logout.js') }}"></script>
  @include('sweetalert::alert')
  @livewireScripts
</body>
</html>
