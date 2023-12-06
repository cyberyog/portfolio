<style>
  .img-cv{
    padding: 20px;
    

  }
  p{
    color: whitesmoke;
  }

#name{
    margin-top: 20%;
    margin-left:8px;
    color:whitesmoke;
}
@media only screen and (min-width: 767px){
  #img {
    margin-top: 5px;
    width: 85%;

}
}
@media only screen and (max-width: 767px) {
  /* Styles specific to mobile screens */
  #name {
    margin-top: 10px; /* Adjust the size as needed */
  }
}
#img{
  
    margin-left: 14%;
    margin-top: 64px;
    width: 75%;
    
    background-color:whitesmoke;
    color: whitesmoke;
    border-style: double;
    border-width: 8px;
  }

  /* #img:hover {
    transform: scale(1.1); 
    background-color:#9cc6cd
  }*/ 

.btn{
  background-color:#061321;
    color: whitesmoke;
    border-style: outset;
    border-width: 2px;
} 
/* @media only screen and (min-width: 767px) {
  /* Styles specific to mobile screens */
  /* #img {
    margin-top: 65px;
    width: 65%;
  }
} */ */

</style>



<div class="container-fluid row" >
    <div class=" col-md-4" style="padding: 0;">

        <div class=" img-cv w-100 h-100  col" style="margin: 0; ">
            <img  id="img"src="/portfolio/img/profile.svg" class="rounded-circle profile" alt="Dp">
        </div>

    </div>
    <div class="container text-center col-md" style="padding: 0;">

        <div class="card-body text-center" id="name">
            <h2 style="margin-top: 10px; color:whitesmoke;">Vetrivel M</h2>
            <p class="card-text-center lh-base" style="text-align: justify; padding: 0; margin: 0; color:whitesmoke">
                &nbsp;I'm a final year BTech.IT (Bachelor of Technology in Information Technology) student with a deep
                passion for cybersecurity and ethical hacking. As a beginner in this exciting field, I am constantly
                learning and exploring the ever-evolving world of digital security.
            </p>
            <h1></h1>
            <a href="../portfolio/Aboutme.php" class="btn btn-primary ">More about me!</a>
        </div>

    </div>
</div>
