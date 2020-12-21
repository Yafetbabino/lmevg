{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate</title>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Saira+Condensed:700');
        hr {
        background-color: #be2d24;
        height: 3px;
        margin: 5px;
        }

        div#cert-footer {
        position: absolute;
        width: 90%;
        top: 525px;
        left: 30px;
        text-align: center;
        float: center;
        }

        #cert-stamp, #cert-ceo-sign {
        width: 60%;
        display: inline-block;
        }
        #cert-title{
            text-align: center;
        }

        div#cert-issued-by, div#cert-ceo-design {
        width: 40%;
        display: inline-block;
        float: center;
        }

        div#cert-ceo-design {
        margin-left: 10%;
        float: right;
        }

        h1 {
        font-family: 'Saira Condensed', sans-serif;
        margin: 5px 0px;
        }

        body {
        width: 950px;
        height: 690px;
        position: absolute;
        left: 30px;
        top: 30px;
        border: 3px solid red;
        }

        p {
        font-family: 'Arial', sans-serif;
        font-size: 18px;
        margin: 5px 0px;
        }

        html {
        display: inline-block;
        width: 1000px;
        height: 768px;
        border: 2px solid red;
        background: #eee url("https://i.pinimg.com/originals/b3/17/db/b317db24945589699a4ef18150dc5b73.jpg") no-repeat; background-size: 100%;
        }

        h1#cert-holder {
        font-size: 50px;
        color: #be2d24;
        }

        p.smaller {
        font-size: 17px !important;
        text-align: center;
        }

        div#cert-desc {
        width: 70%;
        }

        p#cert-from {
        color: #be2d24;
        font-family: 'Saira Condensed', sans-serif;
        }

        div#cert-verify {
        opacity: 1;
        position: absolute;
        top: 680px;
        left: 60%;
        font-size: 12px;
        color: grey;
        }


    </style>
</head>
<body class="my-3" >

    <h1 id="cert-title" style="font-family: 'Lucida Handwriting', 'Brush Script MT', sans-serif;">
        Certificate of Memebership
      </h1>
      <br><br>
      <p style="text-align: center; font-size: 20px;   font-family: Copperplate, Papyrus, serif;" >And this I do for the gospel's sake, that I might be partaker thereof with you.</p>
        <h5 style="text-align: center; font-size: 15px;" >1Cor 9:23</h5>
      <br>

      <p class="smaller" id="cert-declaration" style="text-align: center;">
        THIS IS TO PRESENTED TO
      </p>

      <h1 id="cert-holder" style="text-align: center;">
        {{Auth::user()->name."  "}} {{Auth::user()->email}}
      </h1>

      <p class="smaller" id='cert-completed-line' style="text-align: center;">
        commemorate his/her membership in
      </p >

      <h2 id="cert-course" style="text-align: center;">
        Life Mission Evangelism
      </h2>

      <div >
        <p class="smaller" id='cert-completed' style="text-align: center;">
          which works on Sowing the word of God for human Race, With the goal of 1/4th Successful Rescue.
        </p>
      </div>

      <br>
      <p id="cert-from" class="smaller" style="text-align: center;">
        &nbsp; from www.lmevg.com
      </p>

      <br>
      <p class="smaller" id='cert-issued' style="text-align: center;">
       <b>Issued on:</b> {{date('Y-m-d')}}G.C.
      </p>

      <div id="cert-footer">
        <div id="cert-issued-by">
          <img id="cert-stamp" src="{{asset('storage/doc/KHC.png')}}">
          <hr>
          <p>Issued by<br> <span style="font-family: 'Lucida Handwriting', 'Brush Script MT', sans-serif;" > LME </span> </p>
        </div>
      </div>
</body>
</html> --}}
{{-- ----------------------------------- --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>certifca</title>
    <style>
        .container {
        position: relative;
        text-align: center;
        color: black;
        }
        /* Centered text */
        .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* date text */
        }
        .date {
        position: absolute;
        bottom: 215px;
        left: 50%;
        transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>

    {{-- <div>this is trail</div> --}}

    <div class="container">
        <div>
            <img src="{{asset('storage/doc/down2.jpg')}}" alt="the fgr" >
        </div>
        <div class="centered" >
            <p style="font-size: 30px;">{{Auth::user()->firstName."  ".Auth::user()->fatherName."  ".Auth::user()->grandFatherName}} </p>
            <p>with user ID <b>{{Auth::user()->user_id}}</b></p>
            <br><br>
        </div>

        <div class="date">
            <p><b>{{date('M-d-Y')}}</b></p>
        </div>
    </div>
</body>
</html>
