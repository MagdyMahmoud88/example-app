<x-layout>
    <x-slot name="headings">
        jobs listing
    </x-slot>

    @foreach($jobs as $job)

        <div class="space-y-4">

            <a href="/job/{{$job['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-teal-500"> {{$job->employer->name}} </div>
                <div class="text-blue-300 hover:underline"><strong> {{$job['title']}}</strong> .. net salary
                    is {{$job['salary']}}</div>
            </a>


            @endforeach
        <di>  {{$jobs->links()}}  </di>
        </div>



</x-layout>
