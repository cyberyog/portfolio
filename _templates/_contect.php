<style>
  @media only screen and (max-width: 767px) {
    .img {
      display: none;
    }
  }

  .container-fluid {
    overflow-x: hidden;
  }

  h2 {
    color: white;
    margin-top: 40px;
    margin-bottom: 45px;
  }

  #hr1 {
    border-radius: 5px;
    margin-top: -9px;
  }

  .contact {
    background-color: #0a2138;
  }
</style>

<div class="contact">
  <hr id="hr1">
  <h2 class="ml-2">Contact Form</h2>
  <hr id="hr1">
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <form action="https://formsubmit.co/d5a504be28258388df7ee2d39b22b839" method="POST">
        <div class="row mb-3">
          <div class="col-md-6 mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" required>
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter subject" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <label for="Message" class="form-label">Message</label>
            <textarea name="message" id="message" class="form-control" style="resize: none; height: 150px;" placeholder="Message" required></textarea>
          </div>
        </div>
        <div class="md-3">
          <button type="submit" class="btn btn-dark"><i class="bi bi-send"></i> Send</button>
          <button type="reset" class="btn btn-danger"><i class="bi bi-radioactive"></i> Clear All</button>
        </div>
      </form>
    </div>
    <div class="col-md-6 ">
      <img class="img" src="img/con.jpg" alt="img" style="width: 600px; height: 400px;">
    </div>
  </div>
</div>
