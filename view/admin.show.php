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
    <a href="/users/logout.php" class="btn btn-success">Logout</a>
    <a href="/index.php" class="btn btn-success">Main</a></div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Avatar</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Avatar</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php foreach ($users as $key => $user):?> 
            <tr>
              <td><?=$user['id'];?></td>
              <td><?=$user['name'];?></td>
              <td><?=$user['email'];?></td>
              <td><?=$user['message'];?></td>
              <td><img src="/users/uploads/<?= $user['image'];?>" width="50"></td>
              <td><form method="POST" action="/users/edit.php">
                <input type="hidden" name="id" value="<? echo $user['id'];?>">
                <input type="submit" class="btn btn-info btn-sm" name="<? echo $user['id'];?>" value="edit">  
                <button onclick="return confirm('are you sure?')" type="submit" class="delete" style="border:0; background-color: transparent;">
                  <i class="fas fa-times" ></i>
                </button>
                </form>
              </td>
            </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="/vendor/datatables/jquery.dataTables.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="/js/main.js" type="text/javascript"></script>
<script src="/js/sb-admin.js"></script>
<script src="/js/demo/datatables-demo.js"></script>

</body>
</html>