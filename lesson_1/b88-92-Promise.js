// // PRomise -Sync, -async , nỗi đau, lý thuyết , cách hoạt động , thực hành , ví dụ
// setTimeout(function () {
//     console.log(1);
// }, 1000);

// console.log(2);
// setTimeout(function () {
//     console.log(1); //viec 1
//     setTimeout(function () {
//         console.log(2); //viec 2
//         setTimeout(function () {
//             console.log(3); //viec 3
//         }, 1000);
//     }, 1000);
// }, 1000);s

// var promise = new Promise
//     ( //Excutor
//         function (resolve, reject) {
//             // Logic
//             // Thành công : resolve ()
//             // Thất bại: reject()
//             resolve();
//         }
//     );
// promise
//     .then(function () {
//         return new Promise (function(resolve)
//     setTimeout(function (){
//         resolve([1,2,3]);
//     }, 3000);
//     });
//     })
//     .then(function (data) {
//         console.log(data);
//     })
//     .catch(function (data) {
//         console.log(error);
//     })
//     .finally(function () {
//         console.log('Done!');
//     });

// function sleep(ms) {
//     return new Promise(function (resolve) {
//         setTimeout(resolve, ms);
//     });
// }
// sleep(1000)
//     .then(function () {
//         console.log(1);
//         return sleep(1000);
//     })
//     .then(function () {
//         console.log(2);
//         return new Promise(function (resolve))
//         {
//         reject('Co loi!');
//     });
// })
//     .then(function () {
//         console.log(3);
//         return sleep(1000);
//     });

// var promise = Promise.reject('Error!');

// promise
//     .then(function (result) {
//         console.log('result: ', result);
//     })
//     .catch(function (err) {
//         console.log('err: ', err);
//     });
var promise1 = new Promise(function (resolve) {
    setTimeout(function () {
        resolve([1]);
    }, 2000);
}
);
var promise2 = new Promise
    (function (resolve) {
        setTimeout(function () {
            resolve([2, 3]);
        }, 5000);
    }
    );
Promise.all([promise1, promise2])
    .then(function (result) {
        var result1 = result[0];
        var result2 = result[1];
        console.log(result1.concat(result2));
    });