@extends('master')
@section('content')
<form class="row g-3" action="{{ route('add.name') }}" method="POST">
    @csrf
    <div class="col-auto">
      Imie <br>
      <input type="text" name="imie"class="form-control-plaintext">
    </div>
    <div class="col-auto">
      Nazwisko <br>
      <input type="text" name="nazwisko"class="form-control-plaintext">
    </div>
    <div class="col-auto">
      Pesel<br>
      <input type="number" name="pesel" class="form-control-plaintext">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">dodaj dane</button>
    </div>
  </form>

 <br>
 
 <table class="table">
    <tr>
        <th scope='col'>Id</th>
        <th scope='col'>Imię</th>
        <th scope='col'>Nazwisko</th>
        <th scope='col'>Nr Pesel</th>
        <th></th>
        <th></th>
        
    </tr
 @php ($i=1)
     @foreach( $tab as $index)


<tr>
    <td scope='row'>{{ $i++ }}</td>
    <td scope='row'>{{ $index->imie }}</td>
    <td scope='row'>{{ $index->nazwisko }}</td>
    <td scope='row'>{{ $index->nr_pesel }}</td>
    <td scope='row'> <a href="{{ url('usun/'.$index->id) }}"> usun</a></td>
    <td scope='row'> <a href="{{ url('edit/'.$index->id) }}"> edit</a></td>
</tr>
    @endforeach

  </table>

<hr>
<br>

<hr>
@endsection