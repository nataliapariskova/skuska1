<?php
$sql = "SELECT * FROM auto";
$result = $conn->query($sql);
?>


<div class="container">
    <div class="row">
        <div class="col-md-4"><img src="obrazky/logo.png" alt="logo stranky" /></div>
        <div class="col-md-8 display-3" id="nazov_stranky">auto-bazár</div>
    </div>
    <div class="row">



    <ul class="nav nav-pills nav-fill col-md-7">
			<li class="nav-item"><a class="nav-link " href="../index.php?link=home.php">Domov</a></li>
            <li class="nav-item"><a class="nav-link" href="../index.php?link=ponuky.php">Ponuky</a></li>
			<li class="nav-item"><a class="nav-link active" href="../index.php?link=kontakt.php">Kontakt</a></li>
			<li class="nav-item"><a class="nav-link" href="../index.php?link=otazky.php">Časté otázky</a></li>
	</ul>


    <div class="col-md-5" >
                <form class="form-inline" id="vyhladavanie">
                            <div class="form-group mb-2"></div>
                            <div class="form-group mx-sm-3 mb-2">
                                 <label for="inputVyhladavanie" class="sr-only" >Vyhľadávanie</label>
                                 <input type="vyhladavanie" class="form-control" id="inputVyhladavanie" placeholder="Vyhľadávanie">
                             </div>
                             <button type="submit" class="btn btn-primary mb-2">Odoslať</button>
                 </form>
     </div>
</div>
<hr>




<div class="shadow-lg p-3 mb-5 bg-white rounded"><h3> Tel. číslo:</h3> <h4 style="text-align:center" > <B> 0910 100 100 </B> </h4></div>
<div class="shadow-lg p-3 mb-5 bg-white rounded"><h3> IČO:</h3> <h4 style="text-align:center">  <B> 12345678 </B> </h4></div>
<div class="shadow-lg p-3 mb-5 bg-white rounded"><h3> DIČ: </h3> <h4 style="text-align:center"> <B> 0123456789 </B> </h4> </div>
<div class="shadow-lg p-3 mb-5 bg-white rounded"><h3> E-mail: </h3> <h4 style="text-align:center" > <B> bazar@autobazar.sk </B> </h4></div>

<div><img src="obrazky/mapa.jpg" alt="mapa"  align="right" height="230"/> </div>
<div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Adresa:  </h3>
<br><br><br>
<h4 style="text-align:center"> <B> Auto-bazár s. r. o. </B> </h4>
<h4 style="text-align:center"> <B> Hlavná 100 </B> </h4>
<h4 style="text-align:center"> <B> 029 01 Námestovo </B> </h4> 
</div>

<div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>O nás:  </h3> <br><br>
    <p> Sme nezávislí obchod v oblasti automobilizmu. Auto-bazár sme založili s cieľom, aby pre Vás kúpa auta prebehla bez stresov a Vy ste mohli kúpiť kvalitné auto bez rizika. Využívame pri tom naše dlhoročné skúsenosti a kvalitnú modernú techniku.
    Našim zákazníkom tiež pomáhame to správne auto nájsť. Pokiaľ ide o "jazdenky", do detailu ich skontrolujeme po právnej i technickej stránke.
    Postaráme sa tiež o celý servis spojený s kúpou auta: ponúkame vlastnú kúpnu zmluvu, vyjednáme zľavu z konečnej ceny, pomôžeme s poistením vozidla či vybavením financovania za výhodných podmienok. </p>
    <p>Pri našej práci sa riadime <b>tromi piliermi</b>. Sú to: 
            <UL  >
                <LI> odbornosť</LI> 
                <LI> ľudskosť </LI>
                <LI> profesionalita</LI>
           </UL> </p>
</div>
