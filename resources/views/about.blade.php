<x-site-layout>




    <h1 class="text-2xl">
        About
    </h1>
    </br>
    <p>
        Hallo ik ben een paragraf van about
    </p>

    </br>

    <p>Mijn naam is {{$naam}}</p>

    </br>

    <h1>Hobbies</h1>

    </br>

    <p>{{$naam}} heeft {{count($hobbies)}} hobbies</p>

    </br>


    <ul>
        @foreach($hobbies as $hoby)
            <li>{{$hoby}}</li>

        @endforeach

    </ul>

    </br>

    <table class="table-auto">
        <thead class="border-b border-blue-500">
            <th>Name</th>
            <th>email</th>
            <th>Age</th>
        </thead>
       <tbody>
       @foreach($family as $member)
           <tr>
               <td class="p-3 border border-blue-500">{{ $member->name }}</td>
               <td class="p-3 border border-blue-500">{{ $member->email }}</td>
               <td class="p-3 border border-blue-500">{{ $member->age }}</td>
           </tr>
       @endforeach
       </tbody>
    </table>


</x-site-layout>
