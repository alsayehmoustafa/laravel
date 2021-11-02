@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        <h2>About</h2>
        
        <p>userId: {{ $userId ?? $payloadObj->userId }}</p>
        <p>firstname: {{ $firstname ?? $payloadObj->firstname }}</p>
        <p>lastname: {{ $lastname ?? $payloadObj->lastname }}</p>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('about')}}">About</a>
        <a href="{{route('contact')}}">Contact</a>
        
        <h2>Localization:</h2>
        <p>{{__('messages.defaultLanguage')}}</p>


        @if( ($userId ?? $payloadObj->userId) == 1 )
        <h2>User ID is 1</h2>
        @endif

        <ol>
        @foreach($payloadObj->fruits as $fruit)
        <li>{{ $fruit }}</li>
        @endforeach
        </ol>

        @forelse ($payloadObj->fruits as $fruit)
            <p></p>
        @empty
            <p>No Data</p>
        @endforelse
      </div>
    </div>
</div>
@stop
