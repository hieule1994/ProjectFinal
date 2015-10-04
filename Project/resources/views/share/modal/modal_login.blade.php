<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Đăng nhập vào hệ thống</h4>
            </div>
            <form action="{{url('user/login')}}" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tên đăng nhập:</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu:</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="submit" class="btn btn-primary" value="Đăng nhập">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                </div>
            </form>
        </div>
    </div>
</div>