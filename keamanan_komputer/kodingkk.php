
<style>
button {
  background-color: #4285F4; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>


<html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="712411443073-8le22ppfkbss0ngjg2lifqvdjti87okn.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body><center><hr>
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    

    <button onclick="signOut()">SignOut</button></center>


    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        var id_token = googleUser.getAuthResponse().id_token;
        var email = profile.getEmail();
        var name = profile.getName();
        var img = profile.getImageUrl();
        var id = profile.getId();
        document.getElementById("data").innerHTML = "<hr>"+name+"<br>"+email+"<br>"+id+"<br>"+id_token;
        ////ini adalah proses olah datanya dengan php
        ////id_token dan email diolah dengan metode GET
        ////data ini diperiksa apakah emailnya sudah member atau bukan (jadi bikin memang data member sebelumnya)
        ////ada pesan yg berbeda kalau emailnya member atau bukan
        ////semua yang login, member ataupun bukan harus di catat
        ////berikut ini adalah contoh GET datanya ke confirm.php
        ///window.location.replace("https://biston.web.id/confirm.php?id="+id_token+"&email="+email);

      }


    </script>

<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
      ///location.reload(); 
      window.location.replace("https://tim1-sistemterdistribusi.com/kodingkk.php");
      console.log('User signed out.');
    });
  }
</script>



<p id="data"></p>


  </body>
</html>