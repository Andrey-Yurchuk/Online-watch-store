<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Часы</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        
                        <?php if (empty($list)): ?>
                            <p>Список часов пуст</p>
                        <?php else: ?>
                            <table class="table">
                                <tr>
                                    <th>Бренд</th>
                                    <th>Название</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                                <?php foreach ($list as $val): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($val['brend'], ENT_QUOTES); ?></td>
                                        <td><?php echo htmlspecialchars($val['nazvanie_chasov'], ENT_QUOTES); ?></td>
                                        <td><a href="/admin/edit/<?php echo $val['articul_chasov']; ?>" class="btn btn-warning">Редактировать</a></td>
                                        <td><a href="/admin/delete/<?php echo $val['articul_chasov']; ?>" class="btn btn-danger">Удалить</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            <?php echo $pagination; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

