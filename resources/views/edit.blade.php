@extends('master')
@section('content')
<form class="row g-3" action="{{ url('update/'.$tabela->id) }}" method="POST">
    @csrf
    <div class="col-auto">
      Imie <br>
      <input type="text" name="imie"class="form-control-plaintext" value="{{$tabela->imie}}">
    </div>
    <div class="col-auto">
      Nazwisko <br>
      <input type="text" name="nazwisko"class="form-control-plaintext" value="{{$tabela->nazwisko}}">
    </div>
    <div class="col-auto">
      Pesel<br>
      <input type="number" name="pesel" class="form-control-plaintext" value="{{$tabela->nr_pesel}}">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">edytuj dane</button>
    </div>
  </form>

 <br>

<hr>
<br>

<hr>
@endsection