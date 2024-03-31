@extends('layouts.dashboard')
{{-- @foreach ($books as $book)
    {{ dd($book->nama_buku) }}
@endforeach --}}

@section('main')
<!-- Recent Sales -->
<div class="col-12">
    <div class="card recent-sales overflow-auto">

        <div class="card-body">
            <h5 class="card-title">Translation Class <span>| Recent</span></h5>

            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Class</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <th scope="row"><a href="#">1</a></th>
                            <td>{{ $kelas->nama_kelas }}</td>
                            <td><a href="#" class="text-primary">{{ $book->nama_buku }}</a>
                            </td>
                            <td>{{ $book->harga }}</td>
                            <td><a class="shadow rounded btn btn-download">Download</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div><!-- End Recent Sales -->
@endsection