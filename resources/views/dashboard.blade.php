@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h1 class="text-center" style="font-weight: 400; color:rgb(0, 0, 0); font-size: 30px;">Dashboard</h1>
        <div class="content " style="position: relative; margin-left: 300px;">
            <div class="row mt-5 text-center">
                {{-- <div class="col-md-3 mb-2">
                    <div class="card shadow">
                        <a href="/recent-post" id="dash-link">
                            <div class="card-body rounded " style="background-color:#113c32;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-history text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text">Recent Talk</span><br>
                                        <span class="text-white" id="text2">{{ $allPosts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> --}}
                   <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <a href="/recent-post" id="dash-link">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Recent Talks</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $allPosts }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <a href="/my-post" id="dash-link">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Your Posts</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $posts }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @role('admin')
                <div class="col-md-3 mb-2">
                    <div class="card shadow">
                        <a href="/log" id="dash-link">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Logs</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $logs }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endrole
            </div>
        </div>

    </div>
@endsection

<style>
    .card {
        width: 240px;
    }
    .card:hover {
        transform: scale(1.02);
        transition: transform 0.4s ease;
    }

    #dash-icon {
        font-size: 30px;
        opacity: 0.5;
    }
    #dash-link {
        text-decoration: none;
    }


    .time {
        opacity: 0.8;
    }
    .recent-only {
        border: 1px solid rgba(0, 0, 0, 0.23);
        border-radius: 10px;
        box-shadow: 3px 3px 1px 0px rgba(0, 0, 0, 0.2);
    }
</style>
