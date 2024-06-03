<?php
  header("Cache-Control: no cache");
  session_cache_limiter("private_no_expire");
?>
@extends('layouts.landing')

@section('title', 'Print Order')

@section('content')
<section class="bg-white min-h-screen">
    @livewire('print-order', ['printOrder' => $printOrder])
</section>
@endsection