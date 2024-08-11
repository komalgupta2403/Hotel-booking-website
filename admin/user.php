<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>User Testimonials</title>
  <style>
    .user-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .user-card .profile {
      display: flex;
      align-items: center;
    }
    .user-card .profile img {
      border-radius: 50%;
      width: 50px;
      height: 50px;
    }
    .user-card .profile h6 {
      margin-left: 10px;
      margin-bottom: 0;
    }
    .user-card .rating i {
      color: #f0ad4e;
    }
  </style>
</head>
<body>
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">User profile</h2>

  <div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="user-card">
            <div class="profile d-flex align-items-center mb-3">
              <img src="https://via.placeholder.com/50" alt="User 1">
              <h6>User 1</h6>
            </div>
            <p>
              User1<br>
              78887788<br>
              India<br>
              110084<br>
            </p>
            <div class="rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="user-card">
            <div class="profile d-flex align-items-center mb-3">
              <img src="https://via.placeholder.com/50" alt="User 2">
              <h6>User 2</h6>
            </div>
            <p>
              User2<br>
              78887788<br>
              India<br>
              110084<br>
            </p>
            <div class="rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="user-card">
            <div class="profile d-flex align-items-center mb-3">
              <img src="https://via.placeholder.com/50" alt="User 3">
              <h6>User 3</h6>
            </div>
            <p>
              User3<br>
              78887788<br>
              India<br>
              110084<br>
            </p>
            <div class="rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Users>></a>
    </div>
  </div>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-testimonials', {
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      loop: true,
    });
  </script>
</body>
</html>
