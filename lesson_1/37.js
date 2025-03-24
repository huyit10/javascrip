var course = {
    name: 'Javascrip',
    coin: 0
}
// if (course.coin > 0) {
//     console.log(`${course.coin} Coins`);
// } else {
//     console.log('Free')
// }
var result = course.coin > 0 ? `${course.coin} Coins` : "Free";
console.log(result);
var a = 1;
var b = 2;

var c = a > 0 ? a : b;