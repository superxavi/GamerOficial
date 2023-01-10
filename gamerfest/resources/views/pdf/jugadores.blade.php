<!DOCTYPE html>
<html lang="es">
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Jugadores</h1>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Cedula</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>Equipo</th>
    <th>Observacion</th>
  </tr>
  @foreach ($jugadores as $jugadore)
  <tr>
    <td>{{$jugadore->id}}</td>
    <td>{{$jugadore->nombre}}</td>
    <td>{{$jugadore->cedula}}</td>
    <td>{{$jugadore->telefono}}</td>
    <td>{{$jugadore->correo}}</td>
    <td>{{$jugadore->equipo_id}}</td>
    <td>{{$jugadore->observacion}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>