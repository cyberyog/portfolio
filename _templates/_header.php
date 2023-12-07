<style>
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
    // Function to show the "Coming Soon" alert message
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
  <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="../portfolio/index.php">
        <img src="/portfolio/img/profile.svg" class="rounded " alt="" width="20" height="24">
      </a>
      <span class="navbar-brand mb-0 h1" id="span1"><a class="navbar-brand" href="/portfolio/index.php">Vetrivel M</a></span>

      <!-- Add the toggle button for smaller screens -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
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
