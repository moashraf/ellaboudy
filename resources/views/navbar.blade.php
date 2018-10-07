<nav class="navbar">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="{{ URL::to('/') }}">
                        <img src="{{asset('website/imgs/logo.jpg')}}" alt="logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
						<a href="{{ URL::to('/') }}" data-value="home">{{ $labels[0]->text }} <span class="sr-only">(current)</span></a></li>
                        <li><a href="#projects" data-value="projects">{{ $labels[1]->text }}</a></li>
                        <li><a href="#offers" data-value="offers">{{ $labels[2]->text }}</a></li>
                        <li><a href="#inspiring" data-value="inspiring">{{ $labels[3]->text }}</a></li>
                        <li><a href='{{ route("contact") }}'>{{ $labels[4]->text }}</a></li>
                        <li><a href='{{ route("about") }}'> {{$labels[24]->text}} </a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">{{ $labels[5]->text }}</a></li>
                        <li><a href="#">{{ $labels[6]->text }}</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
		