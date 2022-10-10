
@extends("layouts.layout")
@section("container")
        <form 
            @if(Route::current()->getName() == "edit") 
                action="">
            @endif    
            <div class="form-group" >
                <label class="form-label" for="name">Name</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label class="form-label" for="name">Code</label>
                <input class="form-control" type="text" name="code">
            </div>
            <button type="submit">Crear</button>
        </form>
@endsection