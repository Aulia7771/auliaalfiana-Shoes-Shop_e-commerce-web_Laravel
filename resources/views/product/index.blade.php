@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="center mb-4">
        <form id="searchthis" style="display:inline;">
            <input id="search-box" name="search" type="search" placeholder="Search . . ." value="{{ request('search') }}"/>
            <button id="namanyay-search-btn" class="custom-button" type="submit" value="{{ request('search') }}">
                <img src="{{ asset('/img/icon.png') }}" alt="Search Icon">
                <span class="icon"></span>
            </button>            
        </form>
    </div>     
    <div class="row">        
        @foreach ($viewData['products'] as $product)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{ asset('/storage/'.$product->getImage()) }}" class="card-img-top">
                    <div class="card-body text-center">
                        <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                            class="btn bg-primary text-white">{{ $product->getName() }}</a>
                     </div>
                </div>
            </div>
        @endforeach
    </div>    
@endsection