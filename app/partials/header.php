<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Detectr &mdash; report lost or found pets</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
                        <li class="c-nav__item <?php if ($page == 'search') echo 'is-current'; ?>">
                            <a class="c-nav__link" href="/">Search Database</a>
                        </li>
                        <li class="c-nav__item <?php if ($page == 'lost') echo 'is-current'; ?>">
                            <a class="c-nav__link" href="/lost">Report Lost</a>
                        </li>
                        <li class="c-nav__item <?php if ($page == 'found') echo 'is-current'; ?>">
                            <a class="c-nav__link" href="/found">Report Found</a>
                        </li>
                        <li class="c-nav__item <?php if ($page == 'user') echo 'is-current'; ?>">
                            <a href="/user" class="c-profile <?php if ($page == 'user') echo 'is-active'; ?>">

                                <span class="c-profile__avatar">
                                    <img src="https&#58;&#47;&#47;secure.gravatar.com&#47;avatar&#47;1b463b952bfcc62c851a7c640ddc6cc5&#63;d&#61;https&#37;3A&#37;2F&#37;2Fimg.createsend.com&#37;2Fimg&#37;2F_new-setup&#37;2Favatars&#37;2Favatar-30x30-2x.png&#38;s&#61;60" alt="Avatar of Dave Berner" width="35" height="35">
                                </span>
                                <strong class="c-profile__name">Dave Berner</strong>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
            <!-- .l-grid__item -->

        </div>
        <!-- .l-grid -->

    </header>
