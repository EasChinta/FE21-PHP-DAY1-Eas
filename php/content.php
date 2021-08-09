
<?php $cars = array(
  "Economy" => array(
    "Brand" => "Volvo",
    "Availability" => 3,
    "Manufacturer" => "Sweden",
    "Model" => "Type V8",
    "Price" => 45,
    "Location" => "Wien",
    "Picture" => "https://cdn.pixabay.com/photo/2014/08/29/15/07/auto-431122__340.jpg"
  ),
  "Middle" => array(
    "Brand" => "Toyota",
    "Availability" => 2,
    "Manufacturer" => "Japan",
    "Model" => "RAV 4 Hybrid",
    "Price" => 65,
    "Location" => "Linz",
    "Picture" => "https://cdn.pixabay.com/photo/2020/06/07/20/49/toyota-rav-4-5272095__480.jpg"
  ),
  "Premium" => array(
    "Brand" => "Mercedes",
    "Availability" => 4,
    "Manufacturer" => "Germany",
    "Model" => "A Class",
    "Price" => 75,
    "Location" => "Graz",
    "Picture" => "https://cdn.pixabay.com/photo/2018/05/20/23/36/mercedes-3417100__480.jpg"
  ),
  "SuperCars" => array(
    "Brand" => "Porsche",
    "Availability" => 2,
    "Manufacturer" => "Germany",
    "Model" => "911",
    "Price" => 125,
    "Location" => "Wien",
    "Picture" => "https://cdn.pixabay.com/photo/2018/01/11/17/32/porsche-911-gt2rs-3076518__340.jpg"
  ),
);

/*echo '<div class="row">
<div class="container card bg-transparent mb-3 col col-12 col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch" style="width: 18rem;">
  <img src="'.$cars["Economy"]["Picture"].'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$cars["Economy"]["Brand"].'</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>';
echo '<div class="row">
<div class="container card bg-transparent mb-3 col col-12 col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch" style="width: 18rem;">
  <img src="'.$cars["Middle"]["Picture"].'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$cars["Middle"]["Brand"].'</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>';
echo '<div class="row">
<div class="container card bg-transparent mb-3 col col-12 col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch" style="width: 18rem;">
  <img src="'.$cars["Premium"]["Picture"].'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$cars["Premium"]["Brand"].'</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>'*/


echo '<div class="entire container">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col animate__animated animate__backInLeft">
          <div class="card h-100 bg-transparent">
            <img src="' . $cars["Economy"]["Picture"] . '" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">' . $cars["Economy"]["Brand"] . '<br> <small>' . $cars["Economy"]["Model"] . '</small></h5>
              <p class="card-text">Manufacturer:<br>' . $cars["Economy"]["Manufacturer"] . '<br> Availability: ' . $cars["Economy"]["Availability"] . '</p>
            </div>
            <div class="card-footer">
              <small class="text-dark">' . $cars["Economy"]["Price"] . '€ per day <br>Location:' . $cars["Economy"]["Location"] . '</small><br>
              <a href="contact.php"><button  type="button" class="btn btn-outline-success">Book now</button></a>
            </div>
          </div>
        </div>
        <div class="col animate__animated animate__backInUp">
          <div class="card h-100 bg-transparent">
            <img src="' . $cars["Middle"]["Picture"] . '" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">' . $cars["Middle"]["Brand"] . '<br> <small>' . $cars["Middle"]["Model"] . '</small></h5>
              <p class="card-text">Manufacturer:<br>' . $cars["Middle"]["Manufacturer"] . '<br> Availability: ' . $cars["Middle"]["Availability"] . '</p>
            </div>
            <div class="card-footer">
              <small class="text-dark">' . $cars["Middle"]["Price"] . '€ per day<br>Location:' . $cars["Middle"]["Location"] . '</small><br>
              <a href="contact.php"><button  type="button" class="btn btn-outline-success">Book now</button></a>
            </div>
          </div>
        </div>
        <div class="col animate__animated animate__backInDown">
          <div class="card h-100 bg-transparent">
            <img src="' . $cars["Premium"]["Picture"] . '" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">' . $cars["Premium"]["Brand"] . '<br> <small>' . $cars["Premium"]["Model"] . '</small></h5>
              <p class="card-text">Manufacturer:<br>' . $cars["Premium"]["Manufacturer"] . '<br> Availability: ' . $cars["Premium"]["Availability"] . '</p>
            </div>
            <div class="card-footer">
              <small class="text-dark">' . $cars["Premium"]["Price"] . '€ per day<br>Location:' . $cars["Premium"]["Location"] . '</small><br>
              <a href="contact.php"><button  type="button" class="btn btn-outline-success">Book now</button></a>
            </div>
          </div>
        </div>
        <div class="col animate__animated animate__backInRight">
            <div class="card h-100 bg-transparent">
              <img src="' . $cars["SuperCars"]["Picture"] . '" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">' . $cars["SuperCars"]["Brand"] . '<br> <small>' . $cars["SuperCars"]["Model"] . '</small></h5>
                <p class="card-text">Manufacturer:<br>' . $cars["SuperCars"]["Manufacturer"] . '<br> Availability: ' . $cars["SuperCars"]["Availability"] . '</p>
              </div>
              <div class="card-footer">
                <small class="text-dark">' . $cars["SuperCars"]["Price"] . '€ per day<br>Location:' . $cars["SuperCars"]["Location"] . '</small><br>
                <a href="contact.php"><button  type="button" class="btn btn-outline-success">Book now</button></a>
              </div>
            </div>
          </div>
      </div>
    </div>';
?>





