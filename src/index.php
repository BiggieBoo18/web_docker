<!DOCTYPE html>
<html>
  <body>
    <!-- <h1>index.php</h1> -->
    <!-- <a href=a.php>a.php</a><br> -->
    <!-- <a href=b.php>b.php</a><br> -->
    <!-- <a href=c.php>c.php</a><br> -->
    <!-- <script> -->
    <!--   alert("XSS"); -->
      <!-- </script> -->
    <!-- <iframe src="http://data.luxuryretreats.com/?cachebust=1563179964.88"></iframe> -->
    <!-- <form method="GET"> -->
    <!--   <p>検索:<input type="text" name="q" value=""></p> -->
    <!--   <p><input type="submit" value="送信"></p> -->
    <!-- </form> -->
    <!-- <p>検索ワード:<?php echo $_GET["q"] ?></p> -->
    <!-- <p id="info"></p> -->
    <!-- <script> -->
    <!--   document.getElementById("info").textContent = "abc"; -->
      <!-- </script> -->
    <script>
      let xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
	  switch (xhr.readyState) {
          case 0:
              // 未初期化状態.
              console.log( 'uninitialized!' );
              break;
          case 1: // データ送信中.
              console.log( 'loading...' );
              break;
          case 2: // 応答待ち.
              console.log( 'loaded.' );
              break;
          case 3: // データ受信中.
              console.log( 'interactive... '+xhr.responseText.length+' bytes.' );
              break;
          case 4: // データ受信完了.
	      console.log(xhr.responseText);
              if(xhr.status == 200 || xhr.status == 304 || xhr.status == 301 || xhr.status == 302) {
                  var data = xhr.responseText; // responseXML もあり
                  console.log( 'COMPLETE! :'+data );
              } else {
                  console.log( 'Failed. HttpStatus: '+xhr.statusText );
              }
              break;
	  }
      };
      xhr.open('GET', 'http://data.luxuryretreats.com/');
      xhr.send();
      // xhr.abort();
    </script>
  </body>
</html>
