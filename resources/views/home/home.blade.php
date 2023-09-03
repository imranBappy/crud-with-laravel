@extends('layouts.app')

@section('content')
    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

        <div class="card my-4 px-0 container">

            <div class="card-header">
                <h3>All Employees</h3>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Salary</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>1</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->designation }}</td>
                                <td>{{ $item->salary }}</td>
                                <td>
                                    @if ($item->status == 1)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif

                                </td>
                                <td>
                                    <a href="./edit.html" class="btn btn-primary btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </main>
@endsection
