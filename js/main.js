

  $(document).ready(function() {
    $('#customerTable').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/Thai.json"
        }
    });
});

// เมื่อ Modal ถูกเปิด (ใช้เพื่อดึงข้อมูลแก้ไข)
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // ปุ่มที่เปิด modal
  var customerId = button.data('id');
  var fullname = button.data('fullname');
  var email = button.data('email');
  var address = button.data('address');

  // ตั้งค่าในฟอร์ม
  var modal = $(this);
  modal.find('.modal-title').text('Edit Customer');
  modal.find('#customerId').val(customerId);
  modal.find('#fullname').val(fullname);
  modal.find('#email').val(email);
  modal.find('#address').val(address);

  // ปรับปุ่มให้เป็น "บันทึก" สำหรับการแก้ไข
  modal.find('#saveButton').text('Update');
});
