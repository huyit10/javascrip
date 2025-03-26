// call back là hàm , truyền qua đối số . dc gọi lại trong hàm nhận đối số
Array.prototype.map2 = function (callback) {
    var output = [], arrayLength = this.length;
    for (var i = 0; i < arrayLength; ++i) {
        var result = callback(this[i], i);
        output.push(result);
    }
    return output;
}
var courses = [
    'Javascript',
    'PHP',
    'Ruby'
];
var htmls = courses.map2(function (course) {
    return `<h2>${course}</h2>`;
});
console.log(htmls.join(''));
// courses.map(function (course) {
//     console.log(course);
// });