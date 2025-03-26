// forEach, find, filter, some , every, reduce
// var courses = [
//     'Javascript',
//     'PHP'
// ];
var courses = new Array(10);
courses.push('Javascript', 'PHP');
console.log(courses);

// for (var i = 0; i < courses.length; ++i) {
//     console.log(courses[i]);
// }
for (var index in courses) {
    console.log(courses[index]);
}