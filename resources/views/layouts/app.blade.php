<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agent Portal</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.autocomplete.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-combobox.css') }}" />



    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Agent Portal
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <!-- <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul> -->

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <!-- <li><a href="{{ url('/home') }}">Home</a></li> -->
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/home') }}"><i class="fa fa-btn fa-sign-out"></i>Dashboard</a></li>

                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @include('inc.addmember')
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('js/jquery.autocomplete.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap-combobox.js') }}"></script>

    <script>
        //Switch to display logged in users members
  $(document).ready(function(){
      $("#onlyOwnSubmissions").change(function(val){

          if(this.checked){
            window.location.replace("/member/index");
          }else {
            window.location.replace("/member");
          }
      });

    //display members in card
      $('[name="userCard"]').on('click', function(e) {
        var this_id = $(this).attr('user-id');
        console.log(this_id)
        });

    //display member details in a Modal
      $("#memberdetails").on("show.bs.modal", function(e) {
        var id = $(e.relatedTarget).data('target-id');
        $.get('/admin/society/' + id, function( data ) {
        alert(data);
          $(".modal-body").html(data);
        });
      });

    $.ajax({
        url: "data/getCountries",
        async: false,
        method: "GET",
        success: function (data) {
            // parse the results 
            console.log('-----------getCountries------------');
            console.log(data);
            $.each(data, function(i, el) 
            {
                $('#countryInput').append(new Option(el, i));
                
            });
            $('#countryInput').trigger("chosen:updated");
        }
    });

    $('#countryInput').combobox();
    $("#countryInput").change(function(e) {
        var country_code = this.value;
        if(country_code){
                $.ajax({
                    url: "data/getStates/" + country_code,
                    async: false,
                    method: "GET",
                    success: function (data) {
                        // parse the results 
                        console.log('-----------getStates------------');
                        console.log(data);
                        if(data){
                            $('#stateInput').empty()
                            $('#stateInput').append('<option value="" selected="selected">Select a State</option>');
                            $.each(data, function(i, el) 
                            {
                                $('#stateInput').append(new Option(el, i));
                                console.log(el + '---' + i)
                            });
                            $('#stateInput').trigger("chosen:updated");
                        }
                        
                    }
                });
        }
    });

    

    
});

  </script>


</body>
</html>
