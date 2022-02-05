<div>
    <a class="px-4 py-1 pt-2 text-white bg-gray-900 rounded" href="{{route("admin.user.add")}}">Add New <i class="fas fa-plus"></i></a>
  
    <div class="pb-4 overflow-x-scroll rounded-lg shadow-2xl">
        <table class="w-full text-center">
            <thead class="py-2 text-white bg-gray-900 border border-gray-900 rounded-lg">
              <tr>
                <th class="px-2 py-2 ">#</th>
                <th class="px-2 py-2 ">name</th>
                <th class="px-2 py-2 ">email</th>
                <th class="px-2 py-2 ">role</th>
                <th class="px-2 py-2 ">action</th>
              </tr>
            </thead>
            <tbody class="px-2 py-2">
                @foreach ($users as $index=> $row )       
                <tr>
                  <td class="p-2 border border-gray-900 ">{{$index+1}}</td>
                  <td class="p-2 border border-gray-900 ">{{$row->name}}</td>
                  <td class="p-2 border border-gray-900 ">{{$row->email}}</td>
                  <td class="p-2 border border-gray-900 ">
                      @if($row->role==1)
                      Admin
                      @else
                      subAdmin
                      @endif
                  </td>
                  <td class="flex justify-between p-2 border border-gray-900">
                      <a href="{{route("admin.user.updateuser",[$row->id])}}"><i class="fas fa-edit"></i></a>
                      @livewire("admin.user.deleteuser",["id"=>$row->id,"model"=>"users"],key($row->id))
                  </td>
                </tr>
                @endforeach
    
            </tbody>
          </table>
          {{$users->links()}}
    </div>

    

</div>
