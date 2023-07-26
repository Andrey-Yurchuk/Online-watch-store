<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Вход в панель Администратора</div>
        <div class="card-body">
            <!--ФОРМА-->
            <form>
                <div class="form-group">
                    <label>Логин</label>
                    <input class="form-control" type="text" id="login" name="login">
                </div>
                <div class="form-group"> 
                    <label>Пароль</label>
                    <input class="form-control" type="password" id="password" name="password">
                </div>
                <button type="button" class="btn btn-primary btn-block" onclick="loginAdmin('login')">Вход</button>
            </form>
        </div>
    </div>
</div>