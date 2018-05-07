<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= $site_name ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="<?= $this->css('bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= $this->css('mdb.css') ?>">
    
    <link rel="stylesheet/less" href="<?= $this->css('app.less') ?>">
    <?= $this->section('styles') ?>
    <script type="text/javascript" src="<?= $this->script('less.js') ?>"></script>

</head>
<body>

    <?php if ('home' === $this->getCurrentRoute()): ?>
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Micro Framework</h1>
            <p class="lead">A simple Micro Framework by OSW3.</p>
            <a class="btn btn-primary btn-lg" href="<?= $this->url("documentation") ?>" role="button">Documentation</a>
        </div>
    </div>
    <?php endif; ?>

    <!-- Header -->
    <header class="main-header sticky-top">
        
        <nav class="navbar navbar-expand-lg main-navbar">
            <div class="container">

                <a class="navbar-brand" href="<?= $this->url("home") ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="32px" viewBox="0 -0.703 150 32" xml:space="preserve">
                        <defs></defs>
                        <g>
                            <g>
                                <path style="fill:#414042;" d="M28.209,9.918c-3.004-1.781-6.759-2.67-11.265-2.67c-4.475,0-8.245,0.89-11.311,2.67 C1.877,12.104,0,15.213,0,19.242c0,4.06,1.831,7.152,5.492,9.276c3.066,1.78,6.836,2.67,11.312,2.67 c4.505,0,8.276-0.874,11.312-2.623c3.755-2.155,5.632-5.264,5.632-9.323C33.747,15.213,31.9,12.104,28.209,9.918z M25.768,25.707 c-2.347,1.375-5.304,2.062-8.871,2.062c-3.599,0-6.571-0.687-8.918-2.062c-2.565-1.53-3.848-3.686-3.848-6.465 c0-2.811,1.267-4.983,3.801-6.513c2.347-1.374,5.335-2.062,8.965-2.062c3.661,0,6.634,0.671,8.918,2.015 c2.534,1.531,3.801,3.717,3.801,6.56C29.617,22.021,28.334,24.177,25.768,25.707z"></path>
                                <path style="fill:#414042;" d="M53.366,17.789l-6.712-0.844 c-3.817-0.468-5.726-1.389-5.726-2.764c0-1.125,0.939-2.014,2.816-2.671c1.564-0.531,3.363-0.796,5.397-0.796 c3.474,0,5.945,0.469,7.416,1.406c1.346,0.875,2.019,2.312,2.019,4.311h4.318c0-6.153-4.694-9.23-14.082-9.23 c-2.785,0-5.272,0.438-7.463,1.312c-3.129,1.218-4.693,3.108-4.693,5.669c0,2.03,1.08,3.607,3.239,4.732 c1.564,0.78,3.833,1.358,6.806,1.733c2.096,0.219,4.177,0.438,6.243,0.655c3.912,0.656,5.867,1.672,5.867,3.046 c0,2.28-2.957,3.42-8.871,3.42c-3.755,0-6.423-0.523-8.003-1.569s-2.37-2.741-2.37-5.084h-4.271 c0,6.778,4.866,10.168,14.597,10.168c3.13,0,5.758-0.344,7.886-1.031c3.536-1.155,5.303-3.123,5.303-5.903 C63.082,20.757,59.843,18.57,53.366,17.789z"></path>
                                <path style="fill:#414042;" d="M98.848,26.082L87.066,7.81h-4.976l5.115,7.637l-6.289,10.635L69.089,7.81h-4.928 l15.16,22.864h3.239l7.087-11.526l7.604,11.526h3.332L114.43,7.81h-4.693L98.848,26.082z"></path>
                                <path style="fill:#97ba00;" d="M144.034,14.571 c3.285-1.343,4.929-3.514,4.929-6.513c0-3.248-2.065-5.528-6.195-6.84C140.232,0.406,137.072,0,133.286,0 c-4.381,0-7.948,0.594-10.701,1.78c-4.037,1.781-6.055,5.091-6.055,9.933h4.177c0-2.874,0.985-4.967,2.957-6.278 s5.241-1.968,9.81-1.968c2.848,0,5.272,0.298,7.275,0.891c2.69,0.812,4.036,2.046,4.036,3.701c0,3.218-3.614,4.826-10.842,4.826 h-4.412v3.468h4.317c7.886,0,11.828,1.874,11.828,5.622c0,2.03-1.549,3.577-4.646,4.639c-2.378,0.812-5.163,1.219-8.354,1.219 c-3.442,0-6.337-0.453-8.684-1.359c-3.035-1.188-4.552-2.951-4.552-5.295v-2.342h-4.178v1.733c0,4.029,2.128,6.966,6.383,8.809 c3.036,1.28,6.79,1.92,11.266,1.92c4.067,0,7.603-0.593,10.607-1.779c4.161-1.625,6.242-4.139,6.242-7.544 C149.761,18.538,147.852,16.071,144.034,14.571z"></path>
                            </g>
                        </g>
                    </svg>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="<?= $this->url("signin") ?>">Signin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $this->url("signup") ?>">Signup</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>
    <!-- End - Header -->
    
	
    <!-- .main-content -->
    <div class="main-content">
		<?= $this->section('main_content') ?>
    </div>
    <!-- End .main-content -->


    <!-- Footer -->
    <footer class="main-footer">
        <div class="footer-links">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <h4>About</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">F.A.Q.</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h4>Legal</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Legal terms</a></li>
                            <li><a href="#">Term of use</a></li>
                            <li><a href="#">Licence</a></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h4>Documentation</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Installation</a></li>
                            <li><a href="#">Configuration</a></li>
                            <li><a href="#">Routing</a></li>
                            <li><a href="#">Models</a></li>
                            <li><a href="#">Views</a></li>
                            <li><a href="#">Controllers</a></li>
                            <li><a href="#">Assets</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal">
			<div class="container">
				<a href="http://osw3.net/" target="_blank"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="10px" viewBox="0 -0.703 150 32" xml:space="preserve">
						<defs></defs>
						<g>
							<g>
								<path style="fill:#ffffff;" d="M28.209,9.918c-3.004-1.781-6.759-2.67-11.265-2.67c-4.475,0-8.245,0.89-11.311,2.67 C1.877,12.104,0,15.213,0,19.242c0,4.06,1.831,7.152,5.492,9.276c3.066,1.78,6.836,2.67,11.312,2.67 c4.505,0,8.276-0.874,11.312-2.623c3.755-2.155,5.632-5.264,5.632-9.323C33.747,15.213,31.9,12.104,28.209,9.918z M25.768,25.707 c-2.347,1.375-5.304,2.062-8.871,2.062c-3.599,0-6.571-0.687-8.918-2.062c-2.565-1.53-3.848-3.686-3.848-6.465 c0-2.811,1.267-4.983,3.801-6.513c2.347-1.374,5.335-2.062,8.965-2.062c3.661,0,6.634,0.671,8.918,2.015 c2.534,1.531,3.801,3.717,3.801,6.56C29.617,22.021,28.334,24.177,25.768,25.707z"></path>
								<path style="fill:#ffffff;" d="M53.366,17.789l-6.712-0.844 c-3.817-0.468-5.726-1.389-5.726-2.764c0-1.125,0.939-2.014,2.816-2.671c1.564-0.531,3.363-0.796,5.397-0.796 c3.474,0,5.945,0.469,7.416,1.406c1.346,0.875,2.019,2.312,2.019,4.311h4.318c0-6.153-4.694-9.23-14.082-9.23 c-2.785,0-5.272,0.438-7.463,1.312c-3.129,1.218-4.693,3.108-4.693,5.669c0,2.03,1.08,3.607,3.239,4.732 c1.564,0.78,3.833,1.358,6.806,1.733c2.096,0.219,4.177,0.438,6.243,0.655c3.912,0.656,5.867,1.672,5.867,3.046 c0,2.28-2.957,3.42-8.871,3.42c-3.755,0-6.423-0.523-8.003-1.569s-2.37-2.741-2.37-5.084h-4.271 c0,6.778,4.866,10.168,14.597,10.168c3.13,0,5.758-0.344,7.886-1.031c3.536-1.155,5.303-3.123,5.303-5.903 C63.082,20.757,59.843,18.57,53.366,17.789z"></path>
								<path style="fill:#ffffff;" d="M98.848,26.082L87.066,7.81h-4.976l5.115,7.637l-6.289,10.635L69.089,7.81h-4.928 l15.16,22.864h3.239l7.087-11.526l7.604,11.526h3.332L114.43,7.81h-4.693L98.848,26.082z"></path>
								<path style="fill:#97ba00;" d="M144.034,14.571 c3.285-1.343,4.929-3.514,4.929-6.513c0-3.248-2.065-5.528-6.195-6.84C140.232,0.406,137.072,0,133.286,0 c-4.381,0-7.948,0.594-10.701,1.78c-4.037,1.781-6.055,5.091-6.055,9.933h4.177c0-2.874,0.985-4.967,2.957-6.278 s5.241-1.968,9.81-1.968c2.848,0,5.272,0.298,7.275,0.891c2.69,0.812,4.036,2.046,4.036,3.701c0,3.218-3.614,4.826-10.842,4.826 h-4.412v3.468h4.317c7.886,0,11.828,1.874,11.828,5.622c0,2.03-1.549,3.577-4.646,4.639c-2.378,0.812-5.163,1.219-8.354,1.219 c-3.442,0-6.337-0.453-8.684-1.359c-3.035-1.188-4.552-2.951-4.552-5.295v-2.342h-4.178v1.733c0,4.029,2.128,6.966,6.383,8.809 c3.036,1.28,6.79,1.92,11.266,1.92c4.067,0,7.603-0.593,10.607-1.779c4.161-1.625,6.242-4.139,6.242-7.544 C149.761,18.538,147.852,16.071,144.034,14.571z"></path>
							</g>
						</g>
					</svg></a>&nbsp;&nbsp;©&nbsp;2009&nbsp;-&nbsp;2018
            </div>
		</div>
    </footer>
    <!-- End - Footer -->
    
      
    <!-- Modals -->
    <?= $this->section('modals') ?>
    <!-- End - Modal -->


    <!-- Scripts Vendor -->
    <script type="text/javascript" src="<?= $this->script('jquery.js') ?>"></script>
    <script type="text/javascript" src="<?= $this->script('popper.js') ?>"></script>
    <script type="text/javascript" src="<?= $this->script('bootstrap.js') ?>"></script>
    <script type="text/javascript" src="<?= $this->script('mdb.js') ?>"></script>

    <!-- Customs Scripts -->
    <?= $this->section('scripts') ?>

</body>
</html>