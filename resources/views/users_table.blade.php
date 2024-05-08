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
