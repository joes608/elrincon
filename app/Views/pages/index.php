<?php $this->extend('/templates/layout'); ?>
<?php $this->section('contenido') ?>
<main>
    <h1 class="text-center" ><?php echo $saludo ?></h1>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url(); ?>assets/images/muneco_1.jpeg" class="d-block w-100 carrousel" alt="...">
      <!-- <h4 class="text-center" >Muñecos</h4>
      <p class="text-center" >Los mejores muñecos</p> -->
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>

    </div>
    <div class="carousel-item ">
      <img src="<?php echo base_url(); ?>assets/images/muneco_2.jpeg" class="d-block w-100 carrousel " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="shadow">First slide label shadow</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item ">
      <img src="<?php echo base_url(); ?>assets/images/muneco_3.jpeg" class="d-block w-100 carrousel " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <h3><?php echo $mensaje ?></h3>
</main>
<?php $this->endSection();