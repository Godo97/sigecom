@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-info">
                    <span class="info-box-icon">
                        <i class="far fa-bookmark">
                        </i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Bookmarks</span>
                        <a href="#" class="small-box-footer">
                            More info
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-info">
                    <span class="info-box-icon">
                        <i class="far fa-bookmark">
                        </i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Bookmarks</span>
                        <a href="#" class="small-box-footer">
                            More info
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-info">
                    <span class="info-box-icon">
                        <i class="far fa-bookmark">
                        </i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Bookmarks</span>
                        <a href="#" class="small-box-footer">
                            More info
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-info">
                    <span class="info-box-icon">
                        <i class="far fa-bookmark">
                        </i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Bookmarks</span>
                        <a href="#" class="small-box-footer">
                            More info
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-info">
                    <span class="info-box-icon">
                        <i class="far fa-bookmark">
                        </i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Bookmarks</span>
                        <a href="#" class="small-box-footer">
                            More info
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


