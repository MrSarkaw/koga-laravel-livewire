<div>
    <a class="px-4 py-1 pt-2 text-white bg-gray-900 rounded" href="{{route("admin.category.add")}}">Add New <i class="fas fa-plus"></i></a>
  
    <div class="pb-4 overflow-x-scroll rounded-lg shadow-2xl">
        <table class="w-full text-center">
            <thead class="py-2 text-white bg-gray-900 border border-gray-900 rounded-lg">
              <tr>
                <th class="px-2 py-2 ">#</th>
                <th class="px-2 py-2 ">code</th>
                <th class="px-2 py-2 ">category title</th>
                <th class="px-2 py-2 ">created at</th>
                <th class="px-2 py-2 ">action</th>
              </tr>
            </thead>
            <tbody class="px-2 py-2">
                @foreach ($items as $index=> $row )       
                <tr>
                  <td class="p-2 border border-gray-900 ">{{$index+1}}</td>
                  <td class="p-2 border border-gray-900 ">{{$row->code}}</td>
                  <td class="p-2 border border-gray-900 ">{{$row->title}}</td>
                  <td class="p-2 border border-gray-900 ">{{$row->created_at->diffForHumans()}}</td>
                  <td class="flex justify-between p-2 border border-gray-900">
                      <a href="{{route("admin.category.update",[$row->id])}}"><i class="fas fa-edit"></i></a>
                      @livewire("admin.user.deleteuser",["id"=>$row->id,"model"=>"category"],key($row->id))
                  </td>
                </tr> 
                 @endforeach
    
            </tbody>
          </table>
          {{$items->links()}}
    </div>

    
</div>
