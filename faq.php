<?php
    include 'header.php';
?>
<div class="wrapper">
  <div class="container">
        <div class="row justify-content-between">
            <div class="col-4">
                <h1>FAQ's</h1>
             </div>
            <div class="col-4">
                <img src="Pics/sharkroom.jpg" class="rounded float-end" alt="Dive In!" width="100" height="100">
            </div>
            <hr>
        </div>
    </div>
  <div class="container" style="padding-top: 20px";>
  <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          Wie kann ich einen Account erstellen?
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Klicken Sie hierfür auf der Startseite auf den Link "Sign Up!" und geben Sie dort ihre Daten an und wählen Sie ein (gutes) Passwort.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          Wie kann ich ein Zimmer reservieren?
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Navigieren Sie hierfür auf die Seite "Zimmer reservieren" und geben Sie dort die Anzahl der Gäste sowie das An- und Abreisedatum an.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          Kann man die Stammdaten nach der Registrierung noch ändern?
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Ja. Navigieren Sie hierfür auf die Seite Profil. Dort können Sie ihre Daten, sowie ihr Passwort ändern.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
          Sind meine Daten bei Ihnen sicher? DSGVO und so
        </button>
      </h2>
      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Ja natürlich. Die Passwörter werden zum Beispiel NICHT im Klartext abgespeichert, sondern werden verschlüsselt in unserer Datenbank hinterlegt.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
          Wie kann ich meinen Account löschen?
        </button>
      </h2>
      <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Diese Funktion ist zurzeit noch nicht implementiert, wird aber bald kommen.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingSix">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
          Wie lange hat der Pool geöffnet und wie warm ist das Wasser?
        </button>
      </h2>
      <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Der Pool ist bis 22:00 Uhr geöffnet und hat eine konstante Wassertemperatur von 26° Celsius.</div>
      </div>
    </div>
  </div>
</div>
    
</div>

  <?php
    include 'footer.php';
  ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>