<!-- Modal ยืนยันการลบ -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">ต้องการลบผู้ใช้งานหรือไม่</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>คุณต้องการลบผู้ใช้งานหรือไม่</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary" id="confirmDelete">ยืนยัน</button>
      </div>
    </div>
  </div>
</div>


<script>
let deleteId = null; 

$('.delete-btn').on('click', function () {
    deleteId = $(this).data('id'); 
});

$('#confirmDelete').on('click', function () {
    if (deleteId !== null) {
        window.location.href = "delete_customer.php?id=" + deleteId;
    }
});


</script>