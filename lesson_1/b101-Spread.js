// function logger({ a, b, ...rest }) {
//     console.log(a);
//     console.log(b);
//     console.log(rest);
// }

// var array1 = ['Javascript', 'Ruby', 'PHP'];
// var array2 = ['ReactJS', 'Dart'];
// var array3 = [...array2, ...array1];
// console.log(array3);

// var object1 = {
//     name: 'Javascript'
// };
// var object2 = {
//     price: 1000
// };
// var object3 = {
//     ...object1,
//     ...object2
// };
// console.log(object3);

// var defaultConfig = {
//     api: 'https://google.com.vn',
//     apiVersion: 'v1',
//     other: 'other',

// }
// var execiseConfig = {
//     ...defaultConfig,
//     api: ''
// };
// console.log(execiseConfig);

var array = ['Javascript', 'PHP', 'Ruby', 'ReactJs'];
function logger(...rest) {
    for (var i = 0; i < rest.length; i++) {
        console.log(rest[i]);
    }
}
logger(...array);