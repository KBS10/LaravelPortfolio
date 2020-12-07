@extends('layouts.app')

@section('content')
    <create :current-user="{{ json_encode(['isLoggedIn'=>auth()->check() ? true : false, 'user'=>auth()->check() ? auth()->user() : null]) }}">
@endsection
