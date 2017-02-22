<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top: 60px;">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="{{'img/banner4.jpg'}}"  alt="Four slide" class="imgBanner">
    </div>      
    <div class="item">
      <img src="{{'img/banner1.jpg'}}" alt="First slide" class="imgBanner">
    </div>      
    <div class="item">
      <img src="{{'img/banner2.jpg'}}" alt="Second slide" class="imgBanner">
    </div>
    <div class="item">
      <img src="{{'img/banner3.jpg'}}" alt="Third slide" class="imgBanner">
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<style>
	.imgBanner{
		width:100%;
      	}
</style>
<script>
    $('.carousel').carousel({
        interval: 3000
    })
</script>