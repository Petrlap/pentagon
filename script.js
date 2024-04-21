function shuffleElements() {
  var container = document.querySelector(".box");
  for (var i = container.children.length; i >= 0; i--) {
    container.appendChild(container.children[(Math.random() * i) | 0]);
  }
}
