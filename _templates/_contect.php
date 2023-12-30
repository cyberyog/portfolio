<style>
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
</style>




<div class="container-fluid">

  <div class="row">
    <hr id="hr1">
    <h2>Contact Form</h2>
    <hr id="hr1">

    <div class="col-md-6">
      <form action="#" method="post">

        <div class="row mb-3">
          <div class="col-md-6 mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" required>
            <div class="invalid-feedback">
              Please enter a name.
            </div>
          </div>
          <div class="col-md-6">

            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
            <div class="invalid-feedback">
              Please enter a email
            </div>

          </div>


        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter subject" required>
            <div class="invalid-feedback">
              Please enter a subject.
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <label for="Message " class="form-label">Message</label>
            <textarea name="Message" id="Message" class="form-control" style="resize: none; height: 150px;"
              placeholder=" Message" required></textarea>
            <div class="invalid-feedback">
              Please enter a message.
            </div>

          </div>
        </div>

        <div class="md-3">
          <button type="submit" class="btn btn-dark" style="margin-right:10px;"><i class="bi bi-send "></i>
            Send</button>
          <button type="reset" class="btn btn-danger"><i class="bi bi-radioactive"></i> Clear All</button>


          <p></p>
        </div>



      </form>
    </div>

  </div>
</div>



</div>