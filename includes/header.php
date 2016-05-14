<?php include('app/functions.php');?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Detectr &mdash; report lost or found pets</title>
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>

    <header class="l-header" role="banner">

        <div class="l-grid l-grid--space-between l-grid--align-middle">

            <div class="l-grid__item">

                <h1>
                    <a class="c-logo" href="/" rel="home">Pet Detectr</a>
                </h1>

            </div>

            <div class="l-grid__item">

                <nav role="navigation">
                    <ul class="c-nav">
                        <li class="c-nav__item <?php if ($page=='search')
              echo 'is-current'; ?>">
                            <a class="c-nav__link" href="/">Search Database</a>
                        </li>
                        <li class="c-nav__item <?php if ($page=='lost')
              echo 'is-current'; ?>">
                            <a class="c-nav__link" href="/lost.php">Report Lost</a>
                        </li>
                        <li class="c-nav__item <?php if ($page=='found')
              echo 'is-current'; ?>">
                            <a class="c-nav__link" href="/found.php">Report Found</a>
                        </li>
                    </ul>
                </nav>

            </div>
            <!-- .l-grid__item -->

        </div>
        <!-- .l-grid -->

    </header>