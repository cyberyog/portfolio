<style>
custom-navbar {
    background-color: #001F3F; /* Replace with your desired color code */
  }

  @media only screen and (max-width: 767px) {
    /* Styles specific to mobile screens */
    #span1 {
      width: 72%;
    }
  }
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
      width: 72%;
    }
  }

  .nav-col {
    color: white;
  }
</style>

<script>
  <!-- Add this script inside the <head> or at the end of the <body> tag -->
  
  document.addEventListener("DOMContentLoaded", function () {
    // Function to show a generic "Coming Soon" alert message
    function showComingSoonAlert(event) {
      alert("Coming Soon!");
      event.preventDefault();
    }

    // Attach click event listeners to the "Resume" and "Contact" links
    document.querySelector('a[href="Resume.php"]').addEventListener("click", showComingSoonAlert);
    document.querySelector('a[href="Contect.php"]').addEventListener("click", showComingSoonAlert);
  });


</script>

<header data-bs-theme="dark">
  <nav class=" a navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="/img/profile.jpg" class="img-b rounded " alt="" width="15" height="15">
      </a>
      <span class="navbar-brand mb-0 h1" id="span1"><a class=" vetri navbar-brand" href="index.php">Vetrivel M</a></span>

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
            <a class="nav-link nav-col" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-col" href="Aboutme.php">About me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-col" href="Resume.php">Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-col" href="Contect.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
