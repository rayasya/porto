@extends('components.porto.master')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title text-dark">EDIT PORTOFOLIO</h5>
        <form method="POST" action="/portfolio/{{ $data->id }}" class="mt-4" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Title</label>
                    <input name="title" class="form-control text-dark" placeholder="Enter Title..."
                        value="{{ $data->title }}" required>
                    {{-- @if ($errors->has('title'))
                            <div class="text-danger">
                                {{ $errors->first('title') }}
                </div>
                @endif --}}
            </div>
            <div class="form-group col-md-6">
                <label>Link</label>
                <input name="link" class="form-control text-dark" placeholder="Enter Link..." value="{{ $data->link }}"
                    required>
            </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Description</label>
            <input name="description" class="form-control text-dark" placeholder="Enter Description..."
                value="{{ $data->description }}" required>
        </div>
        <div class="form-group col-md-6">
            <label>Type</label>
            <select class="form-control" name="type">
                <option value="{{ $data->type }}">{{ $data->type }}</option>
                    @if ($data->type == "WEB")
                        <option value="NFT">NFT</option>
                        <option value="3D">3D</option>
                    @endif
                    @if ($data->type == "NFT")
                        <option value="WEB">WEB</option>
                        <option value="3D">3D</option>
                    @endif
                    @if ($data->type == "3D")
                        <option value="WEB">WEB</option>
                        <option value="NFT">NFT</option>
                    @endif
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Gambar</label>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="image" accept="image/*" onchange="loadFile(event)"
                            class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <label>Preview</label>
            <div>
                <img width="auto" height="200px" src="{{ asset('img') }}/{{ $data->thumbnail }}" id="output" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success float-right">
    </div>
    </form>
    <a href="/portfolio"><button class="btn btn-danger">Back</button></a>
</div>
</div>
@endsection
