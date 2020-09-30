
    <table class="table" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nombre</th>
            <th scope="col">edad</th>
            <th scope="col">fecha</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($productos as $producto)

          <tr>
            <th scope="row">{{$producto->id}}</th>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->edad}}</td>
            <td>{{$producto->fecha}}</td>
          </tr>
          @endforeach
        </tbody>

      </table>
      {{ $productos->links() }}

