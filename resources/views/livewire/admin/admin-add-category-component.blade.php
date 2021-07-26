<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">Add New Category</div>
                        <div class="col-md-6">
                            <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">
                                All Categories
                            </a>
                        </div>
                        </div> 
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <form action="" class="form-horizantal" wire:submit.prevent='storeCategory'>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Category Name</label>
                                <input type="text" class="form-control input md" placeholder="Category Name" wire:model="name" wire:keyup="generateSlug">
                            </div>
                            <div class="form-group">
                                <label for="slug" class="col-md-4 control-label">Category Slug</label>
                                <input type="text" class="form-control input md" placeholder="Category Slug" wire:model="slug">
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label"></label>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
