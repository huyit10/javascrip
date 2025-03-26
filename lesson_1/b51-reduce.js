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
// //Bien luu tru
// var totalCoin = 0;
// //Lap qua cac phan tu
// for (var course of courses) {
//     // thuc hien viec luu tru
//     totalCoin += course.coin;
// }
// console.log(totalCoin);
// var i = 0;

// function coinHandler(accumulator, currentValue, currentIndex) {
//     i++;
//     var total = accumulator + currentValue.coin;
//     console.table({
//         'run: ': i,
//         'Bien tich tru: ': accumulator,
//         'Gia khoa hoc: ': currentValue.coin,
//         'Tich tru dc: ': total
//     });
//     return total;
// }

var totalCoin = courses.reduce((a, b) =>
    a + b.coin, 0
);
console.log(totalCoin);
