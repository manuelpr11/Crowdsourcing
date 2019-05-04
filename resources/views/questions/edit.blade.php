<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>

            
        <form action="/questions/edit/{{$question->id}}" method="POST">
                {{ csrf_field() }}

                
                    <div class="form-group">
                        <label for="QuestionType">Tipo de Pregunta</label> <br>
                        <input type="radio" name="QuestionType" value="1" required> Text-Text<br>
                        <input type="radio" name="QuestionType" value="2" required> Text-Image<br>
                        <input type="radio" name="QuestionType" value="3" required> Image-Image<br>
                    </div>
                
                    <div class="form-group">
                        <label for="QuestionText"1>Texto de la Pregunta</label>
                        <textarea class="form-control" id="QuestionText" name="QuestionText" required></textarea>
                    </div>

                <div>
                    <button type="submit" class="btn btn-template-main" >Actualizar</button>
                       
                </div>
            </form>
</body>
</html>