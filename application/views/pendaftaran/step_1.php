<section>
  <div class="inner">

    <div class="wizard-header">
      <h3 class="heading">SKEMA SERTIFIKASI</h3>
      <p>Silahkan pilih salah satu skema yang akan diujikan </p>
    </div>

    <div class="panel-group" id="accordiontb">

      <input type="hidden" name="skema_yang_dipilih" id="skema_yang_dipilih"/>

      <?php
        foreach ($data_skema as $key => $value) {
      ?>

      <div class="panel panel-default">

        <a data-toggle="collapse" data-parent="#accordiontb" href="#collapse<?=$key?>">
          <div class="panel-heading">
            <h4 class="panel-title accordion-toggle">
              <?=$key+1?>. <?= $value->skema ?>
            </h4>
          </div>
        </a>

        <div id="collapse<?=$key?>" class="panel-collapse collapse">
          <div class="panel-body card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <div class="ms-3">
                    <p class="text-muted mb-0">
                      <?= $value->description ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-footer bg-light p-2 d-flex justify-content-around">
              <a class="btn btn-info btn-sm m-0" href="#" role="button" data-ripple-color="primary">
                Download <i class="fa fa-download ms-2"></i>
              </a>
              <a id="selanjutnya-2" class="nextBtn btn btn-warning btn-sm m-0" href="javascript:void(0)" onclick='pilih_skema(<?= $value->id; ?>)' role="menuitem">
                Pilih Skema <i class="fa fa-check-square-o ms-2"></i>
              </a>
            </div>
          </div>
        </div>

      </div>

      <?php } ?>

  </div>
</section>

<script type="text/javascript">
  function pilih_skema(id) {
    $('#skema_yang_dipilih').val(id);
    $('#step_langkah').val('2');

    // alert(xxxt);
  }

  // allNextBtn = $('.nextBtn'),
  // allPrevBtn = $('.prevBtn');
  //
  // allNextBtn.click(function (e) {
  //   var steps_langkah = $('#step_langkah').val();
  // });

  $(document).ready(function () {

    var idfSatu = document.getElementById("form-total-p-0");
    var idfDua =  document.getElementById("form-total-p-1");
    var idfTiga = document.getElementById("form-total-p-2");
    var idfEmpat =document.getElementById("form-total-p-3");

    var stepSatu = document.getElementById("step1");
    var stepDua =  document.getElementById("step2");
    var stepTiga = document.getElementById("step3");
    var stepEmpat =document.getElementById("step4");

    $("#selanjutnya-2").click(function (e) {

      idfSatu.style.display = "none";
      idfDua.style.display = "block";

      stepDua.classList.remove("disabled");
      stepDua.classList.add("active2");

      // alert('ok');
    });

  });

</script>
