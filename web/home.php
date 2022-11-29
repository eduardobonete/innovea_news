<!DOCTYPE html>
<html>
<head>
	<title>Innovea Test</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link href="./web/assets/style.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
	<script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<header class="navbar-light navbar-sticky header-static">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="/">
					<img class="logo" src="https://innovea.com.br/wp-content/uploads/2020/09/Logo-Original-Transparente-Amplo-2.png" data-src="https://innovea.com.br/wp-content/uploads/2020/09/Logo-Original-Transparente-Amplo-2.png">			
				</a>

				<div class="nav flex-nowrap align-items-center">
					<div class="nav-item dropdown dropdown-toggle-icon-none nav-search">
						<a class="nav-link dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="bi bi-search fs-4"> </i>
						</a>
						<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
							<form class="input-group">
								<input class="form-control border-success" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-success m-0" type="submit">Search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div id="app">
			<section class="pt-4 pb-0 card-grid">
				<div class="container">
					<div class="row g-4">
						<div class="col-lg-6" v-for="(n, k) in news.slice(0,2)">
							<div class="card card-overlay-bottom card-grid-lg card-bg-scale tst" :style="[imgBack(n.urlToImage), `background-position:center left`, `background-size: cover`  ]" v-if="k <= 1">
								<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
									<div class="w-100 mt-auto">
										<a href="#" class="badge text-bg-danger mb-2">
											<i class="fas fa-circle me-2 small fw-bold"></i>{{ n.source.name }}
										</a>
										<h2 class="text-white h2">
											<a :href="n.url" target="blank" class="btn-link stretched-link text-reset">
												{{n.title}}
											</a>
										</h2>
										<p class="text-white">{{ n.description }}</p>
										<span class="ms-3">by {{ n.author }}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="position-relative">
				<div class="container">
					<div class="row g-4">
						<div class="col-lg-9">
							<div class="mb-4">
								<h2 class="m-0"><i class="fa fa-hourglass me-2"></i>Highlights</h2>
								<p>Latest breaking news, pictures, videos, and special reports</p>
							</div>
							<div class="row">
								<div class="col-lg-12 p-3 m-1" v-for="(n, k) in news.slice(2, news.length)">
									<div class="card p-3">
										<div class="row">
											<div class="col-lg-2">
												<img :src="n.urlToImage" class="img-thumbnail" alt="...">
											</div>
											<div class="col-lg-10">
												<h5 class="h5">
													<a :href="n.url" target="blank" class="btn-link stretched-link text-reset">{{n.title}}</a>
												</h5>
												<p class="text">{{ n.description }}</p>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="mb-4">
							<h2 class="m-0"><i class="fa fa-hourglass me-2"></i>Last news</h2>
							<p>Latest news</p>
						</div>
						<div class="col-lg-12 p-3 m-1" v-for="(n, k) in news.slice(2, news.length)">
							<div class="card p-3">
								<div class="row">
									<div class="col-md-12">
										<img style="width: 100%" :src="n.urlToImage">
									</div>
									<div class="col-lg-12">
										<h5 class="h5">
											<a :href="n.url" target="blank" class="btn-link stretched-link text-reset">{{n.title}}</a>
										</h5>
										<p class="text">{{ n.description }}</p>
									</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</header>
</body>
<script type="text/javascript" src="./web/assets/functions.js"></script>
</html>