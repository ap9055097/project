<?php
echo "Hello LINE BOT<br>";

//$con = 'ss';


// mysqli_query($conn,"INSERT INTO input_message (message,receiver) 
// VALUES ('test','jobmyway')");
?>
<head>
</head>
<body>
<div class="fb-customerchat" page_id="185117042183190"></div>
ssss
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