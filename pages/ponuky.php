<?php

$sql = "SELECT * FROM auto";
if($_GET["hladaj"]) $sql = "SELECT * FROM auto WHERE nazov LIKE '%".$_GET["hladaj"]."%'";	
$result = $conn->query($sql);

//gmail
//$sql = "SELECT * FROM auto";
//$sql = "SELECT * FROM auto WHERE nazov='hladaj'";
//$sql = "SELECT * FROM auto WHERE nazov='id'";
//$result = $conn->query($sql);

//skusane na konzultacnych hodinach v stredu
//$nazov=$_GET["hladaj"];
//$sql = "SELECT * FROM 'auto' WHERE 'nazov'='".$nazov."'";
//$result = $conn->query($sql);

?> 

<div class="container">
<?php 
//echo $sql."<br>"; 
//$n=$result->num_rows();
//echo $n;

?> 

    <div class="row">
        <div class="col-md-4"><img src="obrazky/logo.png" alt="logo stranky" /></div>
        <div class="col-md-8 display-3" id="nazov_stranky">auto-bazár</div>
    </div>
    <div class="row">

    <ul class="nav nav-pills nav-fill col-md-7">
			<li class="nav-item"><a class="nav-link " href="../index.php?link=home.php">Domov</a></li>
            <li class="nav-item"><a class="nav-link active" href="../index.php?link=ponuky.php">Ponuky</a></li>
			<li class="nav-item"><a class="nav-link" href="../index.php?link=kontakt.php">Kontakt</a></li>
			<li class="nav-item"><a class="nav-link" href="../index.php?link=otazky.php">Časté otázky</a></li>
			
	</ul>


    <div class="col-md-4 mt-2">
			<form action="index.php" method="get">
			  <div class="form-row">
				  <div class="col-md-8">
                  <input type="hidden" name="link" value="ponuky.php">
					<input type="text" class="form-control" name="hladaj" placeholder="hľadaný text">
				  </div>
				  <div class="col-md-4">
					<button type="submit" class="btn btn-primary">Odoslať</button>
				  </div>
			  </div>
			</form>
		</div>

    
</div>
<hr>

<div class="row">
    <?php   //for($i=0; $i<9; $i++)

    while($row= $result->fetch_assoc())
      {
            // $row = $result->fetch_assoc();
    ?>
    <div class="card mb-3 col-md-4">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="obrazky/<?php echo $row["obrazok"]; ?>" class="card-img-top" alt="..." width="120" height="120"/>
                
                <!--pokus o prepojenie <img src="obrazky/skoda_fabia.jpg >" alt="..." width="120" height="120"/>-->

                
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text"><?php echo $row["nazov"]; ?></p>
                    <p><?php echo $row["popis"]; ?> </p>
                    <p><?php echo $row["cena"]; ?></p>
                </div>
            </div>
        </div>
    </div>


<?php } ?>
</div>