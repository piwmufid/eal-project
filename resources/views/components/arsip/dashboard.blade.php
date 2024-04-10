@extends('layouts.dashboard')

@section('main')
<div class="bg-white rounded shadow p-3 mb-3 d-flex align-items-center">
    @can('admin')
        <div class="container d-flex align-items-center justify-content-center">
            <div class="container row gap-3">
                <div class="col rounded p-3 d-flex shadow bg-primary-subtle">
                    <div><i class="bi bi-people-fill"></i></div>
                    <div class="d-flex flex-column justify-content-center px-4">
                        <span class="h2 mb-0">80</span>
                        <small>User total</small>
                    </div>
                </div>
                <div class="col p-3 d-flex rounded shadow bg-warning-subtle">
                    <div><img src="storage/avatar/Ln42gl4TUr3TRuKznFSJNPGZNCxMQhh8H3F8S8BV.png" width="80"></div>
                    <div class="d-flex flex-column justify-content-center px-4">
                        <span class="h2 mb-0">45</span>
                        <small>Alumnus total</small>
                    </div>
                </div>
            </div>
        </div>
    @endcan
</div>
@endsection