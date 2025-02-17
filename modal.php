<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="customerForm" class="needs-validation" action="save_customer.php" method="post" novalidate>
        <input type="hidden" id="customerId" name="customerId"> 

          <div class="mb-3">
            <label for="fullname" class="col-form-label">ชื่อ - นามสกุล:</label>
            <input type="text" class="form-control" id="fullname" name="fullname" required>
            <div class="invalid-feedback">
                กรุณากรอกชื่อ - นามสกุล
            </div>
          </div>
          <div class="mb-3">
            <label for="email" class="col-form-label">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="invalid-feedback">
                กรุณากรอกอีเมลให้ถูกต้อง
            </div>
          </div>
          <div class="mb-3">
            <label for="address" class="col-form-label">ที่อยู่:</label>
            <textarea class="form-control" id="address" name="address" required></textarea>
            <div class="invalid-feedback">
                กรุณากรอกที่อยู่
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script>
  // เมื่อฟอร์มถูกส่ง
  (function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
  })()




</script>
