<?php if(isset($row)) { ?>
    <?php if($row) { ?>
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body text-center">
				 </p>  <div class="bej"> <p class="inset"> </p>
        <h1><strong>Bejelentkezett:</strong></h1>
        Azonosító: <strong><?= $row['id'] ?></strong><br><br>
        Név: <strong><?= $row['csaladi_nev']." ".$row['uto_nev'] ?></strong>
		<br>
<br>
<p class="inset"> </p>

    <?php } else { ?>
	 </p>  <div class="bej"> <p class="inset"> </p>
        <h1><strong>A bejelentkezés nem sikerült!</strong></h1>
        <a href="?oldal=belepes" >Próbálja újra!</a>
				<br>
<br>
</div>
<p class="inset"> </p>
    <?php } ?>
<?php } ?>
<?php if(isset($errormessage)) { ?>
</p>  <div class="bej"> <p class="inset"> </p>
    <h2><?= $errormessage ?></h2>
			<br>
<br>
</div>
<p class="inset"> </p>
<?php } ?>
</div>
            </div>
            </div>
        </div>
    </div>
