@extends('theme/layout')
@section('title', 'Edit Covid19 record')
@section('content')
<div class="page-breadcrumb border-bottom">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Covid19 Summary</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/covid19/">Covid19</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid page-content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">Edit Covid19 record #{{ $covid19->id }}</h4>
                </div>
                <div class="card-body">
                    <div class="col-lg-12">
                        <form method="POST" action="{{ url('/covid19/'.$covid19->id) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf

                            @include('covid19/form')

                            <div class="form-actions">
                                <div class="card-body border-top">
                                    <a href="/covid19/">กลับสู่หน้าหลัก</a> |
                                    <button type="submit" class="btn btn-success px-4">
                                        <div class="d-flex align-items-center">
                                            Save
                                        </div>
                                    </button>
                                    <button type="button" class="btn btn-danger px-4 ms-2 text-white">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
