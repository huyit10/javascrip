// DOM style
var boxElement = document.querySelector('.box');


Object.assign(boxElement.style, {
    width: '200px',
    height: '100px',
    backgroundColor: 'green',
});
console.log(boxElement.style.width);