<x-app>
    <x-slot:title>{{ $title }}</x-slot>
   
    <a class="btn btn-warning mb-3" href="{{ route('department.index') }}" role="button">
        Back To department</a>

        <ul class="list-group">
            @foreach ($department->lecturerss as $lecturer)
            <li class="list-group-item">{{ $lecturer->name }}</li>
            @endforeach

</ul>
    
</x-app>
