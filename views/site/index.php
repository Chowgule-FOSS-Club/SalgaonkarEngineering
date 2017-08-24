

 

  <div class="back-img jumbotron text-center">
    <h1>SALGAOCAR ENGINEERS PVT. LTD</h1>
    <a target="_blank" href="index.php?r=product/view-products" class="btn btn-outlined btn-theme btn-lg" data-wow-delay="0.7s">See Our Products</a>
  </div>

  <!-- Container (About Section) -->
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <h2 class="text-center">About Company Page</h2><br>
        <h4>
          <p class="about">The Salgaocar Group of Companies, a leading multi crore conglomerate is engaged mainly in mining and export of
            iron ore to the different countries of the World (Japan, Korea, China, W. Europe, etc.) with its headquarter
            at Margao, Goa.</p>
        </h4>
        <h4>
          <p class="about">Besides mining and export of iron ore, the Group activities also include shipping, loading and unloading of iron
            ore, barge building, real estate, pharmaceuticals, newspaper publishing, etc. The entire Group consists of more
            than fifteen companies and is regarded as the pioneer in the mining and export of iron ore from Goa. Our reserves
            are the largest in Goa (approximately 300 million tonnes) and annual export turnover is approximately 3 million
            tonnes.</p>
        </h4><br>

      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>

  <div id="services" class="container-fluid bg-grey">
    <div class="row">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-globe logo slideanim"></span>
      </div>
      <div class="col-sm-8">
        <h1>What we offer</h1><br>
        <h4> Salgaocar Engineers Pvt. Ltd. is an exclusive distributor in India for many world renowned manufacturers of Heavy
          Earthmoving, Mining and Construction Equipment.</h4><br>
        <p><strong><h4>Equipments we have distributed in the past:</h4>
        <ul>
          <li>Raise Climbers from Arkbro Industries(Canada)</li>
          <li>Rock Breaker Systems from BTI (Canada)</li>
          <li>Hydraulic Drilling & Piling Rigs from Beijing Sinovo International (China)</li>
        </ul>
      </strong>
          <ul>
        </p>
      </div>
    </div>
  </div>


  <!-- Container (Services Section) -->
  <div id="clients" class="container-fluid text-center">
    <h2>OUR CLIENTS</h2>

    <br>
    <div class="row slideanim">
      <div class="col-sm-3">

        <h4 class="elegantshd">National Hydroelectric Power Corporation Ltd.</h4>

      </div>
      <div class="col-sm-3">

        <h4 class="elegantshd">Coal India Ltd.</h4>
      </div>
      <div class="col-sm-3">

        <h4 class="elegantshd">Western Coalfields Ltd</h4>

      </div>
      <div class="col-sm-3">

        <h4 class="elegantshd">South Eastern Coalfields Ltd</h4>

      </div>
    </div>
    <br><br>
    <div class="row slideanim">
      <div class="col-sm-3">

        <h4 class="elegantshd">Eastern Coalfields Ltd</h4>

      </div>
      <div class="col-sm-3">

        <h4 class="elegantshd">Hindustan Copper Ltd.</h4>

      </div>
      <div class="col-sm-3">

        <h4 class="elegantshd">Larsen & Toubro Ltd.</h4>

      </div>
      <div class="col-sm-3">

        <h4 class="elegantshd">Eastern Coalfields Ltd</h4>

      </div>
    </div>
  </div>
  <!-- Container (Contact Section) -->
  <div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTACT</h2>
    <div class="row">
      <div class="col-sm-5 ">
        <p class="contact">Here's a way to reach us.</p>
        <p class="addr"><span class="glyphicon glyphicon-map-marker"></span>1110, New Delhi House, 27, Barakhamba Road, New Delhi - 110 001</p>
        <p><span class="glyphicon glyphicon-phone"></span> 91-11-23315929/23312693</p>
        <p><span class="glyphicon glyphicon-envelope"></span> sepldel@gmail.com</p>
      </div>
      <div class="col-sm-7 slideanim">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="10"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>


 <div id="googleMap" style="height:400px;width:100%;"></div> 
  <script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
  <!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp

-->