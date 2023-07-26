<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form id="formElem">
                            <div class="form-group">
                                <label>Бренд</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['brend'], ENT_QUOTES); ?>" name="brend">
                            </div>
                            <div class="form-group">
                                <label>Название часов</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['nazvanie_chasov'], ENT_QUOTES); ?>" name="name">
                            </div>
                            <div class="form-group">  
                            <div>Пол</div>
                                <select class="form-control" value="<?php echo htmlspecialchars($data['gender'], ENT_QUOTES); ?>" name="gender">
                                    <option>Выберите пол</option>
                                    <option value="мужские">мужские</option>
                                    <option value="женские">женские</option>
                                    <option value="unisex">unisex</option>
                                    <option value="детские">детские</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Гарантия</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['garantia'], ENT_QUOTES); ?>" name="guarantee">
                            </div>
                            <div class="form-group">
                                <label>Цена</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['cena'], ENT_QUOTES); ?>" name="price">
                            </div>
                            <div class="form-group">
                                <label>Изображение</label>
                                <input class="form-control" type="file" name="img">
                            </div>
                            <button type="button" class="btn btn-primary btn-block" onclick="buttonAdmin('<?php $data['articul_chasov']; ?>')">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>