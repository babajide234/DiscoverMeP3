
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.min.css" />
        <!-- <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js"></script> -->
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .shadow{
                /* background-color: #8a1c1d; */
                .shadow {
                box-shadow: none!important;
}
            }
            .swiper-slide img {
                display: block;
                width: 100%;
                height: 100vh;
                object-fit:cover;
            }
            .logo{
                width:80px;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    </head>
    <body class="antialiased">
    

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="{{asset('image/logo.png')}}" alt="" class="logo"></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/#About">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/#Titles">Titles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/#Gallery">Gallery</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="py-12 mt-36">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white shadow-lg hover:shadow-xl rounded-md overflow-hidden p-10">
                    <!-- <form action="" method="post" class="p-10" autocomplete="off" id="regform"> -->
                    <!-- @if(Session::has('id'))
                        <div class="alert alert-danger">
                        {{ Session::get('id')}}
                        </div>
                    @endif -->
                    {!! Form::open(['route'=> ['pagents.registerPagents'], 'method'=>'POST']) !!}
                        <div class="flex mb-4">
                            <div class="w-1/2">
                                <h2 class="text-lg">Personal Details</h2>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-full">
                                <div class="p-2">
                                    <h2 class="">
                                        Form Number: {{ $pagent->f_no}}
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/3">
                                <div class="p-2">
                                    {{Form::text('lname',$pagent->p_lname,['class'=>' appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder'=>"Surname"])}}
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="p-2">
                                    {{Form::text('oname',$pagent->p_other,['class'=>' appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder'=>"Other Names"])}}
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="p-2">
                                    {{Form::text('fname',$pagent->p_fname,['class'=>' appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder'=>"First Names"])}}
                                </div>
                            </div>
                        </div>

                        <div class="flex mb-4">
                            <div class="w-1/4">
                                <div class="p-2">
                                    <select name="gender" id="" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
                                        <option value="" disabled selected>Gender</option>
                                        <option value="male" >Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-1/4">
                                <div class="p-2">
                                    <input type="date" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="D.O.B"  name="dob">
                                </div>
                            </div>
                            <div class="w-1/4">
                                <div class="p-2">
                                    <input type="number" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Age"  name="age">
                                </div>
                            </div>
                            <div class="w-1/4">
                                <div class="p-2">
                                    <input type="tel" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Mobile Number"  name="phone">
                                </div>
                            </div>
                        </div>

                        <div class="flex mb-4">
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="State Of Origin"  name="state">
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="LGA"  name="lga">
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Talent"  name="talent">
                                </div>
                            </div>
                        </div>

                        <div class="flex mb-4">
                            <div class="w-full">
                                <div class="p-2">
                                    <textarea name="address" id="" placeholder="Residentail Address" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/4">
                                <h2>School Details</h2>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Name Of School"  name="schname">
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Class"   name="class">
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="School Contact" name="schcontact">
                                </div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-full">
                                <div class="p-2">
                                    <textarea  name="schaddress" placeholder="School Address" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/4">
                                <h2>Guardian Details</h2>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Name Of Guardian/Parent" name="gname">
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Guardian/Parent Occupation" name="occupation">
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Guardian/Parent Phone"    name="gphone">
                                </div>
                            </div>
                        </div>
                        <div class="flex mb-4 justify-end">
                            <div class="w-1/3 ">
                                <div class="p-5">
                                    <button class="btn btn-primary btn-lg bg-blue-700" type="submit">
                                        Submit All Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer__header">
            <h2 class="">Have a Question? Get In Touch!</h2>
        </div>
        <div class="footer__menu">
            <div class="footer__logo">
                <img src="{{asset('image/logo.png')}}" class="" alt="">
            </div>
            <ul class="">
                <li class=""><a href="" class="">About</a></li>
                <li class=""><a href="" class="">Gallery</a></li>
                <li class=""><a href="" class="">Services</a></li>
                <li class=""><a href="" class="">Contact</a></li>
            </ul>

            <div class="footer__contact">
                <h3 class="">09017600207</h3>
                <h3 class="">08161765433</h3>
            </div>
        </div>
        <div class="footer__copy">
            @Copyright 2022
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script type="text/javascript">

        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 100) {
            nav.classList.add('bg-dark', 'shadow');
            } else {
            nav.classList.remove('bg-dark', 'shadow');
            }
        });
       
    </script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    </body>
</html>
