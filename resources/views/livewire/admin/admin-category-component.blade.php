<div>
    <div class="container" style="padding-top: 30px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">All Catgories</div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addCategory')}}" class="btn btn-success pull-right">Add New</a>
                            </div>
                        </div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>
                                            <a href="{{route('admin.editCategory', ['category_slug'=>$category->slug])}}"
                                                ><i class="fa fa-edit fa-2x"></i></a>
                                                <a href="" wire:click.prevent="deleteCategory({{$category->id}})" style="margin-left: 10px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                    {{ $categories->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
