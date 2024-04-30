@extends('admin.layouts.app')
@section('title')
@section('content')

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Dietician data</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Location</th>
                                            <th>Qualification</th>
                                            <th>Certificate</th>
                                            <th>Password</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dieticians as $dietician)
                                        <tr>
                                            {{-- <td>{{ $dietician->login->category }}</td> --}}
                                            <td>{{ $dietician->name }}</td>
                                            <td>{{ $dietician->email }} </td>
                                            <td>{{ $dietician->address }}</td>
                                            <td>{{ $dietician->location  }}</td>
                                            <td>{{ $dietician->qualification }}</td>
                                            <td>{{ $dietician->certificate }}</td>
                                            <td>{{ $dietician->password }}</td>
                                            <td><button class="btn btn-secondary"><a href="{{ route('admin.dietician.edit',$dietician->id) }}">Edit</a></button></td>
                                            <td><button class="btn btn-danger"><a href="{{ route('admin.dietician.delete',$dietician->id) }}">Delete</a></button></td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection