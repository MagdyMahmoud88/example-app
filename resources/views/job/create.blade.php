<x-layout>
    <x-slot name="headings">
        Create
    </x-slot>


    <form method="post" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Job </h2>
                <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">title</x-form-label>
                        <div class="mt-2">
                          <x-form-input type="text" name="title" id="title" placeholder="graphic designer" />
                            <x-form-error name="title"/>
                        </div>
                    </x-form-field>

                </div>
            </div>

            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="salary">salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="salary" id="salary" placeholder="$5000" />
                            <x-form-error name="salary"/>
                        </div>
                    </x-form-field>

                </div>
            </div>



            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <x-form-button> SAVE </x-form-button>
        </div>
    </form>


</x-layout>


