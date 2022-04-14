<h1>Crear Barrio</h1>

<form action="/barrios" method="POST">
        @csrf
        <div class="row g-3 align-items-center mb-3">
            <div class="col-auto">
                <label for="" class="col-form-label">Nombre</label>
            </div>
            <div class="col-auto">
                <input id="nombre" name="nombre" type="text" class="form-control" >
            </div>
        </div>

        <div class="row g-3 align-items-center mb-3">
            <div class="col-auto">
                <label for="" class="col-form-label">Ciudad</label>
            </div>
            <div class="col-auto">
                <select id="ciudad" name="ciudad" class="form-control" > 
                    @foreach($ciudades as $ciudad)
                        <option value="{{$ciudad->ID_CIUDAD}}" selected>{{$ciudad->NOMBRE_CIUDAD}}</option>
                    @endforeach   
                </select>
            </div>
        </div>
       
        

        <a href="/barrios" class="btn btn-secondary" tabindex="2">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
    </form>