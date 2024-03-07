@extends('Frontend.layout.school-master')
@section("body-content")
<div class="grid-gallery">
    @foreach ($galleries as $gallery)
    @foreach ($gallery->images as $data)
        <div class="grid-item">
            <a href="{{ asset($data->image) }}" data-lightbox="gridImage">
                <img src="{{ asset($data->image) }}" alt="">
            </a>
        </div>
    @endforeach

    @endforeach
</div>
@endsection
