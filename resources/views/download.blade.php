<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ __('home.metaDescription') }}">
    <meta name="keywords" content="{{ __('home.metaKeys') }}"/> 
    <meta name="robots" content="index, follow">
    <meta name="author" content="mczerwinski.com">
    <link rel="icon" href="favicon.ico">

    <title>{{ $title }} download as mp3 file for free!</title>

    <!-- Bootstrap core CSS -->
    <link href="/_home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/_home/css/style.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110086488-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-110086488-2');
    </script>
  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center">
            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" version="1.1" id="Capa_1" width="20" height="20" viewBox="0 0 57 57" style="enable-background:new 0 0 57 57;" xml:space="preserve" width="512px" height="512px">
            <g>
                    <path d="M55.332,6.643c-1.02-0.438-2.156-0.235-2.952,0.523L41,17.669V8.944C41,6.218,38.782,4,36.056,4H4.944   C2.218,4,0,6.218,0,8.944v23.265C0,34.851,2.149,37,4.791,37h14.775l-6.762,14.579c-0.232,0.501-0.015,1.096,0.486,1.328   C13.426,52.971,13.569,53,13.71,53c0.377,0,0.738-0.215,0.908-0.579l6.514-14.044l6.514,14.044C27.815,52.785,28.176,53,28.553,53   c0.141,0,0.284-0.029,0.42-0.093c0.501-0.232,0.719-0.827,0.486-1.328L22.698,37h13.129C38.679,37,41,34.679,41,31.826v-8.002   l11.32,10.819c0.531,0.529,1.213,0.808,1.917,0.808c0.353,0,0.71-0.069,1.057-0.212C56.331,34.812,57,33.809,57,32.683v-23.5   C57,8.058,56.361,7.084,55.332,6.643z M39,31.826C39,33.576,37.577,35,35.827,35H21.169c-0.002,0-0.004,0-0.006,0h-0.061   c-0.003,0-0.007,0-0.01,0H4.791C3.252,35,2,33.748,2,32.209V8.944C2,7.321,3.321,6,4.944,6h31.112C37.679,6,39,7.321,39,8.944   V31.826z M55,32.683c0,0.477-0.357,0.661-0.467,0.706c-0.136,0.057-0.488,0.152-0.803-0.165L41.221,21.27   c-0.146-0.147-0.224-0.344-0.221-0.553c0.003-0.209,0.087-0.402,0.228-0.536l12.52-11.556c0.169-0.161,0.346-0.208,0.495-0.208   c0.13,0,0.239,0.037,0.301,0.063C54.65,8.526,55,8.713,55,9.183V32.683z" fill="#FFFFFF"/>
                    <path d="M18.137,19.723C18.683,18.772,19,17.673,19,16.5c0-3.584-2.916-6.5-6.5-6.5S6,12.916,6,16.5S8.916,23,12.5,23   c1.687,0,3.221-0.651,4.377-1.709l1.416,1.416C18.488,22.902,18.744,23,19,23s0.512-0.098,0.707-0.293   c0.391-0.391,0.391-1.023,0-1.414L18.137,19.723z M12.5,21C10.019,21,8,18.981,8,16.5s2.019-4.5,4.5-4.5s4.5,2.019,4.5,4.5   c0,0.615-0.125,1.201-0.35,1.736l-1.943-1.943c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l2.161,2.161   C14.661,20.564,13.635,21,12.5,21z" fill="#FFFFFF"/>
            </g>
            <strong style="margin-left:5px;">{{ __('home.title') }}</strong>
          </a>
		  <!--
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
		  -->
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">{{ __('home.titleContent') }}</h1>
          <p class="lead text-muted">{{ __('home.content') }}</p>
          <form action="{{ route('download') }}" method="get" id="download">
                <input type="text" class="form-control" name="yt" id="yt" value="https://www.youtube.com/watch?v={{ $id }}">
                <button type="submit" class="btn btn-danger">{{ __('home.buttonDownload') }}</button>
	  </form>
        </div>
        <div class="yt-download">  
            <h2>Download {{ $title }} as mp3 file for free!</h2>
            <iframe width="250px" height="60px" scrolling="no" style="border:none;" src="https://www.download-mp3-youtube.com/api/?api_key=MzAzNzA2MjQ4&format=mp3&video_id={{ $id }}"></iframe>
        </div>
          
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
            <h1>{{ __('home.lastDownload') }}</h1>
            <div class="row last-download">
                @foreach(\App\Link::getLastLink() as $link)
                    <a href="{{ route('download.page', ['id' => $link->yt_id]) }}" style="font-size: @php echo rand(14,24); @endphppx">{{ $link->title }}</a> &nbsp; 
                @endforeach
            </div>
        </div>
      </div>

    </main>
	
<footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">{{ __('home.backToTop') }}</a>
        </p>
        <p>{{ __('home.footer') }} &copy; @php echo date('Y'); @endphp <a href="https://yt-mp3converter.com" >www.yt-mp3converter.com</a></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="/_home/js/bootstrap.min.js"></script>
  </body>
</html>