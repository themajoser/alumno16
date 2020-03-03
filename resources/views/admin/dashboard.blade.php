@extends('admin.layouts.layout')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')
    <p>Usuario autenticado: {{ auth()->user()->name }}</p>
    <p>Correo electrónico: {{ auth()->user()->email }}</p>
@endsection
