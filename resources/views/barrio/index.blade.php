<h1>Gestion debarrios</h1>

<font size=15 face="">Lista de Barrios</font>

<a href="barrios/create" class='btn btn-outline-info mb-3'>Crear</a>
  
      <table id='barrios' class='table table-striped table-bordered shadow mt-4' style='width:100%'>
          <thead class="bg-warning text-white"> 
              <tr>
                  <th scope="col">ID BARRIO</th>
                  <th scope="col">CODIGO CIUDAD</th>
                  <th scope="col">NOMBRE</th>
                  <th scope="col">STATUS</th>
                  <th scope="col">DATETIME</th>
                  <th scope="col">Acciones</th>
              </tr>   
          </thead>

          <tbody>
              @foreach ($barrios as $barrio)
                  <tr>
                      <td>{{$barrio->ID_BARRIO}}</td>
                      <td>{{$barrio->ID_CIUDAD}}</td>
                      <td>{{$barrio->NOMBRE_BARRIO}}</td>
                      <td>{{$barrio->STATUS}}</td>
                      <td>{{$barrio->DATETIME}}</td>
                      <td>
                          <form action="{{ route ('barrios.destroy',$barrio->ID_BARRIO)}}" method="POST">
                              <a href="/barrios/{{$barrio->ID_BARRIO}}/edit" class="btn btn-outline-info">Editar</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-outline-warning" >Borrar</button>
                          </form>
                              
                      </td>
                  </tr>

              @endforeach    
          </tbody>
      </table>