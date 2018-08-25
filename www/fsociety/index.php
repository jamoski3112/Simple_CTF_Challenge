<?php

// Mobley Darlene wants us to check the backdoor in the CS30 server Ive changed the password and we are root user :) 
// $ssh_password = trenton;

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
<style type="text/css">
  *, *:after, *:before { box-sizing: inherit; }
html, body { height: 100%; }
html {
  box-sizing: border-box;
  font-size: 62.5%;
}
body {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  max-width: 50rem;
  margin: 0 auto;
  padding: 2rem;
  
  background-color: #111;
  color: #fff;
  
  

    font-family: 'VT323', monospace;


  font-weight: 100;
  text-align: center;
}

h1 {
  font-size: 4rem;
  letter-spacing: 0.1rem;
  user-select: none;
}

.typewrite > span.wrap::after {
  content: "|";
  color: #f61;
}
</style>  
</head>
<body>

<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">

<h1 class="typewrite" data-speed="150" data-period="2000"
    data-type='[ 
                  "“In three words I can sum up everything I have learned about life: it goes on.”", 
                  "“We love the things we love for what they are.”", 
                  "“Love is an irresistible desire to be irresistibly desired.”",
                  "“If we could not laugh we would all go insane.”", 
                  "“Freedom lies in being bold.”",
                  "“Two roads diverged in a wood, and I - I took the one less traveled by, And that has made all the difference.”",
                  "“Forgive me my nonsense as I also forgive the nonsense of those who think they talk sense.”",
                  "“Home is the place where, when you have to go there, they have to take you in.”"         
                ]'
</h1>
<script type="text/javascript">
  
  window.onload = function() {
  let elements = document.getElementsByClassName('typewrite');
  for (let i = 0; i < elements.length; ++i) {
    let messages = elements[i].getAttribute('data-type');
    let speed    = elements[i].getAttribute('data-speed');
    let period   = elements[i].getAttribute('data-period');
    if (messages) new Typewriter(elements[i], JSON.parse(messages), speed, period);
  }
};

function Typewriter(el, messages, speed, period) {
  this.el = el;
  this.messages = messages;
  this.speed  = parseInt(speed, 10)  || 200;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.loops = 0;
  this.isClearing = false;
  this.tick();
}

Typewriter.prototype.tick = function() {
  let msg  = this.messages[this.loops % this.messages.length];
  let edge = this.isClearing ? this.txt.length-1 : this.txt.length+1;
  this.txt = msg.substring(0, edge);
  this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

  var delta = this.speed/2 + Math.random() * this.speed;
  if (this.isClearing) delta /= 2;

  if (!this.isClearing && this.txt === msg) {
    this.isClearing = true;
    delta = this.period;
  } else if (this.isClearing && this.txt === '') {
    this.loops++;
    this.isClearing = false;
    delta = this.period / 2;
  }
  setTimeout(() => this.tick(), delta);
};
</script>
</body>
</html>
