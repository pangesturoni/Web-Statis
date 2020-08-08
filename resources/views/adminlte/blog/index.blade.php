@extends('adminlte.master')

@section('content')
      <div "mr-3,ml-3">
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Questions Table</h3>
            </div>
            <div class="card-body">
            @if(session('success'))
              <div class="alert alert-success">
              {{ session('success') }}
              </div>
            @endif
              <a class="btn btn-primary" href="/pertanyaan/create">Create New Question</a>
                <table class="table table-bordered mt-3">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Title</th>
                      <th>Question</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($posts as $key => $post)
                    <tr>
                    <td> {{ $key + 1}} </td>
                    <td> {{ $post ->judul }} </td>
                    <td> {{ $post ->isi }} </td>
                    <td style ="display :flex">
                      <a href="/pertanyaan/{{$post->id}}" class="btn btn-info btn-sm">show</a>
                      <a href="/pertanyaan/{{$post->id}}/edit" class="btn btn-success btn-sm">edit</a>
                      <form action="/pertanyaan/{{$post->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete" class="btn btn-danger">
                      </form>
                    </td>
                    </tr>
                    @empty
                    <tr>
                    <td colspan='4' align="center">No Questions</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
            </div>
        </div>
      </div>
@endsection
