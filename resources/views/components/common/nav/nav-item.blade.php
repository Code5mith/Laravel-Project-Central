@props (["nav_lable" => ""])

@foreach ($nav_lable as $lable)
  <x-common.link.link href="/{{ $lable['link'] }}"
    class="nav-link {{ request()->is($lable['link']) ? 'bg-dark rounded-3 bg-opacity-25' : null }}"
    aria-current="page">
    {{ $lable['lable'] }}
  </x-common.link.link>
@endforeach