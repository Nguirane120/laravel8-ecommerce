<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col md-6">Edit  Product</div>
                            <div class="col md-6">
                                <a href="{{route('admin.products')}}"
                                class="btn btn-success pull-right">All Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has("message"))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                            <div class="form-group">
                                <label for="name" class="control-label">Product Name</label>
                                <input type="text" class="form-control input-md" wire:model="name" >
                            </div>
                            <div class="form-group">
                                <label for="slug" class="control-label">Slug</label>
                                <input type="text" class="form-control input-md" wire:model="slug" wire:keyup="generateSlug">
                            </div>
                            <div class="form-group">
                                <label for="slug" class="control-label">Short description</label>
                                <textarea name="slug" cols="30" rows="10" class="form-control" wire:model="short_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label">Description</label>
                                <textarea name="description" cols="30" rows="10" class="form-control" wire:model="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="regular_price" class="control-label">Price</label>
                                <input type="text" class="form-control input-md" wire:model="regular_price">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Sale price</label>
                                <input type="text" class="form-control input-md" wire:model="sale_price">
                            </div>
                            <div class="form-group">
                                <label for="SkU" class="control-label">SKU</label>
                                <input type="text" class="form-control input-md" wire:model="SKU">
                            </div>
                            <div class="form-group">
                                <label for="stock" class="control-label">Stock</label>
                                <select class="form-control" wire:model="stock_status">
                                    <option value="instock">InStock</option>
                                    <option value="outofstock">Out Of stock</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="stock" class="control-label">Featured</label>
                                <select class="form-control" wire:model="featured">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="SkU" class="control-label">Quantity</label>
                                <input type="text" class="form-control input-md" wire:model="quantity">
                            </div>
                            <div class="form-group">
                                <label for="image" class="control-label">Image</label>
                                <input type="file" class="input-file" wire:model="newImage">
                                @if ($newImage)
                                <img src="{{$newImage->temporaryUrl()}}" width="120"/>
                                @else
                                    <img src="{{asset('assets/images/products')}}/{{$image}}" alt="" width="120">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="stock" class="control-label">Select category</label>
                                <select class="form-control" wire:model="category_id">
                                    <option value="">Select category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
