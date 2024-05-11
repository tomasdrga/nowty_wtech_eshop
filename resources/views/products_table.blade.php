@foreach($products as $product)
  <!--Cart item on > LG-->
  <tr class="max-md:hidden {{$loop->iteration % 2 != 1 ? '':'bg-[#F5F5F5]'}}">
    <!--Image-->
    <td>
      <div class="flex justify-center items-center">
        <img src="{{ asset('storage/uploads/' .$product->mainImage->name) }}" alt="{{ $product->name }}" class="w-20 h-20 object-contain" alt="Product image in admin">
      </div>
    </td>
    <!--Image end-->
    <!--Product-->
    <td class="py-2">
      <div class="flex flex-col justify-between h-full">
        <h5 class="font-medium mb-2">{{ $product->name }}</h5>
        <div class="text-sm">
          <h6>Category: {{ $product->category }}</h6>
          <h6>Color:
            @foreach ($product->colors as $color)
              {{ $color->name }}
            @endforeach
          </h6>
          <h6>Material:
            @foreach ($product->materials as $material)
              {{ $material->name }}
            @endforeach
          </h6>
        </div>
      </div>
    </td>
    <!--Product end-->
    <!--Quantity-->
    <td>
      <div class="flex flex-row justify-center gap-x-2 font-medium">
        <h6>{{$product->sizes->sum('quantity')}}</h6>
      </div>
    </td>
    <!--Quantity end-->
    <!--Price-->
    <td class="text-center font-medium">
      <h6>{{$product->price}}$</h6>
    </td>
    <!--Price end-->
    <!--Actions-->
    <td class="font-medium">
      <div class="flex flex-row gap-x-4 justify-center self-center">
        <a href="{{ '/product/' . Str::slug($product->name) }}" class="underline decoration-2 hover:text-[#531DACFF]">View</a>
        <a href="{{ route('admin.giveProduct', $product->id) }}" class="underline decoration-2 hover:text-[#531DACFF]">Edit</a>
        <button class="underline decoration-2 hover:text-[#531DACFF] delete-product-btn" data-id="{{$product->id}}" >DELETE</button>
      </div>
    </td>
    <!--Actions end-->
  </tr>
  <!--Cart item on > LG end-->
@endforeach
