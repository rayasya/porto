@extends('components.porto.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-dark">INPUT PORTOFOLIO BARU</h5>
            <form method="POST" action="/portfolio" class="mt-4" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <input name="title" class="form-control text-dark" placeholder="Enter Title..." required >
                        {{-- @if ($errors->has('title'))
                            <div class="text-danger">
                                {{ $errors->first('title') }}
                            </div>
                        @endif --}}
                    </div>
                    <div class="form-group col-md-6">
                        <label>Link</label>
                        <input name="link" class="form-control text-dark" placeholder="Enter Link..." required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Description</label>
                        <input name="description" class="form-control text-dark" placeholder="Enter Description..." required pattern="[a-zA-Z0-9\s]+">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Type</label>
                        <select class="form-control" name="type" required>
                          <option value="">Pilih..</option>
                          <option value="WEB">Web</option>
                          <option value="NFT">NFT</option>
                          <option value="3D">3D</option>
                        </select>
                      </div>
                </div>
                
                {{-- <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Image</label>
                        <div class="custom-file">
                            <input name="image" type="file" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        </div>
                        <img id="output"/>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" name="image" accept="image/*" onchange="loadFile(event)" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>

                        {{-- @if($errors->has('gambar'))
                            <div class="text-danger">
                                {{ $errors->first('gambar')}}
                            </div>
                        @endif --}}
                        </div>
                    </div>
                    <div>
                        <label>Preview</label>
                        <div>
                            <img id="output"/>
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