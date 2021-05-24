<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>
        NIX trainee task
    </title>
</head>
<body class="d-flex flex-column h-100">

<header class="header">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <a href="\" class="header__logo h3">NIX Trainee Task</a>
            <div class="d-flex justify-content-end align-items-center">
                <?php
                if (isset($_COOKIE['user'])):
                    ?>
                    <h5 class="header__btn">Привет <?php echo $_COOKIE["user"]; ?></h5>
                    <a href="\profile" class="btn btn-success header__btn">Профиль</a>
                    <a href="\clear" class="btn btn-outline-danger header__btn">Выйти</a>
                <?php else: ?>
                    <a href="\login" class="btn btn-outline-primary header__btn">Логин</a>
                    <a href="\registration" class="btn btn-primary header__btn">Регистрация</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

<main class="main flex-shrink-0">
    <div class="container">
        <?php echo $content; ?>
    </div>
</main>

<footer class="footer mt-auto py-2">
    <div class="container">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="mailto:a.chepak91@gmail.com">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 216 216" style="enable-background:new 0 0 216 216;" xml:space="preserve">
<path d="M108,0C48.353,0,0,48.353,0,108s48.353,108,108,108s108-48.353,108-108S167.647,0,108,0z M156.657,60L107.96,98.498
	L57.679,60H156.657z M161.667,156h-109V76.259l50.244,38.11c1.347,1.03,3.34,1.545,4.947,1.545c1.645,0,3.073-0.54,4.435-1.616
	l49.374-39.276V156z"/></svg>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tg://resolve?domain=@ArtemChepak">
                    <svg id="Bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="m12 24c6.629 0 12-5.371 12-12s-5.371-12-12-12-12 5.371-12 12 5.371 12 12 12zm-6.509-12.26 11.57-4.461c.537-.194 1.006.131.832.943l.001-.001-1.97 9.281c-.146.658-.537.818-1.084.508l-3-2.211-1.447 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953z"/>
                    </svg>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/artemchepak">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="m256 0c-140.609375 0-256 115.390625-256 256 0 119.988281 84.195312 228.984375 196 256v-84.695312c-11.078125 2.425781-21.273438 2.496093-32.550781-.828126-15.128907-4.464843-27.421875-14.542968-36.546875-29.910156-5.816406-9.8125-16.125-20.453125-26.878906-19.671875l-2.636719-29.882812c23.253906-1.992188 43.371093 14.167969 55.3125 34.230469 5.304687 8.921874 11.410156 14.152343 19.246093 16.464843 7.574219 2.230469 15.707032 1.160157 25.183594-2.1875 2.378906-18.972656 11.070313-26.074219 17.636719-36.074219v-.015624c-66.679687-9.945313-93.253906-45.320313-103.800781-73.242188-13.976563-37.074219-6.476563-83.390625 18.238281-112.660156.480469-.570313 1.347656-2.0625 1.011719-3.105469-11.332032-34.230469 2.476562-62.546875 2.984375-65.550781 13.078125 3.867187 15.203125-3.890625 56.808593 21.386718l7.191407 4.320313c3.007812 1.792969 2.0625.769531 5.070312.542969 17.371094-4.71875 35.683594-7.324219 53.726563-7.558594 18.179687.234375 36.375 2.839844 54.464844 7.75l2.328124.234375c-.203124-.03125.632813-.148437 2.035157-.984375 51.972656-31.480469 50.105469-21.191406 64.042969-25.722656.503906 3.007812 14.128906 31.785156 2.917968 65.582031-1.511718 4.65625 45.058594 47.300781 19.246094 115.753906-10.546875 27.933594-37.117188 63.308594-103.796875 73.253907v.015624c8.546875 13.027344 18.816406 19.957032 18.761719 46.832032v105.722656c111.808594-27.015625 196-136.011719 196-256 .003906-140.609375-115.386719-256-255.996094-256zm0 0"/>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</footer>

</body>
</html>