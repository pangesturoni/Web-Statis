@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Create New Question</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', '') }}" placeholder="Enter Title" required>
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Question</label>
                    <textarea class="form-control" rows="3" id="isi" name="isi" placeholder="Enter Question" required>{{ old('isi', '') }}</textarea>
                    @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Create</button>
                </div>
              </form>
            </div>

</div>
@endsection