// var array = ['Javascript', 'PHP', 'Ruby'];
// var [a, b, ...rest] = array;
// console.log(a);
// console.log(rest);

// var course = {
//     name: 'Javascript',
//     price: 1000,
//     image: 'image-address',
// };
// var { name, description = 'default descript' } = course;

// console.log(name);
// console.log(description);
function logger(...params) {
    console.log(params);
}
console.log(logger(1, 2, 3, 4, 5, 6, 7, 8));