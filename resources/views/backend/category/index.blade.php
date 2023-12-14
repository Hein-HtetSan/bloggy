@extends('layouts.backend')

@section('content')
<div class="container">


    <div class="row">

        <div class="col px-2 px-md-3">

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <h3 class="fs-3">Category</h3>  

            <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm btn-icon-split my-3">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Create</span>
            </a>

            <table class="table table-hover rounded shadow-sm">
                <thead>
                    <tr class="">
                        <th class="text-start ps-0 ps-md-3">No</th>
                        <th class="text-center">Name</th>
                        <th class="text-end pe-0 pe-md-5">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($categories as $row)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $row->name }}</td>
                            <td class="d-flex align-items-end justify-content-end">
                                <a href="{{ route('category.edit', $row->id) }}" class="btn btn-primary btn-sm btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text d-none d-md-inline">Edit</span>
                                </a>
                                <div class="mx-2"></div>
                                <form action="{{ route('category.destroy', $row->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text d-none d-md-inline">Delete</span>
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
    