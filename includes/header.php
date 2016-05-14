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

        <h1>
            <a href="/" rel="home">Pet Detectr</a>
        </h1>

        <p>Report lost or found pets</p>

        <nav>
            <ul>
                <li <?php if ($page=='search')
      echo 'class="is-current"'; ?>>
                    <a href="/">Search Database</a>
                </li>
                <li <?php if ($page=='lost')
      echo 'class="is-current"'; ?>>
                    <a href="/lost.php">Report Lost</a>
                </li>
                <li <?php if ($page=='found')
      echo 'class="is-current"'; ?>>
                    <a href="/found.php">Report Found</a>
                </li>
            </ul>
        </nav>

    </header>