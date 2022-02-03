@extends('components.porto.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="/portfolio/create"><button class="btn btn-success mb-4">Input Portofolio Baru</button></a>
            <table class="table table-responsive-md table-bordered mt-3" id="myTable">
                <thead>
                    <tr class="text-dark">
                        <th style="width: 6%">No.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Link</th>
                        <th>Type</th>
                        <th>Thumbnail</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $d->title }}</td>
                        <td>{{ $d->description }}</td>
                        <td><a href="#">{{ $d->link }}</a></td>
                        <td>{{ $d->type }}</td>
                        <td class="col-3">
                            <img width="auto" height="100px" src="img/{{$d->thumbnail}}" alt="">
                        </td>
                        <td class="col-2">
                            <div class="col">
                                <div class="row">
                                    <a href="/portfolio/{{ $d->id }}/edit" class="btn btn-warning mr-2">Edit</a>
                                    <a class="btn btn-danger" type="button" data-toggle="modal" data-target="#hapus{{$d->id}}">Hapus</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Delete Modal -->
    @foreach ($data as $p)
        <div class="modal fade" id="hapus{{$p->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                Yakin ingin Menghapus {{ $p->title }} ?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <form method="POST" action="/portfolio/{{ $d->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
                
                </div>
            </div>
            </div>
        </div>
    @endforeach
@endsection