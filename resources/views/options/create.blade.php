<!DOCTYPE html>
<head>
    
    <title></title>
</head>
<body>
        <form action="/options" method="POST">

            {{ csrf_field() }}
        
            <div class="form-group">
                <label for="Question">Question
                    <select class="form-control" name="QuestionID" required>
                        <option value="0">Selecciona</option>
                        @foreach($questions as $question)
                            <option value="{{$question->id}}">{{$question->QuestionText}}</option>
                        @endforeach
                    </select>
                </label>
            </div>
        
            <div class="form-group">
                <label for="Correct1">Correct</label>
                <input type="radio" name="Correct1" value="1" required> Right Answer<br>
                <input type="radio" name="Correct1" value="0" required> Wrong Answer<br>
            </div>
        
            <div class="form-group">
                <label for="ImgLocation"1>Img Location</label>
                <textarea class="form-control" id="ImgLocation" name="ImgLocation1" required></textarea>
            </div>

            
                <div class="form-group">
                    <label for="Correct">Correct</label>
                    <input type="radio" name="Correct2" value="1" required> Right Answer<br>
                    <input type="radio" name="Correct2" value="0" required> Wrong Answer<br>
                </div>
            
                <div class="form-group">
                    <label for="ImgLocation">Img Location</label>
                    <textarea class="form-control" id="ImgLocation" name="ImgLocation2" required></textarea>
                </div>

            <div>
                <button type="submit"> Create Option</button>
            </div>
        
        </form>
</body>
</html>
