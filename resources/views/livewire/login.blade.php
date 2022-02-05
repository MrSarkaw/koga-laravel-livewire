<div>
    <div class="flex flex-wrap items-center h-screen justfiy-center ">
        <div class="w-full text-sm text-center lg:text-md xl:text-xl 2xl:text-2xl">
            @if(session()->has("invalid"))
            <div class="p-2 mx-auto mb-5 text-white bg-red-500 rounded-lg md:w-6/12 lg:w-3/12">
                {{session()->get("invalid")}}
            </div>
            @endif
            <form wire:submit.prevent='login()'>
                <img src="logo/logo.png" class="w-48 mx-auto border rounded-full" alt="">
                <div class="w-full p-2 mx-auto rounded-lg  grayBG whiteCOLOR md:w-6/12 lg:w-3/12">
                   <i class="fas fa-user"></i> <input wire:model.lazy="form.email" type="text" name="" class="w-10/12 text-left bg-transparent whiteCOLOR focus:outline-none" placeholder="username" id="">
                </div>
                @error('form.email')
                    <p class="mt-0 text-sm text-red-500">{{$message}}</p>
                @enderror
                <p class="mt-0 text-red"></p>
                <div class="w-full p-2 mx-auto mt-4 rounded-lg grayBG whiteCOLOR md:w-6/12 lg:w-3/12 ">
                   <i class="fas fa-lock"></i> <input wire:model.lazy="form.password" type="password" name="" class="w-10/12 text-left bg-transparent whiteCOLOR focus:outline-none" placeholder="password" id="">
                </div>
                @error('form.password')
                <p class="mt-0 text-sm text-red-500">{{$message}}</p>
                  @enderror
                <div class="mt-8">
                    <button class="w-32 w-full pt-2 pb-1 border border-gray-900 rounded-lg md:w-6/12 lg:w-3/12 hover:bg-gray-800 hover:text-white">login</button>
                </div>
            </form>
        </div>
    </div>
</div>
