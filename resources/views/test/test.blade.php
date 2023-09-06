@extends('layouts.MyApp')
@section('content')

    <div >


        <div class="row bg-dark" >
            <div class="col-sm-8 m-1">
                <div class="btn btn-light btn-outline-danger ">click</div>
            </div>
            <div class="col-sm-1 m-1">
                <div class="btn btn-outline-danger btn-light ">click</div>
            </div>
            <div class="col-sm-2 m-1"> <div class="btn btn-outline-danger btn-light">click</div>
            </div>
        </div>
        <div class=" row btn-light">
            <div class="col-sm-2 m-1"> <div class="btn btn-outline-primary btn-secondary">click</div>

            </div>
        </div>
        <div class="row bg-secondary">


            <div class="col text-left m-1">
                <div class="btn btn-light btn-outline-danger ">click</div>
            </div>
            <div class="col text-center m-1">
                <div class="btn btn-outline-danger btn-light ">click</div>
            </div>
            <div style="" class="col text-end m-1">
                <div class="btn btn-outline-danger btn-light">click</div>
            </div>



        </div>




        <br><hr>
        <div  class="row justify-content-center    bg-primary">
            <div class=" col-4">
                afef </div>
            <div class=" col-4">
                afef1 </div>
        </div>
        <br><hr>
        <div class="card-group">
            <div class="card">
                <div class="text-right cross"> </div>
                <div class="card-body text-center"> <img src="https://img.icons8.com/bubbles/200/000000/trophy.png">
                    <h4 style="color: #2d3748">CONGRATULATIONS!</h4>
                    <p style="color: #2d3748">You have been personally selected to take part in our 2017 annual visitors survey!</p> <button class="btn btn-out btn-danger btn-square continue">CONTINUE</button>
                </div>
            </div>



            <div  class="card text-dark ">

                <div class="card-body text-bg-dark">
                    <h2 class="text-center card-title">asdsad</h2>
                    <div class=" card-text"> affasfas</div>
                </div>
            </div>
        </div>
        <div class= "alert alert-warning"><span class="fa  fa-child">Oops ! something Wrong </span>  </div>

        <!--    slide in bootstrap .......................................   -->

        <div id="carouselExampleCaptions" class="carousel slide  w-75  container-fluid"   data-bs-ride="carousel">
            <ul class="carousel-indicators">
                <li  data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
                <li  data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></li>
                <li  data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('temp/1.jpg')}}" class="d-block w-100" style="height: 400px;" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('temp/2.jpg')}}" class="d-block w-100" style="height: 400px;" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('temp/0.jpg')}}" class="d-block w-100 img-fluid" style="height: 400px;" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--   /////// dropdown ////////////////////////////////////////////////////////         -->
        <div class="row">
            <div class="dropdown col  ">
                <button class="btn btn-outline-primary " type="button" id="afef1" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="afef1">
                    <li><a class="dropdown-item" href="#">Afef</a></li>
                    <li><a class="dropdown-item" href="#">A action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>


            </div>


            <div class="dropdown col text-end ">
                <button class="btn btn-secondary " type="button" id="afef" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="afef">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>


            </div>

            <!--/////////////////////////////////// beradcrumb /////////////////////////////////////////// -->
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </div>
        <!-- /////////////////Collapse///////////////////-->
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Button with data-bs-target
        </button>
        <a class=" badge bg-secondary "  data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Button with data-bs-target
        </a>

        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
            </div>
        </div>

        <!-- /// // / / // / / / / / / / / / / / / // / / / // / / / / / / / / / / / / / / / / --->

        <div class="form-group">
            <input name="Email" placeholder="Email" class="mt-5 form-control" type="email">
            <small class="form-text text-muted">afef hallajow</small>
        </div>
        <div class="form-check">
            <label for="check" class="form-check-label">afef hallajow</label>
            <input id="check" name="check"  class=" form-check-input" type="checkbox">
        </div>
        <div class="input-group">
            <input type="text" aria-label="Last name" class="form-control">
            <input class="form-control">
            <button type="" class=" btn btn-primary">
                afef

            </button>
        </div>

        <div class="mt-3 input-group">
            <input type="text" aria-label="Last name" class="form-control">
            <input class="form-control">
            <span type="" class=" input-group-text">

           <span class="fa fa-save"></span>
        </span>
        </div>

        <br>
        <br><br><br><br><br><br><br><br><br><br><br>
        <!-- js -->

    </div>

@endsection
