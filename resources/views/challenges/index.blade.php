<!DOCTYPE html>
<html lang="en">
<head>

  <title>Challenge!</title>
</head>
<style>

    /* HIDE RADIO */
    
    [type=radio] { 
      position: absolute;
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    /* IMAGE STYLES */
    
    [type=radio] + img {
      cursor: pointer;
    }
    
    /* CHECKED STYLES */
    
    [type=radio]:checked + img {
      outline: 2px solid #f00;
    }
    

</style>
<body>
    @if(Auth::user()->userType == "Admin")
        <script>window.location = "/";</script>
    @endif

    @if($id == count($challenges))
        <h1> There are no more questions, come back soon!</h1>
        @else

    @foreach($userResponses as $response)
        @if($response->QuestionID == $challenges[$id]->QuestionID && $response->UserID == Auth::user()->id)
            <script>window.location = "/{{Request::segment(1)}}/{{$id+2}}"</script>

        @endif
    @endforeach

        <h1> {{$challenges[$id]->QuestionText}} </h1>

        <form action="/{{Request::segment(1)}}" method="POST">
            {{ csrf_field() }}
            
               <div>    
                   <label>
                        <input type="radio" name="option" value="{{$challenges[$id]->ImgLocation}}"> 
                        <img src = "{{asset("img/questions/" . $challenges[$id]->ImgLocation)}}" <br> 
                    </label>                  
                
                    <label>
                        <input type="radio" name="option" value=" {{$challenges[$id+1]->ImgLocation}}">
                        <img src = "{{asset("img/questions/" . $challenges[$id+1]->ImgLocation)}}"
                    </label>
                </div>

                <input type="hidden" value="{{Auth::user()->id}}" name="user_id" />
                <input type="hidden" value="{{$id}}" name="challenge_id" />
            <div>
                <button type="submit" class="btn btn-template-main" >Actualizar</button>
                   
            </div>
        </form>
    
        <!--<h1> Accounts</h1>-->
           
        <div>
        <br>

        @if($id >= 2)
        <a href="/{{Request::segment(1)}}/{{$id-2}}"><button type="button" class="btn btn-xs btn-info" >Anterior</button></a>
        @endif
        @if($id < (count($challenges) - 1))
        <a href="/{{Request::segment(1)}}/{{$id+2}}"><button type="button" class="btn btn-xs btn-info" >Siguiente</button></a>
        @endif
    @endif
      
    </div>
</body>
</html>