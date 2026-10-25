@extends('layouts.app')

@section('content')
<div style="padding: 20px; max-width: 1000px; margin: 0 auto;">
    <h2 style="text-align: center; margin-bottom: 25px;">Our Ice Creams</h2>

    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        @foreach($products as $product)
            @include('components.card', ['product' => $product])
        @endforeach
    </div>
</div>
@endsection