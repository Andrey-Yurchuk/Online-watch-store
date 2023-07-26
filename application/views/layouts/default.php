<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?></title>
        <link rel="icon" type="image/png" sizes="32x32" href="./public/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./public/favicon/favicon-16x16.png">
        <link href="/public/styles/bootstrap.css" rel="stylesheet">
        <link href="/public/styles/main.css" rel="stylesheet">
        <link href="/public/styles/font-awesome.css" rel="stylesheet">
        <script src="/public/scripts/form.js"></script> 
        <script src="/public/scripts/search.js"></script> 
    </head> 
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M57 33C57 46.8071 45.8071 58 32 58C18.1929 58 7 46.8071 7 33C7 19.1929 18.1929 8 32 8C45.8071 8 57 19.1929 57 33Z" fill="#E5E5E5"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M32 55C44.1503 55 54 45.1503 54 33C54 20.8497 44.1503 11 32 11C19.8497 11 10 20.8497 10 33C10 45.1503 19.8497 55 32 55ZM32 58C45.8071 58 57 46.8071 57 33C57 19.1929 45.8071 8 32 8C18.1929 8 7 19.1929 7 33C7 46.8071 18.1929 58 32 58Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3351 4.30003C14.4128 3.61156 12.3793 5.00285 12.3246 7.04395L12.1086 15.1005L10.1093 15.0469L10.3253 6.99034C10.4165 3.58852 13.8057 1.2697 17.0094 2.41715L24.5969 5.13466L23.9226 7.01754L16.3351 4.30003Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M47.5625 4.30241C49.4848 3.61394 51.5182 5.00523 51.573 7.04632L51.789 15.1029L53.7883 15.0493L53.5723 6.99272C53.481 3.5909 50.0919 1.27208 46.8881 2.41953L39.3006 5.13704L39.975 7.01992L47.5625 4.30241Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M31 18C31.5523 18 32 18.4477 32 19V29.5858L42.7071 40.2929C43.0976 40.6834 43.0976 41.3166 42.7071 41.7071C42.3166 42.0976 41.6834 42.0976 41.2929 41.7071L30 30.4142V19C30 18.4477 30.4477 18 31 18Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4142 49.5858C18.1953 50.3668 18.1953 51.6332 17.4142 52.4142L10.9142 58.9142C10.1332 59.6953 8.86683 59.6953 8.08579 58.9142C7.30474 58.1332 7.30474 56.8668 8.08579 56.0858L14.5858 49.5858C15.3668 48.8047 16.6332 48.8047 17.4142 49.5858Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M55.9142 58.9142C56.6953 58.1332 56.6953 56.8668 55.9142 56.0858L49.4142 49.5858C48.6332 48.8047 47.3668 48.8047 46.5858 49.5858C45.8047 50.3668 45.8047 51.6332 46.5858 52.4142L53.0858 58.9142C53.8668 59.6953 55.1332 59.6953 55.9142 58.9142Z" fill="black"/>
                    </svg>
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <!--ФОРМА-->
                <form id="seForm">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <div class="col-auto">
                            <input type="text" class="form-control mb-2" id="word" name="word" placeholder="Введите название бренда">
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-secondary" name="btn" onclick="searchForm('search')" style="border-radius: 8%; height: 47px; margin-bottom: 7px">Найти</button>
                        </div>
                    </div>
                </form>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/about" style="font-size: 16px;">О магазине</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact" style="font-size: 16px;">Написать нам</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php echo $content; ?>
        <hr>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="https://github.com/Andrey-Yurchuk/Andrey-Yurchuk" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-muted">&copy; Магазин часов</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>