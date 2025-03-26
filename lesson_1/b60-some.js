Array.prototype.some2 = function (callback) {
    var output = false;
    for (var index in this) {
        if (this.hasOwnProperty(index)) {
            if (callback(this[index], index, this)) {
                output = true;
                break;
            };
        }
    }
    return output;
}
var courses = [
    {
        name: 'Javascript',
        coin: 680,
        isFinish: false,
    },
    {
        name: 'PHP',
        coin: 860,
        isFinish: false,
    },
    {
        name: 'Ruby',
        coin: 980,
        isFinish: false,
    },
];
var result = courses.some2(function (courses, index) {
    return courses.isFinish;
});
console.log(result);