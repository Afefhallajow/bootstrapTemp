 <nav dir="{{app()->getLocale()=="ar" ?"ltr":"rtl"}}" class="navbar  navbar-expand-lg  navbar-light w-78 fixed-top   ">
    <a class=" {{app()->getLocale()=="ar" ?"ms-3":"me-3"}} navbar-brand align-self-center" href="#">
        <img src="{{asset('temp/1.jpg')}}" width="50" height="50" class=" d-inline-block align-center  rounded-circle" alt="">
        Bootstrap</a>
    <!--        <a  data-bs-toggle="collapse" class="navbar-toggler text-end" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </a> -->
         <div  class="row d-inline-block justify-content-start align-self-center"  >
             <div class="col-2 mb-1"><a class="nav-link">home</a> </div>
         </div>

     <div class="{{app()->getLocale()=="ar" ?"ms-auto":"me-auto"}} row align-self-center  justify-content-center ">

            <div class="col-4 d-inline-block"><a class="nav-link"> <span class="fa fa-save"></span></a> </div>
            <div id="#menu-div-button" class=" col-4 d-inline-block  ">
                <a id="menu-button" class="nav-link " > <span  style="font-size: 30px" class="fa fa-save"></span>  </a>
            </div>
</div>
 </nav>
<!-- <nav class="navbar navbar-expand-lg bg-light navbar-light w-75 fixed-top   ">
     <a class="ms-3 navbar-brand" href="#">
         <img src="{{asset('temp/1.jpg')}}" width="50" height="50" class=" d-inline-block align-center  rounded-circle" alt="">
         Bootstrap</a>
             <a  data-bs-toggle="collapse" class="navbar-toggler text-end" data-bs-target="#navbarSupportedContent">
         <span class="navbar-toggler-icon"></span>
     </a>

     <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent1">
         <ul class="navbar-nav" >
             <li class="nav-item"><a class="nav-link">home</a> </li>
             <li class="nav-item toggle">
                 <a class="nav-link" >   <ion-icon name="menu-outline"></ion-icon></a>
             </li>
             <li class="nav-item"><a class="nav-link">home</a> </li>
             <li class="nav-item"><a class="nav-link">home</a> </li>
             <li class="nav-item"><a class="nav-link">home</a> </li>
             <li class="nav-item"><a class="nav-link">home</a> </li>
         </ul>
     </div>
 </nav>
-->
<!--
<div  class="bg-light fixed-top p-2 w-75">
    <div class="row">
        <div class="col-9">
            <a class="ms-3 navbar-brand" href="#">
                <img src="{{asset('temp/1.jpg')}}" width="50" height="50" class=" d-inline-block align-center  rounded-circle" alt="">
                Bootstrap </a>
            <span  class="text-dark fa fa-save"> </span>

        </div>

        <div class="col-3 align-self-center text-end">
            <span  class="text-dark fa fa-save"> </span>

        </div>
    </div>
</div>
-->
