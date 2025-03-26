Array.prototype.filter2 = function (callback) {
    for (var index in this) {
        if (this.hasOwnProperty(index)) {
            callback(this[index], i, this);
        }
    }
}
var courses = new Array(100000);

var filtersCourses = courses.filter2(function (course, index, array) {
    console.log(course);
    return course.coin > 700;
});
console.log(filtersCourses);