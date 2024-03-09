<style>
  .nam {
    font-size: 38px;
    font-family: 'Signika Negative', sans-serif;
  }

  .img-cv {
    padding: 20px;


  }

  p {
    color: whitesmoke;
  }

  #name {
    margin-top: 20%;
    margin-left: 8px;
    color: whitesmoke;
  }

  @media only screen and (min-width: 767px) {
    #img {
      margin-top: 5px;
      width: 85%;

    }
  }

  @media only screen and (max-width: 767px) {

    /* Styles specific to mobile screens */
    #name {
      margin-top: 10px;
      /* Adjust the size as needed */
    }
    #card-text-me {
      font-size: 16px;
    }
  }

  #img {

    margin-left: 14%;
    margin-top: 64px;
    width: 75%;

    background-color: whitesmoke;
    color: whitesmoke;
    border-style: double;
    border-width: 8px;
  }

  /* #img:hover {
    transform: scale(1.1); 
    background-color:#9cc6cd
  }*/

  .btn {
    background-color: #061321;
    color: whitesmoke;
    border-style: outset;
    border-width: 2px;
  }

  @media only screen and (min-width: 767px) {

    /* Styles specific to mobile screens */
   
  }

  #card-text-me {
    font-size: 22px;
    font-family: 'Signika Negative', sans-serif;
    text-align: justify;
    padding: 0;
    margin: 0;
    color: whitesmoke
  }
</style>



<div class="container-fluid row">
  <div class=" col-md-4" style="padding: 0;">

    <div class=" img-cv w-100 h-100  col" style="margin: 0; ">
      <img id="img" src="/img/profile.jpg" class="rounded-circle profile" alt="Dp">
    </div>

  </div>
  <div class="container text-center col-md" style="padding: 0;">

    <div class="card-body text-center" id="name">
      <h1 class="nam" style="margin-top: 10px; color:whitesmoke;">Vetrivel M</h1>
      <p id="card-text-me" class=" card-text-center lh-base" >
        &nbsp;Hi,I'm a passionate final-year IT student pursuing my B.Tech degree with a strong interest in coding and
        development. As a dedicated programmer, I thrive on creating innovative solutions and exploring the
        ever-evolving world of technology. Currently honing my skills, I look forward to contributing my knowledge and
        enthusiasm to the field. Check out my webpage for a glimpse into my coding journey and development projects!
      </p>
      <h1></h1>
      <a href="Aboutme" class="btn btn-primary ">More about me!</a>
    </div>

  </div>
</div>