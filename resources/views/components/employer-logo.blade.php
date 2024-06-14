@props(['employer', 'width' => 90])

<img src="{{ asset('storage/'.$employer->logo) }}" alt="{{$employer->logo}}" class="rounded-xl" width="{{ $width }}">