@extends('Master')
@section('cont')
welcome {{  $name }}
Your Age is {{ $age }}
@endsection

@section('title')
{{ $name  }} Profile
@endsection
