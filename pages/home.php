
<?php

if($_GET["hladaj"]) $sql = "SELECT * FROM auto WHERE nazov LIKE '%".$_GET["hladaj"]."%'";	//ak obsahuje hľadaný reťazec
	else $sql = "SELECT * FROM auto";
$result = $conn->query($sql);
?>


<div class="container">
    <div class="row">
        <div class="col-md-4"><img src="obrazky/logo.png" alt="logo stranky" /></div>
        <div class="col-md-8 display-3" id="nazov_stranky">auto-bazár</div>
    </div>
    <div class="row">

    <ul class="nav nav-pills nav-fill col-md-7">
			<li class="nav-item"><a class="nav-link active" href="../index.php?link=home.php">Domov</a></li>
            <li class="nav-item"><a class="nav-link" href="../index.php?link=ponuky.php">Ponuky</a></li>
			<li class="nav-item"><a class="nav-link" href="../index.php?link=kontakt.php">Kontakt</a></li>
			<li class="nav-item"><a class="nav-link" href="../index.php?link=otazky.php">Časté otázky</a></li>
		
	</ul>


    <!--<div class="col-md-5" > 
                <form class="form-inline" id="vyhladavanie">
                            <div class="form-group mb-2"></div>
                            <div class="form-group mx-sm-3 mb-2">
                                 <label for="inputVyhladavanie" class="sr-only" >Vyhľadávanie</label>
                                 <input type="vyhladavanie" class="form-control" id="inputVyhladavanie" placeholder="Vyhľadávanie">
                             </div>
                             <button type="submit" class="btn btn-primary mb-2">Odoslať</button>
                 </form>
     </div>-->

     
		<div class="col-md-4 mt-2">
			<form action="index.php" method="get">
			  <div class="form-row">
				  <div class="col-md-8">
					<input type="text" class="form-control" name="hladaj" placeholder="hľadaný text">
				  </div>
				  <div class="col-md-4">
					<button type="submit" class="btn btn-primary">Odoslať</button>
				  </div>
			  </div>
			</form>
		</div>
</div>


</div>
<hr>

<div class="container">
<div class="row">
    <?php 
      //while($row= $result->fetch_assoc())
      for($i=0; $i<9; $i++)
      {
      $row = $result->fetch_assoc();
    ?>
    <div class="card mb-3 col-md-4">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="obrazky/<?php echo $row["obrazok"]; ?>" class="card-img-top" alt="..." width="120" height="120"/>
                
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text"><a class="nav-link" href="../index.php?link=ponuky.php&hladaj=<?php echo $row["nazov"]; ?>"><?php echo $row["nazov"]; ?></a></p>
                    
                </div>
            </div>
        </div>
    </div>

<?php } ?>
</div>
</div>