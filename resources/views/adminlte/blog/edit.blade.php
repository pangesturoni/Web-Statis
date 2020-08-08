@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Question {{$edit->id}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan/{{$edit->id}}" method="POST">
              @csrf
              @method("PUT")
                <div class="card-body">
                  <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $edit->judul) }}" placeholder="Enter Title" required>
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Question</label>
                    <textarea class="form-control" rows="3" id="isi" name="isi" placeholder="Enter Question" required>{{ old('isi', $edit->isi) }}</textarea>
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