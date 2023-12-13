@extends('layouts.backend')

@section('content')
<div class="container-fluid">


    <div class="row">

        <div class="col p-2">

            @if (session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <h3 class="fs-3">Category</h3>  

            <a href="{{ URL::to('backend/category/create') }}" class="btn btn-primary btn-sm btn-icon-split my-3">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Create</span>
            </a>

            <table class="table table-hover rounded shadow-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($categories as $row)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $row->name }}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>

@endsection
    