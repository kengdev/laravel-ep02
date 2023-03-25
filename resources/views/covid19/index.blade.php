@extends('theme/layout')
@section('title', 'Covid')
@section('content')

@section('css')
    <style>
        .text-right {
            text-align: right;
        }

        .action {
            text-align: center;
            width: 180px;
        }
    </style>
@endsection
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
                <div class="d-flex border-bottom title-part-padding align-items-center">
                    <div>
                        <h4 class="card-title mb-0">Covid19</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="ms-auto flex-shrink-0">
                                <a href="/covid19/create"class="btn btn-primary">เพิ่มข้อมูล</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <form action="{{ url('/covid19') }}" method="GET" class="my-4">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="search"
                                        value="{{ request('search') }}" />
                                    <button class="btn btn-success" type="submit">ค้นหาข้อมูล</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Country</th>
                                    <th>Total</th>
                                    <th>Active</th>
                                    <th>Death</th>
                                    <th>Recovered</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($covid19s as $item)
                                    <tr>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td class="text-right">{{ number_format($item->total) }}</td>
                                        <td class="text-right">{{ number_format($item->active) }}</td>
                                        <td class="text-right">{{ number_format($item->death) }}</td>
                                        <td class="text-right">{{ number_format($item->recovered) }}</td>
                                        <td class="action">
                                            <a href="{{ url('/covid19/' . $item->id) }}"class="btn btn-xs btn-primary">View</a>
                                            <a href="{{ url('/covid19/' . $item->id . '/edit') }}" class="btn btn-xs btn-warning">Edit</a>
                                            <form method="POST" action="{{ url('/covid19' . '/' . $item->id) }}"
                                                style="display:inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-xs btn-danger"
                                                    onclick="return confirm('Confirm delete?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="mt-4">{{ $covid19s->appends(['search' => request('search')])->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
