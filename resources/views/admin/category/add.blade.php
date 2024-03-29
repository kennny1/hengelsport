@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">

            <form action="{{ url('insert-category') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta description</label>
                        <textarea name="meta_descrip" rows="3" class="form-control"></textarea>

                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Keywords</label>
                        <input type="text" class="form-control" name="meta_keywords">
                    </div>

                    <div class="cold-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>

        </div>
    </div>
@endsection
