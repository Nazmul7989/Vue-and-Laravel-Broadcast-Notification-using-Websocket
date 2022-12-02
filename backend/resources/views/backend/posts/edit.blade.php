@extends('backend.layouts.master')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card px-4 py-4">
                        <div class="col-12">
                            <div class="clearfix">
                                <h3 class="float-left">Edit Post</h3>
                                <a href="{{ route('posts.index') }}" class="float-right btn btn-primary "> Post List</a>
                            </div>
                            <hr>
                        </div>
                        <form action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name"> Title </label>
                                            <input type="text" class="form-control" name="name" value="{{ $post->name }}" id="name" placeholder="Enter Post Title">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description"> Description </label>
                                            <textarea rows="5"  name="description" class="form-control" id="description">{{ $post->description }}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('description'))?($errors->first('description')):''}}</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="reset" value="Reset" class="btn btn-danger btn-sm">
                                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
