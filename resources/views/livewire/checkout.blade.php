<section class="max-lg:overflow-auto max-h-[calc(100vh-11rem)] sm:max-h-[calc(100vh-12rem)] md:max-h-[calc(100vh-13rem)] lg:md:max-h-[calc(100vh-6rem)]">
  <div class="col-span-5 flex w-full flex-col lg:overflow-auto lg:h-screen">
    <section>
      <!--Checkout user information-->
      <form form id="create-order-form" method="POST" action="{{ route('create-order') }}" enctype="multipart/form-data" class="flex flex-row max-lg:flex-col">
        @csrf
        <article class="flex flex-col max-lg:border-b-2 lg:border-r-2 border-[#260065] lg:w-8/12 lg:max-h-screen lg:overflow-auto no-scrollbar border-opacity-75 gap-y-6">
          <!--Contact input-->
          <div class="flex flex-col px-6 lg:px-10 pt-4">
            <h2 class="text-sm md:text-base font-medium mb-1">Contact</h2>
            <label for="email">
              <input type="email" name="email" id="email" class="outline-none border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 p-2.5" placeholder="EMAIL" required="">
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
                <input type="text" id="country" name="country"
                       class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 outline-none placeholder:opacity-50 p-2.5"
                       placeholder="COUNTRY/REGION" required="">
              </label>
              <!--Country/region end-->

              <!--First name and last name-->
              <div class="flex flex-col sm:flex-row w-full gap-x-8 max-sm:gap-y-2">
                <div class="flex w-full sm:w-1/2">
                  <label for="firstname" class="w-full">
                    <input type="text" id="firstname" name="firstname"
                           class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5"
                           placeholder="FIRST NAME" required="">
                  </label>
                </div>
                <div class="flex w-full sm:w-1/2">
                  <label for="lastname" class="w-full">
                    <input type="text" id="lastname" name="lastname"
                           class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5"
                           placeholder="LAST NAME" required="">
                  </label>
                </div>
              </div>
              <!--First name and last name end-->

              <!--Address-->
              <label for="address">
                <input type="text" id="address" name="address"
                       class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5"
                       placeholder="ADDRESS"
                       required="">
              </label>
              <!--Address end-->

              <!--City and postal code-->
              <div class="flex flex-col sm:flex-row gap-x-8 max-sm:gap-y-2 w-full">
                <div class="flex w-full sm:w-4/6">
                  <label for="city" class="w-full">
                    <input type="text" id="city" name="city"
                           class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5"
                           placeholder="CITY"
                           required="">
                  </label>
                </div>
                <div class="flex w-full sm:w-2/6">
                  <label for="postalcode" class="w-full">
                    <input type="text" id="postalcode" name="postalcode"
                           class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5"
                           placeholder="POSTAL CODE" required="">
                  </label>
                </div>
              </div>
              <!--City and postal code end-->

              <!--Phone number-->
              <label for="phone">
                <input type="text" id="phone" name="phone"
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
            <div class="flex flex-col gap-y-2" wire:key="shipping-methods" >
              <!--Standard shipping radio button-->
              <div class="flex flex-row items-center border w-full rounded-[5px] h-7 md:h-9">
                <div class="flex items-center w-3/4">
                  <label class="label cursor-pointer px-2">
                    <input type="radio" wire:click="updateShipping(0)" name="shipping" value=0 class="accent-[#260065]" checked/>
                  </label>
                  <span class="text-xs md:text-sm font-medium">Standard shipping</span>
                </div>
                <div class="flex justify-end w-1/4 pr-8">
                  <span class="text-xs md:text-sm font-medium"><u>Free</u></span>
                </div>
              </div>

              <!--Express shipping radio button-->
              <div class="flex flex-row items-center border h-9 rounded-[5px] w-full">
                <div class="flex items-center w-3/4">
                  <label class="label cursor-pointer px-2">
                    <input type="radio" wire:click="updateShipping(26)" name="shipping" value=26 class="accent-[#260065]"/>
                  </label>
                  <span class="text-xs md:text-sm font-medium">Express shipping</span>
                </div>
                <div class="flex justify-end w-1/4 pr-8">
                  <span class="text-xs md:text-sm font-medium"><u>€26.00</u></span>
                </div>
              </div>
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
                <input type="text" name="card_number" id="card_number" class="border rounded-[5px] w-full text-xs md:text-sm h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5" placeholder="CARD NUMBER" required="">
              </label>
              <div class="flex flex-col sm:flex-row w-full gap-x-8 max-sm:gap-y-2">
                <div class="flex w-full sm:w-1/2">
                  <label for="expiration_date" class="w-full">
                    <input type="text" name="expiration_date" id="expiration_date" class="border rounded-[5px] w-full h-7 md:h-9 text-xs md:text-sm placeholder:opacity-50 outline-none p-2.5" placeholder="EXPIRATION DATE (MM/YY)" required="">
                  </label>
                </div>
                <div class="flex w-full sm:w-1/2">
                  <label for="security_code" class="w-full">
                    <input type="text" name="security_code" id="security_code" class="border rounded-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5" placeholder="SECURITY CODE" required="">
                  </label>
                </div>
              </div>
              <label for="name_on_card" class="lg:pb-40">
                <input type="text" name="name_on_card" id="name_on_card" class="border rounded-[5px] w-full h-7 md:h-9 text-xs md:text-sm placeholder:opacity-50 outline-none p-2.5" placeholder="CARD HOLDER" required="">
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
                <span class="text-xs font-medium md:text-sm">{{ Cart::subtotal() }}$</span>
              </div>
              <div class="flex flex-row justify-between px-6">
                <span class="text-xs font-medium md:text-sm">Shipping</span>
                <span class="text-xs font-medium md:text-sm">{{number_format($shipping, 2)}}$</span>
              </div>
              <div class="flex flex-row justify-between px-6">
                <span class="text-xs font-medium md:text-sm">Coupon</span>
                <span class="text-xs font-medium md:text-sm">-{{ Cart::discount() }}$</span>
              </div>
            </div>
            <!--Summary end-->

            <!--Discount code-->
            <div class="flex flex-row px-6">
              <div class="w-9/12">
                <label for="discount" class="w-full">
                  <input wire:model="discountCode" type="text" id="discount" class="border border-[#260065]/70 border-2 rounded-l-[5px] text-xs md:text-sm w-full h-7 md:h-9 placeholder:opacity-50 outline-none p-2.5" placeholder="DISCOUNT CODE">
                </label>
              </div>
              <div class="w-3/12">
                <button wire:click="applyDiscount()" type="button" class="border border-[#260065]/70 border-2 rounded-r-[5px] text-xs md:text-sm w-full h-7 md:h-9 bg-[#260065] hover:bg-[#531DACFF] transition hover:transition-250 text-white">
                  APPLY
                </button>
              </div>
            </div>
            <div class="px-6 w-full">
              <div id="discountMessage" class="flex justify-between text-xs md:text-sm p-2 border border-[#260065]/70 border-2 rounded-[5px]" style="display: {{ $discountMessage ? 'block' : 'none' }}">
                  <span class="text-danger">{{ $discountMessage }}</span>
                  <button type="button" class="close" onclick="document.getElementById('discountMessage').style.display='none'">&times;</button>
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
                <span class="text-xs font-medium md:text-sm">{{ number_format((float)str_replace(',', '', Cart::subtotal()) + $shipping, 2) }}$</span>
              </div>
              <div class="px-6">
                <span
                  class="text-[.6rem] sm:text-xs font-medium opacity-50">Including {{ number_format((float)(str_replace(',', '', substr(Cart::total(), 1)) - str_replace(',', '', substr(Cart::subtotal(), 1))), 2) }}$ in taxes</span>
              </div>
            </div>
            <!--Button cancel order-->
            <div class="px-6">
              <button class="rounded-[5px] cursor-pointer block opacity-75 text-xs md:text-sm w-full h-8 font-medium mx-auto border-2 border-[#260065] hover:text-white hover:bg-[#260065] hover:opacity-100 hover:transition-250" onclick="window.location.href='/cart'">
                CANCEL
              </button>
            </div>
            <!--Button cancel order end-->

            <!--Button order-->
            <div class="px-6">
              <button type="submit" class="rounded-[5px] cursor-pointer block text-white text-xs md:text-sm font-medium w-full h-8 bg-[#260065] hover:bg-[#531DACFF] transition hover:transition-250 mx-auto lg:mb-40">
                ORDER
              </button>
            </div>
            <!--Button order end-->
          </article>
          <!--Order total end-->
        </section>
      </form>
      <!--Order summary end-->
    </section>
  </div>
</section>
