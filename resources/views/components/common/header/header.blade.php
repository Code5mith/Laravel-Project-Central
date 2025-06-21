@props(["buttons" => []])


<div
    class="w-100 my-2 pb-1 d-flex flex-row align-items-center justify-content-between">
    <div>

        <h1> {{ $slot }} </h1>

    </div>

    <div>

        @foreach ($buttons as $button)

            <x-common.link.link class="mx-2" href="{{ $button['url'] }}">

                <x-common.button.button>
                    {{ $button["name"] }}

                </x-common.button.button>
            </x-common.link.link>

        @endforeach

    </div>

</div>
</div>