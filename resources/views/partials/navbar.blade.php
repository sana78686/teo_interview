<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="main-responsive-menu">
            <div class="responsive-burger-menu d-lg-none d-block">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="https://templates.envytheme.com/zust/default/index.html"
                class="navbar-brand d-flex align-items-center">
                <img src="{{ url('') }}/assets/logo.png"
                    alt="image">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                

                <div class="search-box m-auto">
                    
                </div>

                <div class="others-options d-flex align-items-center">
                       @guest
                       <div class="option-item">
                            <a href="{{ route('login') }}" class="home-btn"><i class="fa fa-user"></i> </a>
                        </div>
                        @else
                           <a href="{{ route('home') }}"><i class="fa fa-home" style="color: white"></i></a>
                       @endguest 
                    
                </div>
            </div>
        </nav>
    </div>

</div>