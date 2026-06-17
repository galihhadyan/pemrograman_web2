@extends('components.layouts.admin')

@section('title', 'Edit Master Data')

@section('page_title', 'Edit Master Data')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/masterdata') }}">Master Data</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            Form Edit Master Data
        </div>
    </div>
@endsection
