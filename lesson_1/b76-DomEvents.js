// DOM events
// 1. Attribute events
// 2. assign event using the element node

var h1Elements =
    document.querySelector('h1');
for (var i = 0; i < h1Elements.length; ++i) {
    h1Elements[i].onclick = function (e) {
        console.log(e.target);
    }
}
