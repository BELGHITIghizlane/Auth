@extends('layouts.app')
@section('title','create product')
@section('content')
<h1> @yield('title')</h1>
@include('products.form')
@endsection
