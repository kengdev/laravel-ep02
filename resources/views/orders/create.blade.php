@extends('theme/layout')
@section('title', 'Order')
@section('css')
<style>
th.action, td.action{
    text-align: center;
    width:120px;
}
</style>
@endsection

@section('content')
    <div class="page-breadcrumb border-bottom">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Order</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/orders" class="red">รายการขายสินค้า</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="/orders/create" class="red">สร้างรายการขายสินค้า</a></li>
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
                        <h4 class="card-title mb-0">Make new order</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ url('/orders/store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label>Customer Name</label>
                                                    <input type="text" class="form-control" name="customer_name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label>E-mail</label>
                                                    <input type="text" class="form-control" name="customer_mail" />
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-12 right">
                                                <button type="button" id="add_row" class="btn btn-primary">+ Add
                                                    Row</button>
                                                <input class="btn btn-success" type="submit" value="บันทึกรายการ">
                                            </div>
                                        </div>

                                        <table class="table" id="products_table">
                                            <thead>
                                                <tr>
                                                    <th class="action"></th>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody id="product_body">
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <select name="products[]" class="form-control">
                                                            <option value="">-- choose product --</option>
                                                            @foreach ($products as $product)
                                                                <option value="{{ $product->id }}">
                                                                    {{ $product->name }}
                                                                    (฿{{ number_format($product->price, 2) }})
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="quantities[]" class="form-control"
                                                            value="1" />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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

@section('script')
    <script type="text/javascript">
        (function($) {
            $("#add_row").click(function(e) {
                e.preventDefault();

                var product_item = "<td>" + $('#product_body').find('td:first-child').next('td').html() + "</td>";
                var quantity_item = "<td>" + $('#product_body').find('td:first-child').next('td').next().html() + "</td>";

                var row = "<td class='action'><a href='#' onclick='removeRow(this)' class='btn btn-danger btn-circle btn-sm d-inline-flex align-items-center justify-content-center'><i class='fa fa-trash'></i></a></td>" + product_item + quantity_item;
                $('#product_body').append('<tr>' + row + '</tr>');

            });
        }(jQuery));

        function removeRow(item){
            $(item).closest('tr').remove();
        }
    </script>
@endsection
