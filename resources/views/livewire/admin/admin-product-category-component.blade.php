<div>
    <style>
        nav svg{
            height: 10px;
        }

        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel heading">
                        <div class="row">
                            <div class="col-md-6">All Product</div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addProduct')}}" class="btn btn-success pull-right">Add New</a>
                            </div>
                        </div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td><img src="{{asset('assets/images/products')}}/{{$product->image}}" width="60" alt="{{$product->name}}"></td>
                                        <td>{{$product->stock_status}}</td>
                                        <td>{{$product->regular_price}}</td>
                                        <td>{{$product->category['name']}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.editProduct', ['product_slug'=>$product->slug])}}"><i class="fa fa-edit fa-2x text-warning"></i></a>
                                            <a href="" wire:click="delete({{$product->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
