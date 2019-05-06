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
        @if($response->QuestionID == $challenges[$id]->id && $response->UserID == Auth::user()->id)
            <script>window.location = "/{{Request::segment(1)}}/{{$id+1}}"</script>

        @endif
    @endforeach

        <h1> {{$challenges[$id]->QuestionText}} </h1>
        <img src = "{{asset("img/questions/" . $challenges[$id]->ImgLocation)}}" <br>

        <form action="/{{Request::segment(1)}}" method="POST">
            {{ csrf_field() }}
            
               <div>    
                   <label>
                        <input type="radio" name="option" value="Yes"> 
                        <img src = "{{asset("img/yes.png")}}" <br> 
                    </label>                  
                
                    <label>
                        <input type="radio" name="option" value="No">
                        <img src = "{{asset("img/no.png")}}"
                    </label>
                </div>

                <input type="hidden" value="{{Auth::user()->id}}" name="user_id" />
                <input type="hidden" value="{{$id}}" name="challenge_id" />
            <div>
                <button type="submit" class="btn btn-template-main" >Submit</button>
                   
            </div>
        </form>
    
        <!--<h1> Accounts</h1>-->
           
        <div>
        <br>

        @if($id >= 2)
        <a href="/{{Request::segment(1)}}/{{$id-1}}"><button type="button" class="btn btn-xs btn-info" >Back</button></a>
        @endif
        @if($id < (count($challenges) - 1))
        <a href="/{{Request::segment(1)}}/{{$id+1}}"><button type="button" class="btn btn-xs btn-info" >Next</button></a>
        @endif
    @endif
      
    </div>
</body>
