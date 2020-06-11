</header>
<!-- <nav class="navbar navbar-expand-lg text-center">
      <a class="navbar-brand" href="#"><img data-src="/images/company_logo.PNG" alt="logo image"> </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ">
            <li class="nav-item active">
              <a data-scroll="projects" class="nav-link" href="#"
                >Projects <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a data-scroll="services" class="nav-link" >Services</a>
            </li>
            <li class="nav-item">
              <a data-scroll="social" class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a data-scroll="blobs" class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a data-scroll="contact" class="nav-link" href="#">Contact</a>
            </li>
          </ul>
      </div>

      <div class="contact_us">
        @foreach ($contact as $cont )
        <i class="fas ml-3 fa-mobile-alt"></i>
        <span class="ml-2">{{$cont->phoneNo}}</span>
        <i class="far ml-3 fa-envelope"></i>
        <span class="ml-2">{{$cont->email}}</span>
      </div>
      <div class="social_media">
          <a href="{{$cont->instaLink}}" ><i class="fab fa-instagram ml-2"></i></a>
          <a href="{{$cont->facebookLink}}" ><i class="fab fa-facebook-f ml-2"></i></a>
          <a href="{{$cont->pinterestLink}}" ><i class="fab fa-pinterest ml-2"></i></a>
          <a href="{{$cont->wLink}}" ><i class="fa fa-vk ml-2"></i></a>


        @endforeach
      </div>
    </nav> -->


<div class="page" id="home">

    <div class="cube-container">

        <div class="cube nav-cube">

            <ul>
                <li> <a data-scroll="home" class="nav-link active">Home</a></li>
                <li> <a data-scroll="about_us" class="nav-link">About Us</a></li>
                <li> <a data-scroll="steps_working" class="nav-link">How to Work</a></li>
                <li> <a data-scroll="services" class="nav-link">Services</a></li>
                <li> <a data-scroll="statitics" class="nav-link">Statitics</a></li>
                <li> <a data-scroll="all_projects" class="nav-link">Projects</a></li>
                <li> <a data-scroll="quizes" class="nav-link">Start Quiz</a></li>
                <li> <a data-scroll="our_team" class="nav-link">the Team</a></li>
                <li> <a data-scroll="" class="nav-link">clients</a></li>
                <li> <a data-scroll="" class="nav-link">Services</a></li>
            </ul>

        </div>
    </div>


    <div class="main-content">
        <div class="menu text-center d-flex justify-content-around">
            <a class="navbar-brand" href="#"><img data-src="/images/company_logo.PNG" alt="logo image"> </a>

            <div class="color_container">
                <h2>Change Theme</h2>
                <ul class="list-unstyled">
                    <li data-value="orange"></li>
                    <li data-value="#4cd137"></li>
                    <li data-value="#a55eea"></li>
                    <li data-value="#2bcbba"></li>
                    <li data-value="#c19e70"></li>
                </ul>
            </div>

            <a href="#" class="nav-toggle closed" data-cube="close-switch">
                <span>+</span>
            </a>


        </div>
    </div>


</div>

<!-- start information -->

<!-- <div style="background-image: url(images/pictures_projects/3.jpeg);" class="information">
    <div class="overlayer"></div>
    <div class="border_box"></div>
    <div class="information_content text-center">
        <h2>Ctya hamada Maxen Natoah</h2>
        <p>Lorem ipsum dolor sit amet consectetur</p>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni
            consequuntur sapiente, provident ea saepe blanditiis! Amet quas labore
            maxime dignissimos quo! Aliquam tenetur minima ullam nobis sed
            assumenda, neque veniam
        </p>
        <button>связаться с нами</button>
        <div class="starting">
            <div></div>
        </div>
    </div>
    <div class="buttons_call">
        <div class="mb-1">
            <button class="call_me phone"><i class="fas fa-phone-alt fa-x"></i></button>
        </div>
        <div>
            <button class="call_me tri">
                <i class="fas fa-caret-up fa-2x"></i>
            </button>
        </div>

    </div>
</div> -->


<div class="slider-container">

    <div class="slider-control left inactive"></div>
    <div class="slider-control right"></div>
    <ul class="slider-pagi"></ul>
    <div class="slider">
        <div class="slide slide-0 active">
            <div class="slide__bg"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading">Project name 1</h2>
                    <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
                    <a class="slide__text-link">Project link</a>
                </div>
            </div>
        </div>
        <div class="slide slide-1 ">
            <div class="slide__bg"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading">Project name 2</h2>
                    <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
                    <a class="slide__text-link">Project link</a>
                </div>
            </div>
        </div>
        <div class="slide slide-2">
            <div class="slide__bg"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading">Project name 3</h2>
                    <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
                    <a class="slide__text-link">Project link</a>
                </div>
            </div>
        </div>
        <div class="slide slide-3">
            <div class="slide__bg"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading">Project name 4</h2>
                    <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
                    <a class="slide__text-link">Project link</a>
                </div>
            </div>
        </div>
    </div>
    <div class="buttons_call">
        <div class="mb-1">
            <button class="call_me phone"><i class="fas fa-phone-alt fa-x"></i></button>
        </div>
        <div>
            <button class="call_me tri">
                <i class="fas fa-caret-up fa-2x"></i>
            </button>
        </div>

    </div>
</div>

</header>
