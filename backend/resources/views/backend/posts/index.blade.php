@extends('backend.layouts.master')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card px-4 py-4">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="clearfix">
                                <h3 class="float-left">Posts List</h3>
                                <a href="{{ route('posts.create') }}" class="float-right btn btn-primary "> Add Post </a>
                            </div>
                            <hr>
                        </div>

                        <table id="data" class="table table-bordered table-responsive-sm">
                            <thead>
                            <tr>
                                <th> Id </th>
                                <th> Name </th>
                                <th> Description </th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $post->name }}</td>
                                    <td>{{ $post->description }}</td>

                                    <td>
                                        <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-pen"></i></a>
                                        <form action="{{ route('posts.destroy',$post->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
