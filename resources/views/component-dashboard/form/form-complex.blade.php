<div class="bgc-white p-20 bd">
  <h6 class="c-grey-900">Complex Form Layout</h6>
  <div class="mT-30">
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="fw-500">Birthdate</label>
          <div class="timepicker-input input-icon form-group">
            <div class="input-group">
              <div class="input-group-addon bgc-white bd bdwR-0">
                <i class="icon-calendar"></i>
              </div>
              <input type="text" class="form-control bdc-grey-200 start-date" placeholder="Datepicker" data-provide="datepicker">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="checkbox checkbox-circle checkbox-info peers ai-c">
          <input type="checkbox" id="inputCall2" name="inputCheckboxesCall" class="peer">
          <label for="inputCall2" class=" peers peer-greed js-sb ai-c">
            <span class="peer peer-greed">Call John for Dinner</span>
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
  </div>
</div>