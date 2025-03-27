// 1. Event listener
// 2. JSON
// 3.Fetch
// 4.DOM location
// 5.Local storage
// 6.Session storage
// 7.Coding convention
// 8.Best Practices
// 9.Mistakes
// 10. Performance

// var btn = document.getElementById('btn');
// // btn.onclick = function () {
// //     //Viec 1 
// //     console.log('Viec 1');
// //     //Viec 2 
// //     console.log('Viec 2');
// //     //Viec 3
// //     alert('Viec 3');
// // }
// // setTimeout(function () {
// //     btn.onclick = function () { }
// // }, 3000
// // );
// btn.addEventListener('click', function (e) {
//     console.log(Math.random());
// });


var btn = document.getElementById('btn');
function viec1() {
    console.log('Viec 1');
}
btn.addEventListener('click', viec1);
btn.addEventListener('click', viec2);

setTimeout(function () {
    btn.removeEventListener('click', viec1);
}, 3000);
