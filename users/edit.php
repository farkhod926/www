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
<section>
	<h1>Hello World</h1>
</section>
        <div class="box card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Users Table Example
          </div>
         <form action="update.php" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="UsersName">User</label>
                <br>
                <input type="text" name="name">
              </div>
              <div class="form-group">
                <label for="UsersEmail">Email</label><br>
                <input type="text" name="email">
              </div>
              <div class="form-group">
                <label for="UsersMessage">Message</label><br>
                <textarea name="message"></textarea>
              </div>
              <div class="form-group">
                <label for="UsersAvatar">Image</label><br>
                <input type="file" name="image">
              </div>
              <button type="submit">Send</button>
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