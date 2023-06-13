@extends('template')

@section('title', 'Profile')

@section('content')

<x-navbar/>

<body>
    <h4 style="margin-top: 50px; margin-left: 92px;">Profile</h4>
    <div class="container p-5 my-5 border" style="border-radius: 5pt; width: 85%; background-color: white;">
        <div class="container-fluid" style="background: linear-gradient(#979797, #979797) no-repeat 40%/0.5px; padding: 10px;">
            <div class="row">
                <div class="col-lg-6" style="width: 40%; margin-left: -25px; margin-top: 35px;">
                    <div class="soob-img">
                        <img src="{{asset('img/soob.png')}}" alt="">
                    </div>
                    <br>
                    <h4 style="text-align:center;">John Doe</h4>
                </div>
                <div class="col-lg-6" style="width: 42%; margin-left: 135px;">
                    <p class="profile-text1">First Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLast Name</p>
                    <p class="profile-text2">John&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDoe</p>
                    <br>
                    <p class="profile-text1">Username</p>
                    <p class="profile-text2">JohnDoe</p>
                    <br>
                    <p class="profile-text1">Email</p>
                    <p class="profile-text2">JohnDoe@gmail.com</p>
                    <br>
                    <p class="profile-text1">Password</p>
                    <p class="profile-text2">***********</p>
                    <br>
                    <button type="submit" class="edit-btn">Edit</button>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="accordion-item" style="padding-left: 150px; padding-right: 120px">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                <h5><b>About Us</b></h5>
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                  <p style="color: grey">Avatix is a platform where tickets of concerts or music festivals are sold. Here, we have a purpose of make things easier for customers to view different concerts or music festivals and purchase tickets. We're dedicated to providing the best kind of concert tickets.</p>
              </div>
            </div>
        </div>
    </div>

    <div class="about-us-line"></div>

    <div>
        <br><br>
    </div>
</body>

<x-footer/>

@endsection()
