// const obj = {
//     name: 'Alice',
//     cat: {
//         name: 'Dinah',
//         cat2: {
//             name: 'Dinah2',
//             cat3: {
//                 name: 'Dinah3',
//             }
//         }
//     }
// };


// if (obj.cat?.cat2?.cat3) {
//     console.log(obj.cat.cat2.cat3.name);

const obj = {
    getName(value) {
        console.log(value);
    }
}
obj.getName(123);