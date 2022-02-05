<div>
    <a class="px-4 py-1 pt-2 text-white bg-gray-900 rounded" href="{{route("user.transaction.add")}}">Add New <i class="fas fa-plus"></i></a>
  
    <div class="pb-4 overflow-x-scroll rounded-lg shadow-2xl">
        <table class="w-full text-center">
            <thead class="py-2 text-white bg-gray-900 border border-gray-900 rounded-lg">
              <tr>
                <th class="px-2 py-2 ">#</th>
                <th class="px-2 py-2 ">barcode</th>
                <th class="px-2 py-2 ">name</th>
                <th class="px-2 py-2 ">quantity</th>
                <th class="px-2 py-2 ">category</th>
                <th class="px-2 py-2 ">unit</th>
                <th class="px-2 py-2 ">created at</th>
                <th class="px-2 py-2 ">action</th>
              </tr>
            </thead>
            <tbody class="px-2 py-2">
                @foreach ($items as  $index=>$row )       
                <tr>
                  <td class="p-2 border border-gray-900 ">{{$index+1}}</td>
                  <td class="p-2 border border-gray-900 ">{{$row->item->barcode}}</td>
                  <td class="p-2 border border-gray-900 ">{{$row->item->name}}</td>
                  <td class="p-2 border border-gray-900 ">{{$row->totalsum}}</td>
                  <td class="p-2 border border-gray-900 ">{{$row->item->category->title}}</td>
                  <td class="p-2 border border-gray-900 ">{{$row->item->unit->name}}</td>
                  <td class="p-2 border border-gray-900 ">{{$row->item->created_at->diffForHumans()}}</td>
                  <td class="p-2 border border-gray-900 ">
                    <a class="px-3 py-1 " href="{{ route("user.transaction.show",["id"=>$row->item_id]) }}">
                      <i class="fas fa-eye"></i>
                    </a>  
                  </td>
                </tr>
                @endforeach
    
            </tbody>
          </table>
          {{$items->links()}}
    </div>

    

</div>
