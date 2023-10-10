<script>
    <?php if($_GET['status'] == 2): ?>
        alert("Đăng kí không thành công!! Mời đăng kí lại");
    <?php endif ?>
    
    <?php if($_GET['status'] == 1): ?>
        alert("Đăng kí thành công");
    <?php endif ?>

    <?php if($_GET['status'] == 3): ?>
        alert("Sai tài khoản or mật khẩu!!!");
    <?php endif ?>

    <?php if($_GET['status'] == 4): ?>
        alert("Đăng nhập thành công");
    <?php endif ?>
</script>