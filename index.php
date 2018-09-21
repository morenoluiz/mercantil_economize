<?php 
include 'controler-index.php';
?>	
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
		<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    	<title> Supermercado Economize </title>
    	<link rel="icon" href="images/124f4be2-10b3-4a06-bbf3-0e3c272c835b.png">
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
        
	  	<div id="Welcome">
	  		<!---Start navigation Bar -->
	    	<nav class="navbar navbar-expand-lg navbar fixed-top  navbar-light bg-light">
		 		<a class="navbar-brand" href="#Welcome">
    				<img src="images/124f4be2-10b3-4a06-bbf3-0e3c272c835b.png" width="50" height="50" class="d-inline-block" alt=""> Supermercado Economize
		 		</a>
		 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    		<span class="navbar-toggler-icon"></span>
		 		</button>
			  	<div class="collapse navbar-collapse" id="navbarText">
			    	<ul class="navbar-nav ml-auto">
			      		<li class="nav-item">
			        		<a class="nav-link" href="#Welcome">Bem-Vindo</a>
			      		</li>
					   
					    <li class="nav-item">
					    	<a class="nav-link" href="#Menu">Menu</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#Reservation">Horário de funcionamento</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#OurLocation">Nossa localização</a>
					    </li>
					     <li class="nav-item">
					    	<a class="nav-link" href="#Restaurant">Quem somos?</a>
					    </li>
					    
				    </ul>
				</div>
			</nav>
			<!--- End Navigation Bar -->
			<!--- Start Carousel -->
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
				    	<img class="d-block w-100 img-fluid img-slider" src="images/7-produtos-para-cortar-enxugar-carrinho.jpg" alt="First slide">
				    	<div class="carousel-caption">
						    <h2>Bem Vindo!</h2>
							<p>...</p>
						</div>
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100 img-fluid img-slider" src="images/1509381206_image2.jpg" alt="Second slide">
				      	<div class="carousel-caption">
						    <h2>Tradicional Mercantil do Maracanaú</h2>
							<p>...</p>
						</div>
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100 img-fluid img-slider" src="images/maxresdefault.jpg" alt="Third slide">
				      	<div class="carousel-caption">
						    <h2></h2>
							<p>...</p>
						</div>
				    </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
			</div>
		</div>
			<!--- End of Carousel -->
			<!--- Restaurant-->
		<div class="container">
		 	<div class="row" id="Restaurant">
	    		<div class="col navMenu">
	     		 	<h2 class="text-center" >~ Supermercado ~</h2>
	    		</div>
  			</div>
  			<div class="row bg-light" >
  				<div class="col-md-6">
  					<h3>Localizacão</h3>
  					<p>Proximo ao IFCE Maracanaú.</p>
  					<h5>Experiência Única</h5>
  					<p>O melhor e mais barato mercantil do Brasil, com todos os produtos a sua disposição funcionando mais de 12 horas por dia e com o preço que cabe no seu bolso.</p>
  				</div>
  				<div class="col-md-6" data-aos="fade-up">
  					<img class="img-fluid" src="images/img.jpg">
  				</div>
  			</div>
  			<div class="row bg-light"><br></div>
  			<div class="row bg-light">
  				<div class="col-md-6 order-md-1 order-2" data-aos="fade-up">
  					<img class="img-fluid " src="images/sistemas-estacionamento-superficie.jpg">
  				</div>
  				<div class="col-md-6 order-md-12 order-1">
  					<h3>Ambiente</h3>
  					<p>Ambiente super agradável semelhante  ao conforto de sua casa </p>
  					<h5>Localidade :</h5>
  					<p>Próximo ao melhor centro tecnológico de maracanaú IFCE e também de dois postos de gasolina , temos um amplo estacionamento e vagas para todos totalmente gratuito.</p>
  				</div>
  			</div>
  			<!--- End of Restaurant -->
  			<!--- Start of Menu-->
			<div class="row" id="Menu">
				<div class="col navMenu">
	     		 	<h2 class="text-center" >~ Menu ~</h2>
				</div>
			</div>
			<div class="row bg-light">
				
                
                
                <?php foreach($listadepromocao as $pr) { ?>
                    <div class="col-md-4" data-aos="slide-up">
                        <div class="card view zoom">
                            <img class="card-img-top img-fluid " src="img/<?php echo $pr['imagem']; ?>">
                            <div class="card-body">
                                <h5 class="card-title">~ <?php echo $pr['descricao']; ?> ~</h5>
                                <ul class="list-group list-group-flush">
                                    
                                    <?php 
                                        $listadeprodutos = $pr['produtos']; 
                                                       
                                        foreach($listadeprodutos as $produto) { ?>

                                            <li class="list-group-item"><?php echo $produto['descricao'].' '.$produto['preco'].' '.$produto['medida']; ?> </li>
    <!--
                                            <li class="list-group-item">Coxa ou Sobrecoxa 21,90Kg</li>
                                            <li class="list-group-item">Mão De Vaca 25,00Kg</li>
                                            <li class="list-group-item">Carne Moida 10,59KG</li>
                                            <li class="list-group-item">File De Frango 9,00Kg</li>
    -->
                                    <?php } ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>

                <?php } ?>
                
<!--
                
				<div class="col-md-4" data-aos="slide-up">
					<div class="card">
  						<img class="card-img-top img-fluid " src="images/ee466074deeb4bfc80faf56ac253e6aa.jpg">
					  	<div class="card-body">
					  		<h5 class="card-title">~ Promoção de Frutas e Verduras Segunda e Terça ~</h5>
					    	<ul class="list-group list-group-flush">
							    <li class="list-group-item">Banana R$0,65 Un</li>
							    <li class="list-group-item">Goiaba R$4,40 kg</li>
							 	<li class="list-group-item">Maça R$2,50 kg</li>
							 	<li class="list-group-item">Tomate R$8,00 kg</li>
							 	<li class="list-group-item">Batata R$9,00 kg</li>
							</ul>
					  	</div>
					</div>
				</div>
				<div class="col-md-4" data-aos="slide-up">
					<div class="card">
  						<img class="card-img-top img-fluid" src="images/DSC03111.jpg">
					  	<div class="card-body">
					  		<h5 class="card-title">~ Promoção de Bebidas Sexta, Sabádo e Domingo ~</h5>
					    	<ul class="list-group list-group-flush">
							    <li class="list-group-item">Fanta R$9,50</li>
							    <li class="list-group-item">Coca-cola R$10,50</li>
							 	<li class="list-group-item">Guaraná R$5,00</li>
							 	<li class="list-group-item">Cerveja R$1,39</li>
							 	<li class="list-group-item">Vinho Branco R$150,00</li>
							</ul>
					  	</div>
					</div>
				</div>
			</div>
			<div class="row bg-light">
				<div class="col-md-4" data-aos="slide-up">
					<div class="card view zoom">
  						<img class="card-img-top img-fluid " src="images/onde-comprar-gondolas-supermercado-02.jpg">
					  	<div class="card-body">
					  		<h5 class="card-title">~ Promoções de Produtos todos os dias da semana ~</h5>
					    	<ul class="list-group list-group-flush">
							    <li class="list-group-item">Arroz R$1,99Kg</li>
							    <li class="list-group-item">Feijão R$3,50Kg</li>
							 	<li class="list-group-item">Macarrão R$1,39Kg</li>
							 	<li class="list-group-item">Vitamilho R$1,00KG</li>
							 	<li class="list-group-item">Nescau R$1,50Kg</li>
							</ul>
					  	</div>
					</div>
				</div>
-->
			<!--- End of Menu -->
			<!--- Start of Reservation-->
			
			<div class="row" id="Reservation">
				<div class=" col-lg-12 reserve-container" data-aos="fade-up">
					<img class="img-fluid image-reserve" src="images/slider3.jpg">
					<div class="reserve-text col-lg-12 ">
						<h1 class="text-center">Horário De Funcionamento</h1>
						<div class="row">
							
							<div class="col">
							   
							    <h5 class="text-center">05:30 AM- 21:00 PM</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			
			<div class="row" id="OurLocation">
				<div class="col navMenu">
					<h2 class="text-center">~ Nossa Localizacão ~</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.7057761076517!2d-38.614273885230325!3d-3.8731186450100448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7530a92e2d5b3%3A0xb87a68ffa960b5e0!2sAv.+Cont%C3%B4rno+Norte%2C+Maracana%C3%BA+-+CE!5e0!3m2!1spt-BR!2sbr!4v1531154665347" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="row">
				<div  class="col navMenu" style = "padding-left: 40px ;">
					<h3>Endereço:</h3>
					<p>Av. Contôrno Norte - Jereissati I, Maracanaú - CE, 61900-410 </p>
					<h3>Email:</h3>
					<p>mercantileconomize2018@gmail.com</p>
				</div>
				
			</div>
			<!--- End of Our Location -->
			<div class="row footer bg-light">
				<div class="col">
					<p class="text-center">Follow us: <a class="social-icon" href="https://www.facebook.com/?sk=welcome"><i class="fab fa-facebook"></i></a> <a class="social-icon" href="https://www.instagram.com/mercantileconomize2018/"><i class="fab fa-instagram"></i></a></p>
				</div>
				<div class="col">
					<p class="text-center">Copyright &copy; 2018</p>
				</div>
				<div class="col">
					<p class="text-center">Powered by: <a href="https://www.instagram.com/mercantileconomize2018/">Mercantil Economize</a></p>
				</div>
			</div>
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<script type="text/javascript" src="js/map.js"></script>
		<script type="text/javascript" src="js/smooth-scroll.js"></script>
		<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
		<script type="text/javascript" src="js/image-effect.js"></script>
         
            
        </script> 
  	</body>
</html>
