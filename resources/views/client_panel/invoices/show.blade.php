@extends('client_panel.layouts.app')
@section('title')
    {{ __('messages.invoice.invoice_details') }}
@endsection
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0">@yield('title')</h1>
            <div class="text-end mt-4 mt-md-0">
                <a href="{{ route('client.invoices.index') }}"
                    class="btn btn-outline-primary">{{ __('messages.common.back') }}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column">
            @include('flash::message')
            @include('client_panel.invoices.show_fields')
            @include('transactions.payment-notes-modal')
        </div>
    </div>
@endsection
