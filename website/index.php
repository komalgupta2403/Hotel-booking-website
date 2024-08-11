<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KG Hotel-home</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

 <style>
     .custom-bg{
       background-color: #2ec1ac;
     }
     .custom-bg:hover{
       background-color: #279e8c;
     }
    .availability-form{
      margin-top:-50px;
      z-index:2;
     position:relative;
    }
    @media screen and(max-width:757px) {
      .availability-form{
        margin-top: 25px;
        padding: 0 35;
      }
    }
 </style>
</head>
<body class="bg-light">
<?php require('inc/header.php');?>
<!--carouseol -->
<div class="container-float px-lg-4 mt-4">
 <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <img src="images\carousel\IMG_15372.png" class="w-100 d-block" >
      </div>

      <div class="swiper-slide">
        <img src="images\carousel\IMG_40905.png"  class="w-100 d-block">
      </div>

      <div class="swiper-slide">
        <img src="images\carousel\IMG_55677.png" class="w-100 d-block">
      </div>

      <div class="swiper-slide">
        <img src="images\carousel\IMG_62045.png" class="w-100 d-block">
      </div>

      <div class="swiper-slide">
        <img src="images\carousel\IMG_93127.png" class="w-100 d-block">
      </div>

      <div class="swiper-slide">
        <img src="images\carousel\IMG_99736.png"  class="w-100 d-block">
      </div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

</div>


<!--check avaibility form-->
<div class="container availability-form">
  <div class="row">
     <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
           <div class="col-lg-3 mb-3">
             <label class="form-label" style="font-weight: 500;">Check-In</label>
             <input type="date" class="form-control shadow-none">
           </div>
           <div class="col-lg-3 mb-3">
             <label class="form-label" style="font-weight: 500;">Check-Out</label>
             <input type="date" class="form-control shadow-none">
           </div>
           <div class="col-lg-3 mb-3">
               <label class="form-label" style="font-weight: 500;">Adult</label>
               <select class="form-select shadow-none">
                  <option selected>Select</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
               </select>
           </div>
           <div class="col-lg-2 mb-3">
               <label class="form-label" style="font-weight: 500;">Children</label>
               <select class="form-select shadow-none">
                  <option selected>Select</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
               </select>
           </div>
           <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">submit</button>
           </div>
          </div>
          </div>
         </div>  
      </form>
     </div>
  </div> 
</div>
<!--our rooms-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
     <div class="card border-0 shadow" style="max-width:350px; margin: auto;">
       <img src="images\rooms\1.jpg" class="card-img-top">

       <div class="card-body">
         <h5>Simple Room Name</h5>
         <h6 class="mb-4">₹2000 per night</h6>
         <div class="features mb-4">
           <h6 class="mb-1">Features</h6>
           <span class="badge bg-light text-dark text-wrap">
             2 Rooms
            </span>
            <span class="badge bg-light text-dark text-wrap">
             1 Bathroom
            </span>
            <span class="badge bg-light text-dark text-wrap">
             1 Balcony
            </span>
            <span class="badge bg-light text-dark text-wrap">
             3 sofa
            </span>
         </div>
         <div class="facitilies mb-4">
           <h6 class="mb-1">Facilities</h6>
           <span class="badge bg-light text-dark text-wrap">
             wi-fi
            </span>
            <span class="badge bg-light text-dark text-wrap">
             Television
            </span>
            <span class="badge bg-light text-dark text-wrap">
             AC
            </span>
            <span class="badge bg-light text-dark text-wrap">
             Room heater
            </span>
         </div>
         <div class="Guests mb-4">
           <h6 class="mb-1">Guests</h6>
           <span class="badge bg-light text-dark text-wrap">
             2 Adults
            </span>
            <span class="badge bg-light text-dark text-wrap">
             2 Children
            </span>
         </div>
         <div class="Rating mb-4">
           <h6 class="mb-1">Rating</h6>
           <span>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
            </span>
         </div>
         <div class="d-flex justify-content-evenly mb-2">
          <a href="#"class="btn btn-sm text-white custom-bg shadow-none ">Book Now</a>
          <a href="#"class="btn btn-sm btn-outline-dark shadow-none ">More Details</a>
         </div>
       </div>
     </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
     <div class="card border-0 shadow" style="max-width:350px; margin: auto;">
       <img src="images\rooms\1.jpg" class="card-img-top">

       <div class="card-body">
         <h5>Simple Room Name</h5>
         <h6 class="mb-4">₹2000 per night</h6>
         <div class="features mb-4">
           <h6 class="mb-1">Features</h6>
           <span class="badge bg-light text-dark text-wrap">
             2 Rooms
            </span>
            <span class="badge bg-light text-dark text-wrap">
             1 Bathroom
            </span>
            <span class="badge bg-light text-dark text-wrap">
             1 Balcony
            </span>
            <span class="badge bg-light text-dark text-wrap">
             3 sofa
            </span>
         </div>
         <div class="facitilies mb-4">
           <h6 class="mb-1">Facilities</h6>
           <span class="badge bg-light text-dark text-wrap">
             wi-fi
            </span>
            <span class="badge bg-light text-dark text-wrap">
             Television
            </span>
            <span class="badge bg-light text-dark text-wrap">
             AC
            </span>
            <span class="badge bg-light text-dark text-wrap">
             Room heater
            </span>
         </div>
         <div class="Guests mb-4">
           <h6 class="mb-1">Guests</h6>
           <span class="badge bg-light text-dark text-wrap">
             3 Adults
            </span>
            <span class="badge bg-light text-dark text-wrap">
             2 Children
            </span>
         </div>
         <div class="Rating mb-4">
           <h6 class="mb-1">Rating</h6>
           <span>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
            </span>
         </div>
         <div class="d-flex justify-content-evenly mb-2">
          <a href="#"class="btn btn-sm text-white custom-bg shadow-none ">Book Now</a>
          <a href="#"class="btn btn-sm btn-outline-dark shadow-none ">More Details</a>
         </div>
       </div>
     </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
     <div class="card border-0 shadow" style="max-width:350px; margin: auto;">
       <img src="images\rooms\1.jpg" class="card-img-top">

       <div class="card-body">
         <h5>Simple Room Name</h5>
         <h6 class="mb-4">₹2000 per night</h6>
         <div class="features mb-4">
           <h6 class="mb-1">Features</h6>
           <span class="badge bg-light text-dark text-wrap">
             2 Rooms
            </span>
            <span class="badge bg-light text-dark text-wrap">
             1 Bathroom
            </span>
            <span class="badge bg-light text-dark text-wrap">
             1 Balcony
            </span>
            <span class="badge bg-light text-dark text-wrap">
             3 sofa
            </span>
         </div>
         <div class="facitilies mb-4">
           <h6 class="mb-1">Facilities</h6>
           <span class="badge bg-light text-dark text-wrap">
             wi-fi
            </span>
            <span class="badge bg-light text-dark text-wrap">
             Television
            </span>
            <span class="badge bg-light text-dark text-wrap">
             AC
            </span>
            <span class="badge bg-light text-dark text-wrap">
             Room heater
            </span>
         </div>
         <div class="Guests mb-4">
           <h6 class="mb-1">Guests</h6>
           <span class="badge bg-light text-dark text-wrap">
             4 Adults
            </span>
            <span class="badge bg-light text-dark text-wrap">
             5 Children
            </span>
         </div>
         <div class="Rating mb-4">
           <h6 class="mb-1">Rating</h6>
           <span>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
            </span>
         </div>
         <div class="d-flex justify-content-evenly mb-2">
          <a href="#"class="btn btn-sm text-white custom-bg shadow-none ">Book Now</a>
          <a href="#"class="btn btn-sm btn-outline-dark shadow-none ">More Details</a>
         </div>
       </div>
     </div>
    </div>

    <div class="col-12 text-center mt-5">
     <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More rooms>></a>
    </div>
  </div>
</div>

<!--Our Facitilies-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
 <div class="container">
   <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="images\facilities\IMG_43553.svg" width="80px">
       <h5 class="mt-3">wifi</h5>
     </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="images\facilities\IMG_96423.svg" width="80px">
       <h5 class="mt-3">Heater</h5>
     </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="images\facilities\IMG_49949.svg" width="80px">
       <h5 class="mt-3">Air-Conditioner</h5>
     </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="images\facilities\IMG_47816.svg" width="80px">
       <h5 class="mt-3">SPA</h5>
      </div> 
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="images\facilities\IMG_27079.svg" width="80px">
       <h5 class="mt-3">Fire Alarm</h5>
     </div>
    </div>
  </div>
</div>
<div class="col-12 text-center mt-5">
  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>></a>
</div>

<!--Our Testinominals-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Testimonials</h2>

<div class="container mt-5">
 <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-itmes-center mb-3">
          <img src="images\about\rating.svg" width="30px">
          <h6 class="m=0 ms-2 ">Random user1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Sunt modi nemo molestiae. Officiis quidem, enim ad sit dolores eum vitae.
        </p>
        <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-itmes-center mb-3">
          <img src="images\about\rating.svg" width="30px">
          <h6 class="m=0 ms-2 ">Random user1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Sunt modi nemo molestiae. Officiis quidem, enim ad sit dolores eum vitae.
        </p>
        <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-itmes-center mb-3">
          <img src="images\about\rating.svg" width="30px">
          <h6 class="m=0 ms-2 ">Random user1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Sunt modi nemo molestiae. Officiis quidem, enim ad sit dolores eum vitae.
        </p>
        <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="col-12 text-center mt-5">
  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Testinomials>></a>
</div>
</div>

<!--reach us-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach us</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
     <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56062.109751875534!2d77.0450953!3d28.573310099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1a9c31eec4e1%3A0x39493976cba4c89a!2sDwarka%2C%20Delhi!5e0!3m2!1sen!2sin!4v1717666751302!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
         <h5>call us</h5>
         <a href="tel: +919250172412" class="d-inline-block mb-2 text-decoration-none text-dark">
           <i class="bi bi-telephone-fill"></i> +919250172412
         </a>
         <br>
         <a href="tel: +917876061272" class="d-inline-block mb-2 text-decoration-none text-dark">
           <i class="bi bi-telephone-fill"></i> +917876061272
         </a>
      </div>
      <div class="bg-white p-4 rounded mb-4">
         <h5>Follow us</h5>
         <a href="#" class="d-inline-block mb-3">
           <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-twitter-x"></i>twitter
           </span>
         </a>
         <br>
         <a href="#" class="d-inline-block mb-3">
           <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-facebook"></i></i>Facebook
           </span>
         </a>
         <br>
         <a href="#" class="d-inline-block">
           <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-instagram"></i>Instgram
           </span>
         </a>
     </div> 
  </div>
</div>

<?php require('inc/footer.php') ?>

<!--Registration-->
<div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">

    <form >
       <div class="modal-header">
         <h5 class="modal-title d-flex align-items-center">
          <i class="bi bi-person-vcard fs-3 me-2"></i>User Registration
         </h5>
         <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          Note: Your details must match with your ID (Aadhaar card, passport, driving license, etc.)
          that will be required during check-in.
        </span>
        <div class="container-fluid">
         <div class="row">
         <div class="col-md-6 ps-0 mb-3">
           <label class="form-label">Name</label>
           <input type="text" class="form-control shadow-none">
         </div>
          <div class="col-md-6 p-0">
           <label class="form-label">Email</label>
           <input type="email" class="form-control shadow-none">
          </div>
          <div class="col-md-6 ps-0 mb-3">
           <label class="form-label">Phone Number</label>
           <input type="number" class="form-control shadow-none">
          </div>
          <div class="col-md-6 p-0 mb-3">
           <label class="form-label">Picture</label>
           <input type="file" class="form-control shadow-none">
          </div>
          <div class="col-md-12 p-0 mb-3">
           <label class="form-label">Address</label>
           <textarea class="form-control shadow-none" rows="1"></textarea>
          </div>
          <div class="col-md-6 ps-0 mb-3">
           <label class="form-label">PinCode</label>
           <input type="number" class="form-control shadow-none">
          </div>
          <div class="col-md-6 ps-0 mb-3">
           <label class="form-label">Date of Birth</label>
           <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-md-6 ps-0 mb-3">
           <label class="form-label">Password</label>
           <input type="password" class="form-control shadow-none">
          </div>
          <div class="col-md-6 ps-0 mb-3">
           <label class="form-label">Confirm password</label>
           <input type="password" class="form-control shadow-none">
          </div>
          <div class="Text-center my-1">
            <button type="submit" class="btn btn-dark shadow-none">Register</button>
          </div>
        </div>
   </form>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerview:"2",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      }
    });
  </script>
</body>
</html>