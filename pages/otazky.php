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
			<li class="nav-item"><a class="nav-link " href="../index.php?link=kontakt.php">Kontakt</a></li>
			<li class="nav-item"><a class="nav-link active" href="../index.php?link=otazky.php">Časté otázky</a></li>
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


<div class="card border-primary mb-3" style="max-width: 50rem;">
  <div class="card-header">Mám obavy z kúpy jazdeného auta. Ako mi viete pomôcť?</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Auto vám buď nájdeme alebo detailne preveríme. Povedzte nám vaše nároky a požiadavky a naši kvalifikovaní auto poradcovia vám nájdu kvalitné auto s jasným pôvodom. „Jazdenku“ skontrolujú po technickej aj právnej stránke a v prípade záujmu pre vás zabezpečia najvýhodnejšie financovanie na trhu.</h5>
  </div>
</div>

<div class="card border-secondary mb-3" style="max-width: 50rem;">
    <div class="card-header">Pomôžete mi s uzatvorením zmluvy?</div>
        <div class="card-body text-secondary">
        <h5 class="card-title">Samozrejme. Ak budete mať záujem, auto poradca vám poskytne vlastnú kúpnu zmluvu bez háčikov.</h5>
        </div>
</div>

<div class="card border-success mb-3" style="max-width: 50rem;">
  <div class="card-header">Vybavíte mi dobrú cenu?</div>
  <div class="card-body text-success">
    <h5 class="card-title">Áno, čo najnižšia koncová cena vozidla je aj v našom záujme. Polovica zo zľavy je súčasťou našej odmeny a preto sme motivovaní vyjednať vám čo najvýhodnejšie podmienky.</h5>
   </div>
</div>
<div class="card border-danger mb-3" style="max-width: 50rem;">
  <div class="card-header">Vybavíte mi aj poistenie?</div>
  <div class="card-body text-danger">
    <h5 class="card-title">Zabezpečíme aj uzavretie povinného zmluvného poistenia (PZP), havrijného poistenia (HAV), pripoistenia posádky, batožiny, čelného skla, či záruku na skryté vady. </h5>
    </div>
</div>
<div class="card border-warning mb-3" style="max-width: 50rem;">
  <div class="card-header">Ak vozidlo kúpim, dáte mi na neho záruku?</div>
  <div class="card-body text-warning">
    <h5 class="card-title">Nie, my nie sme majitelia vozidla. Na vozidlo sa vzťahuje záruka, ktorú si môžete uplatniť u predávajúceho. Upravuje ju Obchodný zákonník, alebo písomná dohoda s predávajúcim.</h5>
    </div>
</div>
<div class="card border-info mb-3" style="max-width: 50rem;">
  <div class="card-header">Nemá vozidlo stočené kilometre?</div>
  <div class="card-body text-info">
    <h5 class="card-title">Stav tachometra preverujeme v spolupráci s nezávislou overovacou spol. Cebia, väčšina našich áut má servisnú knižku a 1 alebo 2 majiteľov.</h5>
    </div>
</div>

<div class="card border-dark mb-3" style="max-width: 50rem;">
  <div class="card-header">Je možné si vozidlo vyskúšať? Môže ho skontrolovať môj mechanik?</div>
  <div class="card-body text-dark">
    <h5 class="card-title">Vozidlo Vám radi predvedieme pri skúšobnej jazde, pri ktorej môžete šoférovať. Zdvihák je Vám k dispozícii, môžete si priviesť aj svojho mechanika, prípadne navštíviť Váš servis.</h5>
    
  </div>
</div>

