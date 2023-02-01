@extends('index')


@section('content')
    <div class="card">
        <div class="row">
            <div class="card-head">
                <h1>Division List</h1>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('division.store') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                      <label for="division_name" class="form-label">Division Name</label>
                      <input type="text" class="form-control" name="division_name" id="division_name">
                    </div>

                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

                <table class="table mt-3">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($divisions as $key=> $item)
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" href="" class="btn btn-warning">Edit</button>
                                        <form action="{{ route('division.destroy', $item->id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Destroy</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
