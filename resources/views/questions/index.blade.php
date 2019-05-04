<!DOCTYPE html>
<head>

    <title>Questions</title>
</head>
<body>
    
<div class="row">
    <fieldset>
        <legend></legend>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Type</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="index">
                    @foreach($questions as $question)
                        <tr>
                            <td>{{$question->QuestionText}}</td>
                            @if($question->QuestionType == '1')
                            <td>Text-Text</td>
                            @elseif($question->QuestionType == '2')
                            <td>Text-Image</td>
                            @else
                            <td>Image-Image </td>
                            @endif
                            <td><a href="/questions/edit/{{$question->id}}"><button type="button" class="btn btn-xs btn-info" >Editar</button></a></td>
                            <td><a href="/questions/delete/{{$question->id}}" id="deleteQuestion"><button type="button" class="btn btn-xs btn-danger" >Eliminar</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="alert alert-danger" role="alert" id="questionNotFound" style="display: none;">No hay coincidencias con esa búsqueda.</div>
    </fieldset>
</div>
    
</body>
</html>