<header class="masthead" style="background: no-repeat top center url('/public/images/background_backdrop_pxhere.jpg'); background-size: 100% 70%; background-color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading" style="margin-top: -60px;">
                    <h1>Часы</h1>
                </div> 
            </div>
        </div>
    </div>
</header>
<div class="container" style="margin-top: -140px;">
    <div class="row" style="margin-bottom: 40px;">
        <div class="col-lg-8 col-md-10 mx-auto">
            <img class="rounded float-left" src="/public/watch/<?php echo $data['articul_chasov']; ?>.jpg" width="360px" height="240px" alt="Картинка с часами"/>
            <div style="margin-left: 400px">
            <div class="page-subheading"><b>Бренд:&nbsp;</b><?php echo htmlspecialchars($data['brend'], ENT_QUOTES); ?></div>
            <div class="page-subheading"><b>Название:&nbsp;</b><?php echo htmlspecialchars($data['nazvanie_chasov'], ENT_QUOTES); ?></div>
            <div class="page-subheading"><b>Пол:&nbsp;</b><?php echo htmlspecialchars($data['gender'], ENT_QUOTES); ?></div>
            <div class="page-subheading"><b>Гарантия:&nbsp;</b><?php echo htmlspecialchars($data['garantia'], ENT_QUOTES); ?></div>
            <div class="page-subheading"><b>Цена:&nbsp;</b><?php echo htmlspecialchars($data['cena'], ENT_QUOTES); ?>&nbsp;руб.</div>
            <br>
            <button type="button" class="btn btn-success" style="border-radius:8px">Добавить в корзину</button>
            </div>
        </div>
    </div>
</div>  