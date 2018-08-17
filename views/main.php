<html>
<head>
	<title>Shareboard</title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Shareboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
          </li>

        </ul>

				<ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/">Register</a>
          </li>

        </ul>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="row">
      	<?php require($view); ?>
      </div>

    </main><!-- /.container -->
</body>
</html>
