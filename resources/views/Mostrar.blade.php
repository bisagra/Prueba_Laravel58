
    <table class="table" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">EDAD</th>
            <th scope="col">FECHA</th>
            <th scope="col">ELIMINAR</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($productos as $producto)

          <tr>
            <th scope="row">{{$producto->id}}</th>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->edad}}</td>
            <td>{{$producto->fecha}}</td>
            <th scope="col"><a href={{ url('prueba_laravel/eliminar', $producto->id)}}>Eliminar</a> </th>
          </tr>
          @endforeach
        </tbody>

      </table>
      {{ $productos->links() }}
