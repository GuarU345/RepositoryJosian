
@extends("layouts.layout")
@section("container")

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Code</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categorias as $cat) 
   <tr>
        <th>{{$cat->id}}</th>
        <th>{{$cat->name}}</th>
        <th>{{$cat->code}}</th>
        <th>
            <div>
              <a href="">
                <button type="button" class="btn btn-primary btn-sm" >Editar</button>
              </a>
                <button type="button" class="btn btn-secondary btn-sm">Eliminar</button>
            </div>
        </th>
   </tr>
   @endforeach

  </tbody>
</table>

@endsection
