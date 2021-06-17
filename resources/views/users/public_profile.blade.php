@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Opportunity</title>
        <link rel="icon" href="icon.png" type="image/icon type">

        <style type="text/css">
          body{
            color: black;
          }
          h5 {
			    position: relative;
    			}

    			h5 span {
    			    background-color: #ffffff;
    			    padding-right: 10px;
    			}

    			h5:after {
    			    content:"";
    			    position: absolute;
    			    bottom: 0;
    			    left: 0;
    			    right: 0;
    			    height: 0.2em;
    			    border-top: 1px solid #d9d9d9;
    			    z-index: -1;
    			}
        </style>

    </head>
    <body>
      <div class="container-fluid" style="margin: 0; margin-top: 8%">
         <h4 class="text-center">Public Job Profile</h4>
          <button class="btn btn-sm btn-primary">Print/Download CV</button>
      </div>
        <div class="row p-2 mt-5 mx-auto" style="width:100%; border-radius: 10px;">
          <div class="col-lg-3">
          	<div class="">
          		<p class="text-center">
            		<img class="rounded-circle" alt="100x100" src="https://pngimage.net/wp-content/uploads/2018/05/dummy-profile-image-png.png" width="150px" height="150px"
  	          	data-holder-rendered="true">
	            </p>
          		<h3 class="text-center">{{ $user->name }}</h3>
          		<p class="text-center">Current Status</p>
          	</div>
          </div>
          <div class="col-lg-9" style=" list-style-position: outside;">
          	<h5><span>Experience</span></h5>
          	<h5 class="mt-4"><span>Education</span></h5>
          	<ul style=" list-style-position: outside;">
              @foreach($education as $user_education)
              <li style=" list-style-position: outside;">
          		  <label><b>{{$user_education->degree_name}} - {{$user_education->institute}} - {{$user_education->location}}</b></label><br>
                <label>{{$user_education->subject}} - Passing Year: {{date('F Y', strtotime($user_education->passing_year) + 6*3600) }} - Result: {{$user_education->result}}</label>
              </li>
              @endforeach
          	</ul>

            <a class='btn btn-sm btn-primary mt-5' href='/employeers/dashboard' style="">Back</a>
          </div>
        </div>
    </body>
</html>
@endsection
