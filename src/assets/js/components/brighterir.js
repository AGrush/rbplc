window.addEventListener('message', function(event) {

  var frames = document.getElementsByTagName('iframe');

  for (var i = 0; i < frames.length; i++) {

      if (frames[i].contentWindow === event.source) {

          jQuery(frames[i]).height(event.data);

          break;

      }

  }

});   