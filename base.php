<?php.require.'prosses.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>base control</title>

<style>
.button1 {
  position: absolute;
  top: 35%;
  left: 46%;
  background-color: powderblue;
  border: none;
  color: black;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
.button2{
  position: absolute;
  top: 50%;
  left: 45%;
 background-color: powderblue;
 border: none;
  color: black;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
 display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
.button3{
  position: absolute;
  top: 35%;
  left: 35%;
  background-color:powderblue;
  border: none;
  color: black;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
.button4{
position: absolute;
  top: 35%;
  left: 57%;
background-color:powderblue;
  border: none;
  color: black;
  padding:  15px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
.button5{
  position: absolute;
  top: 20%;
  left: 45%;
  background-color:powderblue;
  border: none;
  color: black;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  display: block;
  font-size: 16px;
  cursor: pointer;
}
</style>
</head>

<body background="https://png.pngtree.com/thumb_back/fw800/back_our/20190628/ourmid/pngtree-simple-atmosphere-blue-technology-panel-background-1-image_281089.jpg">
<form action="prosses.php" method="post">
<h3 style="font-size:200%;text-align:center;color:white;font-family:courier;">Base control interface</h3>
<p>
<input type="submit" value="Stop" name = "stop" class ="button1">

<input type="submit" value="Backward" name = "backward" class = "button2">

<input type="submit" value="Left" name = "left" class = "button3">

<input type="submit" value="Right" name = "right" class = "button4">

<input type="submit" value="Forward" name = "forward" class = "button5">
</p>
</form>
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "94daf2d7-b132-430e-8b04-201b8d1c9a5d", // The ID of this integration.
      region: "eu-de", // The region your integration is hosted in.
      serviceInstanceID: "c073d229-6af3-4089-958d-25bba7d5010d", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
</body>
</html>