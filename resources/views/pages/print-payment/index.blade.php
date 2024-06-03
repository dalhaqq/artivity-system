@extends('layouts.landing')

@section('title', 'Print Payment')

@section('content')
<section class="bg-white min-h-screen">
    @livewire('print-payment', ['printPayment' => $printPayment])
</section>
@endsection