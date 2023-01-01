@extends('layouts.admin.master')

@section('title', 'Dashboard')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Hello, {{ auth()->user()->name }}</h1>

    <!-- Content Row -->
    <div class="row">

        <!-- Menemukan Card Example -->
        <div class="col-6 mb-4">
            <a class="nav-link" href="{{ route('admin.menemukans.index') }}">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Menemukan
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ $menemukans }}
                                    <span class="text-md font-weight-bold text-primary text-uppercase mb-1">
                                        Barang
                                    </span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="far fa-check-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Kehilangan Card Example -->
        <div class="col-6 mb-4">
            <a class="nav-link" href="{{ route('admin.kehilangans.index') }}">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Kehilangan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ $kehilangans }}
                                    <span class="text-md font-weight-bold text-danger text-uppercase mb-1">
                                        Barang
                                    </span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="far fa-times-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection