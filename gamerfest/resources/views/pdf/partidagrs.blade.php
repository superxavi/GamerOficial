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

<h1>Partidas grupales</h1>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Videojuego</th>
    <th>Equipo</th>
    <th>Tiempo Inicio</th>
    <th>Fecha</th>
    <th>Observacion</th>
  </tr>
  @foreach ($partidagrs as $partidagr)
  <tr>
    <td>{{$partidagr->id}}</td>
    <td>{{$partidagr->videojuego_id}}</td>
    <td>{{$partidagr->equipo_id}}</td>
    <td>{{$partidagr->tiempo_inicio}}</td>
    <td>{{$partidagr->fecha}}</td>
    <td>{{$partidagr->observacion}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>