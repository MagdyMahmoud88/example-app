<x-layout>
    <x-slot name="headings">
        job
    </x-slot>

    <h2> {{$jobs["title"]}}</h2>
    <p>
        this job is salary {{$jobs['salary']}} . per year
    </p>


</x-layout>
