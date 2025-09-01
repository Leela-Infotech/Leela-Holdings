<?php 
/**
 * Header Navigation Template
 * @package customtheme
 */
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
  <div class="row w-100">
    <div class="col-lg-6 d-flex justify-content-between">
    <a class="navbar-brand" href="#"><img src="/wp-content/uploads/2025/09/logo.png" width="100px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
</div>
    <!-- For Desktop  -->
    <div class="col-lg-6 d-lg-flex justify-content-end d-none" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Tours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-disabled="true">Reviews</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" aria-disabled="true">Contact</a>
        </li>
      </ul>
    </div>

    <!-- // For Mobile  -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav d-lg-none">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Tours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-disabled="true">Reviews</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" aria-disabled="true">Contact</a>
        </li>
      </ul>
</div>
    </div>
  </div>
</nav>