<style>
  #ul{
    margin-left:auto;

  }

  .custom-navbar {
    background-color:#001F3F; /* Replace with your desired color code */
  }
  @media only screen and (max-width: 767px) {
  /* Styles specific to mobile screens */
  #span1 {
    width:72%
  }
}

.nav-col{
  color:white;
}
</style>




<header data-bs-theme="dark">
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="../portfolio/index.php">
          <img src="/portfolio/img/profile.svg" class="rounded " alt="" width="20" height="24">
        </a>
        <span class="navbar-brand mb-0 h1"id="span1">Vetrivel M</span>

        <!-- Add the toggle button for smaller screens -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" ></span>
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
              <a class="nav-link nav-col" href="Contect.php">Contect</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>