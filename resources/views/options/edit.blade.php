<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>

            
        <form action="/options/edit/{{$option->id}}" method="POST">
                {{ csrf_field() }}
            
                <div class="form-group">
                        <label for="Question">Question
                            <select class="form-control" name="QuestionID" >
                                <option value="0">Selecciona</option>
                                @foreach($questions as $question)
                                    <option value="{{$question->id}} " required>{{$question->QuestionText}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                
                    <div class="form-group">
                        <label for="Correct1">Correct</label> <br>
                        <input type="radio" name="Correct" value="1" required> Right Answer<br>
                        <input type="radio" name="Correct" value="0" required> Wrong Answer<br>
                    </div>
                
                    <div class="form-group">
                        <label for="ImgLocation"1>Img Location</label>
                        <textarea class="form-control" id="ImgLocation" name="ImgLocation" required></textarea>
                    </div>

                <div>
                    <button type="submit" class="btn btn-template-main" >Actualizar</button>
                       
                </div>
            </form>
</body>
</html>