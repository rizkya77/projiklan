@extends('layouts.app')

@section('content')
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title d-flex justify-content-center">Add Ads</h4>
                    <form class="forms-sample" action="/ad" enctype="multipart/form-data" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="name" placeholder="Title" name="title" value="{{ old('title') }}" autofocus>
                      </div>

                      @error('title')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                      <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                      </div>


                      @if($errors->has('image'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('image') }}</strong>
                          </span>
                      @endif

                      <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" placeholder="Link" name="link" value="{{ old('link') }}" autofocus>
                      </div>

                      @error('link')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                      <div class="form-group">
                        <label for="deposit">Deposit</label>
                        <input type="text" class="form-control @error('deposit') is-invalid @enderror" id="deposit" placeholder="Deposit" name="deposit" value="{{ old('deposit') }}" autofocus>
                      </div>

                      @error('deposit')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                      <div class="form-group">
                        <label for="perclick">Per Click</label>
                        <input type="text" class="form-control @error('perclick') is-invalid @enderror" id="perclick" placeholder="Per Click" name="perclick" value="{{ old('perclick') }}" autofocus>
                      </div>

                      @error('perclick')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                      <div class="form-group">
                        <label for="publishStart">Publish Start</label>
                        <input type="date" class="form-control @error('publishStart') is-invalid @enderror" id="publishStart"  name="publishStart" value="{{ old('publishStart') }}" autofocus>
                      </div>

                      @error('publishstart')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                      <div class="form-group">
                        <label for="publishEnd">Publish End</label>
                        <input type="date" class="form-control @error('publishEnd') is-invalid @enderror" id="publishEnd"  name="publishEnd" value="{{ old('publishEnd') }}" autofocus>
                      </div>

                      @error('publishend')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror


                      <div class="d-flex justify-content-end">      
                        <a class="btn btn-light" href="{{ url('/ad') }}">Batal</a>
                        <button type="submit" class="btn btn-primary mr-2">Tambahkan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
@endsection
