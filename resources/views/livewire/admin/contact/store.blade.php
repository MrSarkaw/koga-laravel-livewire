<div>
    <div class="w-full p-2 pb-10 mx-auto rounded-lg shadow-lg">
    <a class="px-4 py-1 pt-2 text-white bg-gray-900 rounded" href="{{route("admin.contact")}}">Back to contacts <i class="fas fa-arrow-left"></i></a>
      
    @if(session()->has("new")) <p class="p-2 mt-4 text-center text-white bg-green-600 rounded-lg">new data added</p>  @endif

      <form wire:submit.prevent='submit' class="mt-5">
              
            <div id="allInputs">
            
              <div id="inputs" class="pb-4 mb-10 border-b border-red-500 ">
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                  
             
                  
    
                  <div class="flex flex-wrap border rounded-tl-lg rounded-bl-lg grayBG " >
                    <p
                      class="flex items-center justify-center w-3/12 scale-100 bg-red-500 rounded-tl-lg rounded-bl-lg whiteCOLOR">
                     name:
                    </p>
                     <input wire:model.lazy="form.name" class="w-8/12 p-2 rounded-tl-lg rounded-bl-lg focus:outline-none grayBG whiteCOLOR" type="text">
                      <!-- error -->
                    @error("form.name") <div class="w-full pb-1 mx-auto my-0 text-center rounded-lg redCOLOR md:w-6/12">{{$message}}</div> @enderror

    
                  </div>
    
                  <div class="flex flex-wrap border rounded-tl-lg rounded-bl-lg grayBG " >
                    <p
                      class="flex items-center justify-center w-3/12 scale-100 bg-red-500 rounded-tl-lg rounded-bl-lg whiteCOLOR">
                     phone number:
                    </p>
                     <input wire:model.lazy="form.phone" class="w-8/12 p-2 rounded-tl-lg rounded-bl-lg focus:outline-none grayBG whiteCOLOR" type="text">
                      <!-- error -->
                    @error("form.phone") <div class="w-full pb-1 mx-auto my-0 text-center rounded-lg redCOLOR md:w-6/12">{{$message}}</div> @enderror

    
                  </div>
    
                 
                
                  
                </div>
              </div>

            </div> 
          
            <div class="mt-6">
                <button class="px-6 py-2 rounded-lg grayBG whiteCOLOR">
                  <i class="fas fa-save redCOLOR"></i>
                  add
                </button>
            </div>
          </form>
    </div>
</div>
