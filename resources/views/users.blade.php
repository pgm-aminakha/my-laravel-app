
<x-app>
<h1>Bekijk de users</h1>
<ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} <a href="/users/{{$user-> id}}">Look up {{$user-> name}}</a></li>
        @endforeach
    </ul>
</x-app>
