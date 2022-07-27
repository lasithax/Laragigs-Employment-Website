@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

@if(count($listings)==0)
    <p>No Listings</p>
@endif

@foreach($listings as $listing)
    <x-listing-card :listing="$listing" />
@endforeach;

<div class="mt-6 p-4">
    {{$listings->links()}}
</div>

@endsection