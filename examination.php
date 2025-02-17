<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="js/main.js"></script>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal</button>
      </div>
  </div>
</nav>


<div class="container">
    
<table id="customerTable" class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>ชื่อ - นามสกุล</th>
            <th>Email</th>
            <th>ที่อยู่</th>
            <th>จัดการ</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'db.php';

        $stmt = $pdo->query("SELECT * FROM customers ORDER BY id ASC");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['fullname']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['address']}</td>
                    <td>
                        <!-- ปุ่ม Edit -->
                        <button type='button' class='btn btn-primary edit-btn' 
                            data-bs-toggle='modal' 
                            data-bs-target='#editModal'
                            data-id='{$row['id']}'
                            data-fullname='{$row['fullname']}'
                            data-email='{$row['email']}'
                            data-address='{$row['address']}'>
                            Edit
                        </button>

                        <!-- ปุ่ม Delete -->
                        <button type='button' class='btn btn-danger delete-btn'
                            data-id='{$row['id']}'
                            data-fullname='{$row['fullname']}'
                            data-email='{$row['email']}'
                            data-address='{$row['address']}'
                            data-bs-toggle='modal'
                            data-bs-target='#deleteModal'>
                            Delete
                        </button>
                    </td>
                </tr>";
            }
        ?>
    </tbody>
</table>


</div>

<?php include 'modal.php'; ?>
<?php include 'modal/modal-del.php'; ?>

</body>
</html>