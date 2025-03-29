function highlight([first, ...strings], ...values) {
    return values.reduce(
        (acc, curr) => [...acc, `<span>${curr}`
        [first]
        ]
    );
}
//Hoc lap trinh
var brand = 'F8';
var course = 'Javascript!';

const html = highlight`Hoc lap trinh ${course} tại ${branch}`
console.log(html);