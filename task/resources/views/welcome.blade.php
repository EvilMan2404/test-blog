@extends('layouts.layout')
@section('content')
    <div class="row">
        @forelse($items as $item)
            @include('components.preview',['item' => $item])
        @empty
            <p>Статьи еще не добавлены</p>
        @endforelse
    </div>
@endsection