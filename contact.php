<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Indosat Ooredoo</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/skin.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
</head>

<body id="wrapper">

<section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 top-header-links">
                    <ul class="contact_links">
                        <li><i class="text"></i></li>
                        <li><i class="text"></i></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="social_links">
                        <!-- <li><i class="text"></i></li>
                        <li><i class="text"></i></li> -->
                    </ul>
                </div>
            </div>
        </div>
        </div>

    </section>

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
                    <a class="navbar-brand" href="#">
                        <a href="index.html"><img src="img/logo.png"></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                            <li><a href="index.html">Beranda</a></li>
                            <li><a href="about.html">Tentang</a></li>
                            <li><a href="features.html">Topik</a></li>
                            <li><a href="login.html">Jadwal</a></li>
                            <li><a href="faq.html">Pertanyaan</a></li>
                            <li class="active"><a href="contact.php">Kontak</a></li>
                            <li><a href="registration.php">Daftar</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!--/.nav-ends -->
    </header>
    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
            <h2>KONTAK</h2>
            </div>
        </div>
        <div class="page_info">
                <div class="container">
                </div>
            </div>
    </section>
    <section id="contact-page">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Kontak</h2>
                <p class="subheading">Silahkan isi kontak dibawah ini</p>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nama *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>No. Telepon</label>
                            <input type="number" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subjek *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Pesan *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-default submit-button">Kirim Pesan <i class="fa fa-caret-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="overlay">
            <div class="gmap-area">
                <div class="container">
                    <div class="row">
                            <div class="col-sm-7 map-content">
                            <ul class="row">
                                <li class="col-sm-20">
                                    <address>
									<h5>Head Office</h5>
									<p>Indosat ooredoo <br>
									Jalan Medan Merdeka Barat,<br>
									No.21, RT.02/RW.03,<br>
									Gambir, Kota Jakarta Pusat,<br>
									DKI Jakarta, Indonesia. </p><br>
									<p>Email : hackdata@Indosatooredoo.com</p>
								</address>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                            <p> Copyright © 2019 - PT Indosat Tbk.</p>
                    </div>

                    <div class="col-sm-4 offset-sm-4 text-right">
                            <p><a href="registration.php">Daftar </a> | <i class="fa fa-envelope"></i> hackdata@indosatooredoo.com</li></p>
                    </div>
                                                
                 </div>
            </div>
    </section>
</body>

</html>