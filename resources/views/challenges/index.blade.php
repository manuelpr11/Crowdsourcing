@extends("layouts.app")
@section("content")



 
    @if($id == count($challenges))
        <h1> There are no more questions, come back soon!</h1>
        @else

    @foreach($userResponses as $response)
        @if($response->QuestionID == $challenges[$id]->id && $response->UserID == Auth::user()->id)
            <script>window.location = "/{{Request::segment(1)}}/{{$id+1}}"</script>

        @endif
    @endforeach
        <div style="text-align: center;">
            <h1> {{$challenges[$id]->QuestionText}} </h1>
            <img src = "{{asset("img/questions/" . $challenges[$id]->ImgLocation)}}">

            <form action="/{{Request::segment(1)}}" method="POST">
                {{ csrf_field() }}
                
                   <div>    
                       <label style="margin:15px;">
                            <input type="radio" name="option" value="Yes"> 
                            <img style="width: 90px;" src = "{{asset("img/yes.png")}}"> 
                        </label>                  
                    
                        <label style="margin:15px;">
                            <input type="radio" name="option" value="No">
                            <img style="width: 90px;" id="input-img2" src = "{{asset("img/no.png")}}">   
                        </label>
                    </div>

                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id" />
                    <input type="hidden" value="{{$id}}" name="challenge_id" />
                <div>
                    <button type="submit"  class="btn btn-template-main" style="width: 150px;padding: 10px; background-color: #6cb2eb;" >Submit</button>
                       
                </div>
            </form>

            @if($id >= 2)
            <a href="/{{Request::segment(1)}}/{{$id-1}}"><button type="button"  style="width: 150px;padding: 10px;" class="btn btn-xs btn-info" >Back</button></a>
            @endif
            @if($id < (count($challenges) - 1))
            <a href="/{{Request::segment(1)}}/{{$id+1}}"><button type="button" style="width: 150px;padding: 10px;" class="btn btn-xs btn-info" >Next</button></a>
            @endif


            
        <!--<h1> Accounts</h1>-->

        @endif
        </div>

    
        <br>


@endsection
{{-- <!DOCTYPE html>
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
  
</body> --}}
