// Callback?
//Là hàm (function) dc truyền qua đối số 
//khi gọi hàm khác
// 1. là hàm
// 2. đc truyền qua đối số 

function myFunction(param) {
    if (typeof param === 'function') {
        param('Học lập trình');
    }
}
function myCallback(value) {
    console.log('Value: ', value);
}

myFunction(123);