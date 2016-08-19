<div class="container">
  <br>
  <div id="imgCarousel" class="carousel slide" data-ride="carousel">
    <!--Indicator-->
    <ol class="carousel-indicators">
      <li data-target="#imgCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#imgCarousel" data-slide-to="1"></li>
      <li data-target="#imgCarousel" data-slide-to="2"></li>
      <li data-target="#imgCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper-->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="assets/img/home1.jpg" alt="Room 1" width="100%">
        <div class="carousel-caption">
          <h3>Room 1</h3>
          <p>Lorem Ipsum</p>
        </div>
      </div>

      <div class="item">
        <img src="assets/img/home2.jpg" alt="Room 2" width="100%">
        <div class="carousel-caption">
          <h3>Room 2</h3>
          <p>Ipsum Lorem</p>
        </div>
      </div>
    
      <div class="item">
        <img src="assets/img/home3.jpg" alt="Room 3" width="100%">
        <div class="carousel-caption">
          <h3>Room 3</h3>
          <p>Whatnot</p>
        </div>
      </div>

      <div class="item">
        <img src="assets/img/home4.jpg" alt="Room 4" width="100%">
        <div class="carousel-caption">
          <h3>Room 4</h3>
          <p>HEEEEY</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#imgCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#imgCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="bookingDiv">
    <center>
    <form>
      <table style="width:60%; color:yellow;">
        <tr>
          <td>Check-In</td>
          <td>Check-Out</td>
          <td>Adults</td>
          <td>Children</td>
          <td>Promo Code</td>
        </tr>
        <tr>
          <td><input type="date" name="checkInDate"></td>
          <td><input type="date" name="checkOutDate"></td>
          <td><input type="text" name="adultCount" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="numbers only"></td>
          <td><input type="text" name="childCount" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="numbers only"></td>
          <td><input type="text" name="promoCode"></td>
          <td><input type="submit" value="Book"></td>
        </tr>
      </table>
    </form>
    </center>
  </div>

  <div class="facilitiesDiv container">
    <div class="row">
      <div class="col-xs-12 col-md-3">
        <center>
        <div class=""></div>
        </center>
      </div>
      <div class="col-xs-12 col-md-3 col-md-offset-1">
        <center>
        <div class=""></div>
        </center>
      </div>
      <div class="col-xs-12 col-md-3 col-md-offset-1">
        <center>
        <div class=""></div>
        </center>
      </div>
    </div>
  </div>

</div>