<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>AllAboutPet Artikel</title>
</head>

<body>
  <div class="bg">
    <a href="{{ url('/') }}"><img id="imglogo" src="{{url('')}}/assets/img/logo.png" style="width: 8%" /></a>
    <div id="cropped-image">
      <img src="{{url('')}}/assets/img/artikel_kucing.jpg" style="
            object-position: center;
            width: 100%;
            max-height: 220px;
            margin-bottom: 1rem;
          " />
    </div>
    <h3 style="
          text-align: center;
          padding-top: 1px;
          font-family: sans-serif;
          font-size: 30px;
          font-weight: bold;
        ">
      {{$tipsmerawathewan->title}}
      <p></p>
      <img src="{{url('')}}/{{$tipsmerawathewan->image}}" style="
            object-position: center;
            width: 30%;
            max-height: 300px;
            margin-bottom: 1rem;
          " />
      <h5 style="
          text-align: center;
          font-family: sans-serif;
          font-size: 15px;
          font-weight: bold;
        ">Author: {{$tipsmerawathewan->author}}</p>
        <h5 style="padding: 50px">{{$tipsmerawathewan->content}}
        </h5>
        </h>
  </div>
</body>

</html>