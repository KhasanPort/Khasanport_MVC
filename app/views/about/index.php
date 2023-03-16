  <link rel="stylesheet" href="<?=BASEURL;?>/css/about.css">

  <!-- Jumbotroon -->
  <section class="jumbotron text-center" id="home">
    <img src="<?= BASEURL;?>img/Mikir.png" class="rounded-circle" width="120px" alt="Profile" title="Khasan37" srcset="">
    <h1 class="display-4 fw-bold">Adi Akhmad Khasan</h1>
    <p class="lead"> Seniman | <strong class="text"> Programer </strong> </p>
  </section>
  <!-- Akhir Jumbotron -->
  
  <!-- About -->
  <Section class="" id="about">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2 class="text">About me</h2>
        </div>
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-4">
          <p>
            I am Adi Akhmad Khasan, I am 16 year old
          </p>
        </div>
        <div class="col-4">
          <p>
            This Website is make from bootstrap and i know this website is not good. but you can look at my other website in <a href="#" class="text">Project</a>
          </p>
        </div>
      </div>
    </div>
  </Section>
  <!-- Akhir About -->

  <!-- Contact Me -->
  <section id="contact">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2 class="text">Contact Me</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <form name="submit-to-google-sheet" class="col-md-8">
        <div class="mb-3">
          <label for="name" class="form-label text-form">Nama Lengkap</label>
          <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="Email" class="form-label text-form">Email Address</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="text-area" class="form-label text-form">Message</label>
          <textarea name="pesan" id="" rows="3" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
      </form>
    </div>
      <div class="alert alert-primary text-center hidden" role="alert">
        Success!
      </div>
      <div class="alert alert-danger text-center hidden" role="alert">
        Sesuatu salah!
      </div>
  </section>
  <!-- Akhir Dari Contact Me -->

  <!-- Footer -->
  <footer class="bg-primary text-white text-center m-4">
    <a href="" class="text-white fw-bold">Media Social</a>
  </footer>
  <!-- Akhir Footer -->

  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbxT90vMRiV0FyCqVK4rMGLrMyYFttw5b8NPFBhbLI6ZySsR5j6jooctd-4PkT9esvPmrA/exec'
    const form = document.forms['submit-to-google-sheet']
    const alertPrimary = document.querySelector('.alert-primary');
    const alertDanger = document.querySelector('.alert-danger');

    console.log(form);

    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
          console.log('Success!', response)
          form.reset();
          alertPrimary.classList.remove('hidden')
          alertDanger.classList.add('hidden')
        })
        .catch(error => {
          console.error('Error!', error.message)
          alertDanger.classList.remove('hidden')
          alertPrimary.classList.add('hidden')
        })
    });


</script>