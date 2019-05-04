<!DOCTYPE html>
<head>

    <title>Options</title>
</head>
<body>
    
<div class="row">
    <fieldset>
        <legend></legend>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Location</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="index">
                    @foreach($options as $option)
                        <tr>
                            <td>{{$option->ImgLocation}}</td>
                            <td><a href="/options/edit/{{$option->id}}"><button type="button" class="btn btn-xs btn-info" >Editar</button></a></td>
                            <td><a href="/options/delete/{{$option->id}}" id="deleteOption"><button type="button" class="btn btn-xs btn-danger" >Eliminar</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="alert alert-danger" role="alert" id="specieNotFound" style="display: none;">No hay coincidencias con esa búsqueda.</div>
    </fieldset>
</div>
    
</body>
</html>