@extends('admin.layouts.app')
@section('title')
@section('content')

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Caretaker data</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>location</th>
                                            <th>Qualification</th>
                                            <th>Type</th>
                                            <th>Certificate</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($caretakers as $caretaker)
                                        <tr>

                                            <td>{{ $caretaker->name }}</td>
                                            <td>{{ $caretaker->email }}</td>
                                            <td>{{ $caretaker->address }}</td>
                                            <td>{{ $caretaker->location }}</td>
                                            <td>{{ $caretaker->qualification }}</td>
                                            <td>{{ $caretaker->type }}</td>
                                            <td>{{ $caretaker->certificate }}</td>
                                            <td>
                                                <button class="btn btn-secondary">
                                                    <a href="{{ route('admin.caretaker.edit',$caretaker->id) }}">Edit</a>
                                                </button>
                                            </td>
                                            <td><button class="btn btn-danger">
                                                <a href="{{ route('admin.caretaker.delete',$caretaker->id)}}">Delete</a>
                                            </button></td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection