@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <div class="contact-form-wrapper">
        <form action="#" class="contact-form">
          <h5 class="title">Contactez nous</h5>
          <p class="description">N'hésitez pas à nous contacter</p>
          <div>
            <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Nom" required>
          </div>
          <div>
            <input type="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
          </div>
          <div>
            <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30" placeholder="Votre Message" required></textarea>
          </div>
          <div class="submit-button-wrapper">
            <input type="submit" value="envoyer">
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-6">
      <div class="responsive-map d-flex justify-content-center">
        <iframe src="https://www.google.com/maps/place/Brique+web+-+Agence+de+communication+et+Marketing+digital+%C3%A0+Madagascar/@-18.9185906,47.528486,19z/data=!4m6!3m5!1s0x21f07fdfcf08652b:0xa76c749188ce1f31!8m2!3d-18.9185112!4d47.5282462!16s%2Fg%2F11s338t8z2?hl=fr" width="100" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <style>
    .responsive-map {
  overflow: hidden;
  padding-bottom: 70%; /* augmenter la valeur de cette propriété pour agrandir la carte */
  position: relative;
  height: 0;
  margin-left: auto;
  margin-right: auto;
  max-width: 1800px;
  margin-top: 20px;
  margin-bottom: 20px;
}
    
    .responsive-map iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }
    
    body {
      background-color: #f5e0e5 !important;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .contact-form-wrapper {
      padding: 50px 0;
    }
    
    .contact-form {
      padding: 30px 40px;
      background-color: #ffffff;
      border-radius: 12px;
      max-width: 900px;
    }
    
    .contact-form textarea {
      resize
: none;
}

.contact-form .form-input,
.form-text-area {
  background-color: #f0f4f5;
  height: 50px;
  padding-left: 16px;
}

.contact-form .form-text-area {
  background-color: #f0f4f5;
  height: auto;
  padding-left: 16px;
}

.contact-form .form-control::placeholder {
  color: #aeb4b9;
  font-weight: 500;
  opacity: 1;
}

.contact-form .form-control:-ms-input-placeholder {
  color: #aeb4b9;
  font-weight: 500;
}

.contact-form .form-control::-ms-input-placeholder {
  color: #aeb4b9;
  font-weight: 500;
}

.contact-form .form-control:focus {
  border-color: #f33fb0;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.07), 0 0 8px #f33fb0;
}

.contact-form .title {
  text-align: center;
  font-size: 24px;
  font-weight: 500;
}

.contact-form .description {
  color: #aeb4b9;
  font-size: 14px;
  text-align: center;
}

.contact-form .submit-button-wrapper {
  text-align: center;
}

.contact-form .submit-button-wrapper input {
  border: none;
  border-radius: 4px;
  background-color: #f23292;
  color: white;
  text-transform: uppercase;
  padding: 10px 60px;
  font-weight: 500;
  letter-spacing: 2px;
}

.contact-form .submit-button-wrapper input:hover {
  background-color: #d30069;
}

  </style>
</div>
@endsection