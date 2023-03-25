@extends('theme/layout')
@section('title', 'Order List')
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
                        <li class="breadcrumb-item"><a href="/orders">รายการขายสินค้า</a></li>
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
                                <a href="/orders/create"class="btn btn-primary">ทำรายการ</a>
                            </div>
                        </div>
                    </div>
                    </br>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Name</th>
                                    <th>E-mail</th>
                                    <th>Product</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($orders as $order)
                                    <tr data-entry-id="{{ $order->id }}">
                                        <td>
                                            {{ $order->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $order->customer_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $order->customer_email ?? '' }}
                                        </td>
                                        <td>
                                            <ul>
                                                @foreach ($order->products as $item)
                                                    <li>{{ $item->name }} ({{ $item->pivot->quantity }} x ${{ $item->price }})</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="action">
                                            <a href="{{ url('/orders/' . $order->id) }}" class="btn btn-xs btn-primary">View</a>
                                            <a href="{{ url('/orders/' . $order->id . '/edit') }}" class="btn btn-xs btn-warning">Edit</a>
                                            <form method="POST" action="{{ url('/orders' . '/' . $order->id) }}" style="display:inline">
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

                        <div class="mt-4">{{ $orders->appends(['search' => request('search')])->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
