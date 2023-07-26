<header class="masthead" style="background-image: url('/public/images/sky_night_star_pxhere.jpg'); background-color: #fff; margin-bottom: -30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading" style="padding: 90px;">
                    <h1 style="font-size: 65px; padding-top: 35px">Результаты поиска</h1> 
                    <span class="subheading"></span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container mt-5">
    <div class="d-flex flex-wrap">
        <?php foreach ($list as $val): ?>
            <div class="card-body">
                <img class="img-thumbnail" src="/public/watch/<?php echo $val['articul_chasov']; ?>.jpg" width="300px" height="220px" alt="Картинка с часами"/>    
                <ul class="list-unstyled mt-3 mb-4">
                    <li><b><?php echo htmlspecialchars($val['brend'], ENT_QUOTES); ?></b></li>
                    <li><?php echo htmlspecialchars($val['nazvanie_chasov'], ENT_QUOTES); ?></li>
                    <li>Цена:&nbsp;<?php echo htmlspecialchars($val['cena'], ENT_QUOTES); ?>&nbsp;руб.</li>
                    <a href="/watch/<?php echo $val['articul_chasov']; ?>" target="_blank"><button type="button" class="btn btn-outline-primary" style="border-radius: 8px; margin-top: 10px">Подробнее</button></a>
                </ul>   
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
    <div class="clearfix">
        <?php echo $pagination; ?>
    </div> 
</div>
