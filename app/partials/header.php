<?php include('functions/functions.php');?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Detectr &mdash; report lost or found pets</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <svg class="h-hide" xmlns="http://www.w3.org/2000/svg">
        <symbol id="caret-icon" viewBox="0 0 429 196">
            <polygon transform="translate(214.366776, 97.851478)
            rotate(-180.000000) translate(-214.366776, -97.851478)"
            points="214.366776 2.84217094e-14 428.733552 195.702957
            1.64887724e-14 195.702957"></polygon>
        </symbol>
    </svg>

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
                        <li class="c-nav__item <?php if ($page=='search') echo 'is-current'; ?>">
                            <a class="c-nav__link" href="/">Search Database</a>
                        </li>
                        <li class="c-nav__item <?php if ($page=='lost') echo 'is-current'; ?>">
                            <a class="c-nav__link" href="/lost">Report Lost</a>
                        </li>
                        <li class="c-nav__item <?php if ($page=='found') echo 'is-current'; ?>">
                            <a class="c-nav__link" href="/found">Report Found</a>
                        </li>
                    </ul>
                </nav>

            </div>
            <!-- .l-grid__item -->

        </div>
        <!-- .l-grid -->

    </header>
