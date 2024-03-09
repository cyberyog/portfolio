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
    background: ;
    font-family: 'Signika Negative', sans-serif;



   
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

.vetri{
  margin-left:4px;
}
  @media only screen and (max-width: 767px) {
    /* Styles specific to mobile screens */
    .vetri{
      margin-left:-87px ;
    }
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
  .nav {
    flex-direction: column; /* Change the direction to vertical */
  }

  .nav-item {
    margin-bottom: 10px; /* Add spacing between vertical nav items */
  }

  .nav-link {
    padding: .5rem 1rem; /* Adjust the padding as needed */
  }
  #ul {
        background-color: transparent;

        margin-left: auto; /* Align the nav list to the right */
        text-align: end; /* Reduce the width of the nav list */
    }
    .navbar-collapse {
        width: 50%; /* Reduce the overall width of the navbar */
        margin-left: auto; /* Align the navbar to the right */
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
   
      <a class=" vetri navbar-brand" href="Home">Vetrivel M</a></p>

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
            <a class="nav-link nav-col" href="Contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
