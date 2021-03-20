<?php
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Data pasada
?>
<!DOCTYPE html>
<html>
  <head>
  <script type='text/javascript' src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
  <link rel="shortcut icon" href="./img/favicon.png" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous" />
  <link href="https://tmccomunicacao.com.br/feiraonline/css/global.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha256-WqU1JavFxSAMcLP2WIOI+GB2zWmShMI82mTpLDcqFUg=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
    integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  </head>

  <body>
  <a href="#" aria-hidden="true" data-toggle="modal" data-target="#HelpDeskModal" class="tmcHelp"><i
        class="fa fa-2x fa-commenting-o" aria-hidden="true"></i>Precisa de ajuda?</a>

  <div class="modal fade" id="HelpDeskModal" tabindex="-1" aria-labelledby="HelpDeskModal" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title font-weight-bold text-center w-100 text-dark" id="exampleModalLabel">Information and Help Desk</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div style="width:1000px;height:500px;margin:0 auto !important;">
          <iframe style="width:1000px;height:450px;margin:0 auto;" frameborder="0" src="https://html5-chat.com/chat/25952/5f3fea13ba0f0/<?php echo $_GET['user']; ?>/&startRoom=51144"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

  <section class="main-call">

    <script src="https://tmccomunicacao.com.br/feiraonline/salappts/script.js"></script>
    <script>
    function closeWindow() {
        window.close();
      }
      // var spinner = $('#loader');
      // spinner.hide();
      </script>


    <img class="logo-feira" src="https://tmccomunicacao.com.br/feiraonline/img/logoAmazing.png" alt="Thai Latin Virtual Travel Trade Meet" srcset="">
    <h1 class="text-title">PRO MAGNO  <span style="border:4px solid #FFF;line-height:90px;padding:0 12px;">Online</span></h1>
        <h2 class="text-subtitle" style="font-size: 2rem;">O seu evento com mais alcance!</h2>

      <section class="movie-area">
    <video id="localVideo" autoplay muted></video>
    <video id="remoteVideo" autoplay></video>
    </section>

    <!-- <div class="time">This appointment ends in: <span id="time"></span> minutes!</div> -->
    <p class='instruct text-uppercase'>Aguarde o outro participante abrir o vídeo, e dar inicio a chamada.</p>
    </section>

    <script>
      var inst = $('.instruct');
      // inst.addClass('blue');
      setTimeout(function() {
          inst.addClass('hidee');
      }, 5000);


    </script>

    <!--  -->
    <script>


    if (!navigator.mediaDevices || !navigator.mediaDevices.enumerateDevices) {
  console.log("This browser does not support the API yet");
}

let checking=["audioinput","videoinput"];
let onlyHas=[];
navigator.mediaDevices.enumerateDevices()
.then((devices)=> {
  let haveAllDevices=true;
  devices.forEach((device)=>{
    onlyHas.push(device.kind);
    if(!(device.kind==checking[0] || device.kind==checking[1])){
    haveAllDevices=false;
    }
   });
   //do something about ...

   console.log('cheguei...');



})
.catch(function(err) {
  console.log(err.name + ": " + err.message);
});
    </script>
    <!--  -->

    <script>
      window.setTimeout("alert('Your Meeting Time Ends in 1 Minute.');", 360000);
      // window.setTimeout("spinner.show();", 100);
      window.setTimeout("spinner.show();", 420000);

      function startTimer(duration, display) {
        <?php $t=explode(':',$_GET['start']);
        //$nn=date('Y-m-d');
         $nn='2020-'.$_GET['day'];
        ?>
        var hr=<?php echo $t[0]; ?>,
        mn=<?php echo $t[1]; ?>,
        start = Date.parse('<?php echo $nn; ?> '+hr+':'+mn+':00'),
          diff,
          minutes,
          seconds;
          console.log(start);
        function timer() {
          // get the number of seconds that have elapsed since
          // startTimer() was called
          diff = duration - (((Date.now() - start) / 1000) | 0);

          // does the same job as parseInt truncates the float
          minutes = (diff / 60) | 0;
          seconds = (diff % 60) | 0;

          minutes = minutes < 10 ? "0" + minutes : minutes;
          seconds = seconds < 10 ? "0" + seconds : seconds;

          display.textContent = minutes + ":" + seconds;

          if (diff <= 0) {
            // add one second so that the count down starts at the full duration
            // example 05:00 not 04:59
            start = Date.now() + 1000;
            // spinner.show();
          }
        };
        // we don't want to wait a full second before the timer starts
        timer();
        setInterval(timer, 1000);
      }

      window.onload = function () {
        // var fiveMinutes = 60 * .30,
        var fiveMinutes = 60 * 7,
          display = document.querySelector('#time');
        startTimer(fiveMinutes, display);
      };
    </script>

  </body>

</html>