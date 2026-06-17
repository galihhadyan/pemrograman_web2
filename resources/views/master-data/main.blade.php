@extends('components.layouts.admin')

@section('title', 'Master Data')

@section('page_title', 'Master Data')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item active">Master Data</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            Halaman Master Data
        </div>
    </div>
@endsection
