<!DOCTYPE html>
<html>
    <head>
        <title>Regisztráció</title>
        <meta charset="utf-8">
    </head>
    <body>
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body text-center">
	</p>  <div class="bej"> <p class="inset"> </p>
        <?php if(isset($uzenet)) { ?>
            <h1><?= $uzenet ?></h1>
            <?php if($ujra) { ?>
                <a href="pelda.html">Próbálja újra!</a>
            <?php } ?>
        <?php } ?>
		<br>
<br>
<p class="inset"> </p>
</div>
            </div>
            </div>
        </div>
    </div>
</div>
    </body>  
</html>