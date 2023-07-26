<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4"> 
                        <!--ФОРМА-->
                        <form id="formElem"> 
                            <div class="form-group">
                                <label>Бренд</label>
                                <input class="form-control" type="text" id="brend" name="brend">
                            </div>
                            <div class="form-group">
                                <label>Название часов</label>
                                <input class="form-control" type="text" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <div>Пол</div>
                                <select class="form-control" name="gender">
                                    <option selected disabled>Выберите пол</option>
                                    <option value="мужские">мужские</option>
                                    <option value="женские">женские</option>
                                    <option value="unisex">unisex</option>
                                    <option value="детские">детские</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Гарантия</label>
                                <input class="form-control" type="text" id="guarantee" name="guarantee">
                            </div>
                            <div class="form-group">
                                <label>Цена</label>
                                <input class="form-control" type="text" id="price" name="price">
                            </div>
                            <div class="form-group">
                                <label>Изображение</label>
                                <input class="form-control" type="file" id="img" name="img">
                            </div>
                            <button type="button" class="btn btn-primary btn-block" onclick="buttonAdmin('add')">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>