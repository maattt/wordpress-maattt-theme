var button = document.getElementById("toggle-menu");
var modal = document.getElementById("nav-modal");

button.onclick = function(){
  if ( button.className.match(/(?:^|\s)isActive(?!\S)/)) {
    modal.className += ' hide';
    button.className = button.className.replace(/(?:^|\s)isActive(?!\S)/g , '');
  } else {
    modal.className = modal.className.replace(/(?:^|\s)hide(?!\S)/g , '');
    button.className += ' isActive';
  }
};
