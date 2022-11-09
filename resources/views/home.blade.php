@extends('layouts.mainlayout')

@section('title', 'home')



@section('content')

<div class="container-fluid mt-5 text-center">
  <h1>Hallo {{$id}}</h1>
  @if (1 == 1)
  <h1>anime</h1>
  @endif
  <br>

  <div class="row justify-content-center">
    <div class="col-lg-7">
      <div class="card">
        <div class="card-body">


          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($names as $name)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$name}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection