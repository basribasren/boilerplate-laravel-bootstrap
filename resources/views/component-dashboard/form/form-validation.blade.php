<div class="bgc-white p-20 bd">
  <h6 class="c-grey-900">Validation</h6>
  <div class="mT-30">
    <form class="container" id="needs-validation" novalidate>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">First name</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationCustom02">Last name</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="validationCustom03">City</label>
          <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationCustom04">State</label>
          <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationCustom05">Zip</label>
          <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
          <div class="invalid-feedback">
            Please provide a valid zip.
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          var form = document.getElementById('needs-validation');
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        }, false);
      })();
    </script>
  </div>
</div>