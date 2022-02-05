<div>
    <a class="px-4 py-1 pt-2 text-white bg-gray-900 rounded" href="{{route("user.transaction")}}">Back to items <i class="fas fa-arrow-left"></i></a>
    <span class="px-4 py-1 text-white bg-green-500 rounded-lg">in <i class="fas fa-arrow-right"></i></span>
    <span class="px-4 py-1 text-white bg-red-500 rounded-lg">out <i class="fas fa-arrow-left"></i></span>

    <div dir="rtl" class="mt-4">
       <select wire:model="type" class="px-3 py-1 text-center text-white bg-gray-900 rounded-tl-lg rounded-tr-lg focus:outline-none">
            <option value="">all</option>
            <option value="in">in</option>
            <option value="out">out</option>
       </select>
        
        <button wire:click='search' class="px-4 py-1 text-white bg-green-600 rounded-lg"><i class="fas fa-filter"></i></button>
    </div>

    <div class="pb-4 mt-2 overflow-x-scroll rounded-lg shadow-2xl">
        <table class="w-full text-center">
            <thead class="py-2 text-white bg-gray-900 border border-gray-900 rounded-lg">
              <tr>
                <th class="px-2 py-2 ">#</th>
                <th class="px-2 py-2 ">contact</th>
                <th class="px-2 py-2 ">type</th>
                <th class="px-2 py-2 ">dateTime</th>
                <th class="px-2 py-2 ">quantity</th>
                <th class="px-2 py-2 ">price</th>
                <th class="px-2 py-2 ">note</th>
              </tr>
            </thead>
            @if($searchData == null)
             <tbody class="px-2 py-2">
                    @foreach ($items as  $index=>$row )  
               
                <tr>
                  <td class="p-2 border border-gray-900 ">{{$index+1}}</td>
                  <td class="p-2 border border-gray-900 ">
                    @if($row->contact_id !=null)
                       {{$row->contact->name}}
                    @else 
                        ----
                    @endif

                    </td>
                  <td class="p-2 border border-gray-900 ">
                    @if($row->type =="in")
                        <i class="text-green-500 fas fa-arrow-right"></i>
                     @else 
                         <i class="text-red-500 fas fa-arrow-left"></i>
                     @endif
                    </td>
                  <td class="p-2 border border-gray-900 ">{{$row->created_at}}</td>
                  <td class="p-2 border border-gray-900 ">{{$row->quantity}}</td>
                  <td class="p-2 border border-gray-900 ">{{$row->price}}</td>
                  <td class="p-2 border border-gray-900 ">{{$row->note}}</td>
        
                </tr>
                @endforeach

            @else
                @foreach ($searchData as  $index=>$row )  

                <tr>
                     <td class="p-2 border border-gray-900 ">{{$index+1}}</td>
                    <td class="p-2 border border-gray-900 ">
                      @if($row->contact_id !=null)
                         {{$row->contact->name}}
                      @else 
                          ----
                      @endif
  
                      </td>
                    <td class="p-2 border border-gray-900 ">
                      @if($row->type =="in")
                          <i class="text-green-500 fas fa-arrow-right"></i>
                       @else 
                           <i class="text-red-500 fas fa-arrow-left"></i>
                       @endif
                      </td>
                    <td class="p-2 border border-gray-900 ">{{$row->created_at}}</td>
                    <td class="p-2 border border-gray-900 ">{{$row->quantity}}</td>
                    <td class="p-2 border border-gray-900 ">{{$row->price}}</td>
                    <td class="p-2 border border-gray-900 ">{{$row->note}}</td>
                   
                  </tr>
                  @endforeach
              @endif
                  
    
            </tbody>
          </table>
          @if($searchData==null)
          {{$items->links()}}
          @endif
    </div>

    

</div>
