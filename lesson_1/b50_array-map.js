var courses = [
    {
        id: 1,
        name: 'Javascript',
        coin: 0
    },
    {
        id: 2,
        name: 'HTML, CSS',
        coin: 1
    },
    {
        id: 3,
        name: 'Ruby',
        coin: 1
    },
    {
        id: 4,
        name: 'PHP',
        coin: 200
    },
    {
        id: 5,
        name: 'ReactJS',
        coin: 1
    },
    {
        id: 6,
        name: 'Ruby',
        coin: 10
    },
    {
        id: 7,
        name: 'Ruby',
        coin: 12
    }
];
// courses.forEach(function (courses, index) {
//     console.log(index, courses);
// });

// var isFree = courses.every(function (course, index) {
//     console.log(index);
//     return course.coin === 0;
// });
// console.log(isFree);

// var course = courses.filter(function (course, index) {
//     return course.name === 'Ruby';
// });
// console.log(course);

function courseHandler(course, index, originArray) {
    // console.log(course)
    return {
        id: course.id,
        name: `Khoa hoc: ${course.name}`,
        coin: course.coin,
        coinText: `Gia: ${course.coin}`,
        index: index,
        originArray: course,
    };
}
var newCourses = courses.map(courseHandler);
console.log(newCourses);
