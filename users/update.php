<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Users</title>
	<link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="/vendor/datatables/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="/css/sb-admin.css">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <?php require_once 'edit.php'; ?>
<section>
	<h1>Hello World</h1>
</section>
        <div class="box card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Users Table Example
          </div>
         <form action="change.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $id;?>">
            <div class="box-body">
              <div class="form-group">
                <label for="UsersName">User</label>
                <br>
                <input type="text" name="name" value="<?= $name;?>" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="UsersEmail">Email</label><br>
                <input type="text" name="email"value="<?= $email;?>"placeholder="Enter your email">
              </div>
              <div class="form-group">
                <label for="UsersMessage">Message</label><br>
                <textarea name="message" value="Enter your Text" placeholder="<?= $message;?>"></textarea>
              </div>
              <div class="form-group">
                <img src="uploads/<?= $filename;?>" alt="" class="img-responsive" width="100">
                <label for="UsersAvatar">Image</label><br>
                <input type="file" name="image">
              </div>
              <button type="submit" class="btn btn-success"name="sumbit">Change</button>
            </div>
            </form>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.js"></script>
  <!-- Page level plugin JavaScript-->
  <script src="/vendor/datatables/jquery.dataTables.js"></script>
  <script src="/vendor/datatables/dataTables.bootstrap4.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="/js/main.js" type="text/javascript"></script>
  <script src="/js/sb-admin.js"></script>
	
</body>
</html>