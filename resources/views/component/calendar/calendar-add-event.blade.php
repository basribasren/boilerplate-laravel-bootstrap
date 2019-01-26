<div class="modal fade" id="calendar-edit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="bd p-15">
      <h5 class="m-0">Add Event</h5>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label class="fw-500">Event title</label>
          <input class="form-control bdc-grey-200">
        </div>
        <div class="row">
          <div class="col-md-6">
            <label class="fw-500">Start</label>
            <div class="timepicker-input input-icon form-group">
              <div class="input-group">
                <div class="input-group-addon bgc-white bd bdwR-0">
                  <i class="ti-calendar"></i>
                </div>
                <input type="text" class="form-control bdc-grey-200 start-date" placeholder="Datepicker" data-provide="datepicker">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label class="fw-500">End</label>
            <div class="timepicker-input input-icon form-group">
              <div class="input-group">
                <div class="input-group-addon bgc-white bd bdwR-0">
                  <i class="ti-calendar"></i>
                </div>
                <input type="text" class="form-control bdc-grey-200 end-date" placeholder="Datepicker" data-provide="datepicker">
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="fw-500">Event title</label>
          <textarea class="form-control bdc-grey-200" rows='5'></textarea>
        </div>
        <div class="text-right">
          <button class="btn btn-primary cur-p" data-dismiss="modal">Done</button>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>