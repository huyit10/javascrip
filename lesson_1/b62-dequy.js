// 1.Xác định điểm dừng 
//2. Logic handle => Tạo ra điểm dừng 


// function countDown(num) {
//     if (num > 0) {
//         console.log(num);
//         return countDown(num - 1)
//     }
// }
// countDown(3);

// function loop(start, end, cb) {
//     if (start <= end) {
//         cb(start);
//         return loop(start + 1, end, cb);
//     }
// }
// var array = ['Javascript', 'PHP', 'Ruby'];
// loop(0, array.length, function (index) {
//     console.log(array[index]);
// });

function giaiThua(number) {
    var output = 1;
    for (var i = number; i > 0; i--) {
        output = output * i;
    }
    return output;
}
console.log(giaiThua(6));