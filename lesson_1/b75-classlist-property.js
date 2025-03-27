//ClassList property
//add
//contains
//remove
//toggle
var boxElement =
    document.querySelector('.box');
// boxElement.classList.add('red');
// console.log(boxElement.classList.add('red'));
setInterval(() => {
    boxElement.classList.toggle('red');
}, 1000);