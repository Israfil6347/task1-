
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;

}

.topnav a {
  float: left;
  display: block;
  color: #282923;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 22px;
}

.topnav a:hover {
  background-color: #ffff;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2"><img src="{{ URL::to('/img/logo.PNG') }}" alt="img not found"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4 ">
            <div class="topnav mt-3" id="myTopnav">
              <a href="#home">Home</a>
              <a href="#news">News</a>
              <a href="#contact">protfullio</a>
              <a href="#contact">protfullio</a>
              <a href="#contact">Contact</a>
              <a href="#about">About</a>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row" style="background-color: #3ABDFB; color: #F3FDFF;">
    <div class="col-md-1"></div>
    <div class="col-sm-5">
        <h3>shop with sidebar with left</h3>
        <a href="" class="mb-2">Home<i class="fas fa-directions"></i></a>
    </div>
    <div class="col-sm-3"></div>
    <div class="col-md-1">
        <i class="fa fa-mobile fa-2x mt-4">+565975658</i>
        <p>Monday-Friday 8-20</p>
    </div>
    <div class="col-md-2"></div>
</div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>