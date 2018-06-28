<?php
echo "Hello LINE BOT<br>";

//$con = 'ss';


// mysqli_query($conn,"INSERT INTO input_message (message,receiver) 
// VALUES ('test','jobmyway')");
?>
<head>
</head>
<body>
<div class="fb-customerchat" page_id="c801e6ccfb7ca96869663ece097ae54a"></div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '214049609220025',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.0'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</body>