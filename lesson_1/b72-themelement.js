// 1. Element
//2. Attribute
// 3. Text

// innerHTML, outerHTML
var boxElement = document.querySelector('.box');
boxElement.outerHTML = '<span>Test</span>';
console.log(boxElement.innerHTML);
// console.log(document.querySelector('h1').innerText)