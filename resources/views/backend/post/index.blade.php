@extends('layouts.backend')

@section('content')
<div class="container">


    <div class="row">

        <div class="col px-5">

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <h3 class="fs-3">Post</h3>  

            <a href="{{ route('PostCreate') }}" class="btn btn-primary btn-sm btn-icon-split my-3">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Create</span>
            </a>

            <table class="table table-hover rounded shadow-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th width="3%">No</th>
                        <th width="40%">Name</th>
                        <th>Category Name</th>
                        <th>Created Date</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($posts as $row)
                        <tr class="text-center">
                            <td>{{ $i++ }}</td>
                            <td>{{ $row->title }}</td>
                            <td>{{ $row->Category->name }}</td>
                            <td>{{ date('d/m/Y', strtotime($row->created_at)) }}</td>
                            <td class="d-flex align-items-center justify-content-center">
                                <a href="{{ route('category.edit', $row->id) }}" class="btn btn-primary btn-sm btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                                <div class="mx-2"></div>
                                <form action="{{ route('category.destroy', $row->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>

@endsection
    