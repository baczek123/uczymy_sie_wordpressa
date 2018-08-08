<!doctype html>
<html>
    <head>
		<title>uczymysiewardpressa</title>
		<meta charset="UTF-8">
		<!--link do stylow bootstrapowych ktore sa lokalnie na dysku-->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
		<!--link do stylow bootstrapowych ktore sa sciagane gdzies z siei -> bo jest na pocztku https -->
		<!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"  crossorigin="anonymous"-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"	integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- dodanie ściezki do pliku css za pomocą metody get_template_directory_uri
				najlepiej jednak przenieść to do funkcji niż wielkokrotnie importować style w html -->
		<!--link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/my_css/index.css?ver=<?php echo time(); ?>"-->
		<!-- import całego heada -->
		<?php wp_head(); ?>
    </head>
    <body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<button type="button" class="btn btn-default navbar-btn "><i class="fa fa-home"></i></button>
				<div class="navbar-brand"> 
					<span>Malta trip</span>
				</div>
				</div>

				<div class="collapse navbar-collapse">

				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#shop">Start</a></li>
					<li><a href="#first">O Firmie</a></li>
					<li><a href="#secend">Oferta</a></li>
					<li><a href="#third">Kontakt</a></li>
				</ul>
				</div>
			</div>
		</div>

		<div class="main">
			<p>Na Maltę wybrałem się w Kwietniu 2018r i 
				chciałbym podzielić się z wami moimi przemyśleniami na temat wyprawy na tą piękną wyspę. 
				Planując podróż na Maltę zwłaszcza na własną rękę, warto odpowiednio zaplanować sobie miejsce noclegu.
				Zdecydowanie polecam okolice Valetty gdzie kilka miejscowości tak naprawdę tworzy jedno duże miasto i właściwie nie widać przejścia z jednej miejscowości do drugiej. 
				Bardziej przypomina to dzielnice w Polskim mieście. Stolicą Malty jest Valletta miejsce najlepsze na chodzenie wąskimi, 
				zabytkowymi i klimatycznymi uliczkami. 
				Jeśli lubicie chodzić promenadą wzdłuż wybrzeża najlepszym miejscem będzie  St. Julian's.  
				Jeśli chcecie mieć blisko do najbardziej imprezowej dzielnicy z dużą ilością barów i dyskotek zdecydowanie polecam Paceville.
				Natomiast typowym portem skąd odpływają wszystkie wycieczki statkami, 
				i jest piękny widok na Vallette ( która jest pięknie oświetlona nocą ) jest Sliema.</p>
			<img src="<?php echo get_template_directory_uri();?>/img/IMAG1741.jpg" width="1000" height="700">

			<img src="<?php echo get_template_directory_uri();?>/img/IMAG1677_wm.jpg" width="840" height="480">
			<p id="first">  Malta posiada wiele cudownych miejsc bardzo czşsto opisywanych w przewodnikach jako atrakcja wyspy. Jednak miejscem, kt__re zrobi__o na mnie naprawdş du__e wra__enie ( a nie jest zbyt popularne i nie jest wymieniane jako g____wna atrakcja Malty ) jest St. Peters Pool. Dotrzeş mo__na tam jadşc do miejscowo__ci Marsaxlokk. Jest to wioska rybacka s__ynşca z kolorowych ____dek rybackich z wymalowanymi oczami na ich burtach. Jednak __eby doj__ş do St. Peter?s Pool trzeba opu__ciş miasteczko i przej__ş na drugş czş__ş p____wyspu znajdujşcego siş przy tej miejscowo__ci. St. Peter?s Pool jest ma__ş zatoczkş wydrş__onş  w skale gdzie fale w majestatyczny spos__b rozbijajş siş o ska__y. Bşdşc w okresie w kt__rym tam by__em, spotka__em w tym miejscu bardzo ma__ş ilo__ş turyst__w. Niewielu ludzi albo wie albo decyduje siş i__ş w to miejsce, co sprawia __e w bardzo du__ym spokoju mo__na eksplorowaş tş zatokş. </p>
			<img src="<?php echo get_template_directory_uri();?>/img/IMAG1684_wm.jpg" width="840" height="480">
			<p id="secend">Bşdşc na Malcie warto te__ odwiedziş poboczne wyspy Gozo i Comino. Ja osobi__cie wybra__em siş tam wraz z wycieczkş kupionş w porcie, kt__ra gwarantowa__a zwiedzanie Wyspy Gozo i wolny czas na B__şkitnej Lagunie na wyspie Comino. Jednak teraz po tym jak skorzysta__em z tej opcji nie polecam jej. Wyspa Gozo jest na tyle ciekawa __e warto zwiedzaş jş przez ca__y dzie__. P__ynşş wraz z wycieczkş statkiem, po dop__ynişciu na wyspş jeste__my wiezieni z jednego miejsca na drugie podczas trzy godzinnej objazd__wki. W ten spos__b widzimy najwişksze atrakcje Gozo jednak sş tam miejsca, w kt__rych lepiej spşdziş wişcej czas. Do niedawna najbardziej rozpoznawalnym miejscem na tej wyspie by__o Azure Window, jednak w marcu 2017r. roku ten pişkny __uk skalny zawali__ siş do morza. Z Malty na Gozo mo__na przep__ynşş na w__asnş rşkş promem z Cirkewwa Ferry Terminal. 
			Podobnie jest z odwiedzeniem Blue Lagune, na wyspie Comino. Podczas wycieczki ca__odniowej kiedy zwiedzamy obie wyspy, na pobyt na Comino mamy tylko p____tora godziny. Blue Lagune jest cudownym miejscem w kt__rym zdecydowanie warto spşdziş wişcej czasu.  Codziennie przyp__ywa tam bardzo du__o turyst__w, od rana zajmujş najlepsze miejsca wypoczynkowe. Warto wybraş siş w to miejsce wcze__niej, a p__ynş tam wodne taks__wki kt__rymi mo__na dotrzeş rankiem i wr__ciş w momencie kiedy uznamy __e mamy na to ochotş.</p>
			<img src="<?php echo get_template_directory_uri();?>/img/IMAG1691_wm.jpg" width="840" height="480">
			<p id="third">Wbrew og__lnej opinii uwa__am __e Malta nie jest Tanim miejscem do wypoczynku. Mo__na tam tanio dolecieş i znale__ş tani nocleg jednak ceny wy__ywienia sş do__ş wysokie. Je__li chcemy zje__ş w restauracji gdzie__ w pobli__u atrakcji turystycznej to musimy siş liczyş z tym, __e cena dania obiadowego bşdzie wynosi__a od 17 euro w g__rş. Do tego dochodzi jeszcze koszt jakiego__ picia i cena wzrasta do ponad 20 euro dla jednej osoby. Je__li chcecie trochş zaoszczşdziş warto poszukaş restauracji z dala od miejsc uczşszczanych przez turyst__w. Mi uda__o siş znale__ş bardzo mi__y lokal uczşszczany przez mieszka__c__w wyspy, gdzie serwowane by__y potrawy typowo Malta__skie a ceny by__y na poziomie 8 - 12 euro. Wişc warto przej__ş siş po r____nych dzielnicach i sprawdziş co oferujş lokalne restauracje.  
			Na Malcie jest jeszcze bardzo du__o atrakcji kt__re zdecydowanie trzeba odwiedziş i zobaczyş. Warto siş tam wybraş przynajmniej na ca__y tydzie__ __eby doceniş tş wyspş. Mam nadziejş ze te kilka wskaz__wek kt__re tutaj zaprezentowa__em pozwolş wam lepiej zaplanowaş waszş wyprawş.<p>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div id="f1_conteiner">
							<div id="f1_card" class="shadow">
								<div class="front face">
									<img src="<?php echo get_template_directory_uri();?>/img/IMAG1677_wm.jpg" width="400" height="220">
								</div>
								<div class="back face center">
									<p>This is nice for exposing more information about an image.</p>
									<p>Any content can go here.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4"><img src="<?php echo get_template_directory_uri();?>/img/IMAG1684_wm.jpg" width="400" height="220"></div>
					<div class="col-md-4"><img src="<?php echo get_template_directory_uri();?>/img/IMAG1691_wm.jpg" width="480" height="220"></div>
				</div>
				<div class="col-md-4"><img src="<?php echo get_template_directory_uri();?>/img/IMAG1684_wm.jpg" width="480" height="240"></div>
				<div class="col-md-4"><img src="<?php echo get_template_directory_uri();?>/img/IMAG1691_wm.jpg" width="480" height="240"></div>
			</div>
			<div class="imgheader"> 
				<div class="imgbackground">
						<li>jdnkjnsfgknxflkzbnzxjfbnkcnklfnkljlknklnjkxzcn<li>
						<li>nnlkngklncxkjbnkjxznblkxzcnbl jnkjzcxnjkbnzcxkjb<li>
				</div>
			</div>
		</div>
    </body>
	<footer>
		<div class="footercolor">
			<li>
				<button type="button" class="btn btn-default" aria-label="Left Align">
					<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					<p> Poznań jakiś tam adres </p>
				</button>
				<button type="button" class="btn btn-default" aria-label="Left Align">
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					<p> Adres @email <p>
				</button>
				<button type="button" class="btn btn-default" aria-label="Left Align">
					<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					<p> +48 505 728 427 <p>
				</button>
			</li>
			<fieldset>
				<legend>Dane do kontaktu</legend>
				<li>
					<label><input type="text" placeholder="Imię"></label>
					<label><input type="text" placeholder="Nazwisko"></label>
					<label><input type="text" placeholder="Adres @email"></label>
				<li>
			</fieldset>	
		</div >
	</footer>
</html>
