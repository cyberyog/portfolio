<style>
  
.custom-navbar {
    background-color: #061321; /* Replace with your desired color code #001F3F */
  }
  .navbar {
    background-color: #061321 !important;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
}

  /* @media only screen and (max-width: 767px) {
    /* Styles specific to mobile screens */
    /* #span1 {
      width: 50%;
    }
    .img-b{
    margin-left: 7px;
    border-radius: 50%;
    width:15px; 
    height:15px;


  } */ 
  
  .navbar-toggler:focus,
  .navbar-toggler:active {
    outline: none;
    box-shadow: none;
  }
  .navbar-toggler, .icon-bar {
    border:1px solid #DFFFC9;
    border-top-right-radius: 40px !important;
    border-bottom-right-radius: 40px !important;
    border-top-left-radius: 40px !important;
    border-bottom-left-radius: 40px !important;
}
 /* Animated toggler button with rotation effect on hover */
 .navbar-toggler {
    border: none;
    background: transparent !important;
    cursor: pointer;
    padding: 10px;
    transition: transform 0.3s ease-in-out;
  }

  .navbar-toggler:hover {
    transform: none;

  } 

  .navbar-toggler .icon-bar {
    display: block;
    width: 24px;
    height: 3px;
    margin-bottom: 4px; /* Adjust the spacing between bars if needed */
    background-color: white;
    transition: background-color 0.3s ease-in-out;
  }
  .vetri{
    background: #CE78E3;
background: radial-gradient(circle farthest-corner at center center, #CE78E3 0%, #73FF63 25%, #FF7AED 50%, #75A0D9 75%, #E386E0 16%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;


   
  }
  .img-b{
    margin-left: 12px;
    border-radius: 50%;
    width:35px; 
    height:35px;


  }
  #ul {
    margin-left: auto;
  }

  .custom-navbar {
    background-color: #001F3F; /* Replace with your desired color code */
  }

  @media only screen and (max-width: 767px) {
    /* Styles specific to mobile screens */
    #span1 {
      width: 50%;
      margin-left:-40px;
    }
    .img-b{
    margin-left: 7px;
    border-radius: 50%;
    width:25px; 
    height:25px;
  }
}
@media only screen and (min-width: 767px) {
    /* Styles specific to mobile screens */
    #span1 {
      width: 50%;
      margin-left:20px;
    }
  }
  .nav-col {
    color: white;
  }

  #span1{
    
font-family: 'Signika Negative', sans-serif;

  }
</style>

<script>
 

</script>

<header data-bs-theme="dark">
  <nav class=" a navbar navbar-expand-lg navbar-dark custom-navbar" >
    <div class="container-fluid">
        <img src="/img/profile.jpg" class="img-b  " alt=""  >
   
      <p class="navbar-brand mb-0 h1" id="span1"><a class=" vetri navbar-brand" href="Home">Vetrivel M</a></p>

      <!-- Add the toggle button for smaller scr eens -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</button>

      <!-- Add the collapsible navigation links -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav justify-content-end" id="ul">
          <li class="nav-item">
            <a class="nav-link nav-col" aria-current="page" href="Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-col" href="Aboutme">About me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-col" href="Skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-col" href="Contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
