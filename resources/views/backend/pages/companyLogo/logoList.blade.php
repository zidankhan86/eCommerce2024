@extends('backend.master')

@section('content')
    <div class="container">
        <div class="container">
            <div class="container">
                <br><a class="btn btn-success float-end ml-2" href="{{ route('logo.form') }}"><i class="fa fa-plus"
                        aria-hidden="true"></i> Add Logo</a>
                <br>
                <h4 class="text-success text-center">Logo List</h4><br>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">serial</th>
                            <th scope="col">Image</th>
                            <th scope="col">Tittle</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $serial = 1;
                        @endphp

                        @foreach ($logo as $item)
                            <tr>

                                <th scope="row">{{ $serial++ }}</th>
                                <td><img height="100px" width="100px" src="{{ url('/public/uploads/' . $item->image) }}"
                                        alt=""></td>
                                <td>{{ $item->tittle }}</td>

                                <td>
                                    
                                    <a href="{{ route('logo.delete', $item->id) }}" class="btn btn-danger"
                                        onclick="return confirm('Do you want to delete ?')"> <i
                                            class="fas fa-trash"></i></a>
                                </td>

                            </tr>

                    </tbody>
                        @endforeach
                </table>

            </div>
        </div>

    </div>
@endsection
