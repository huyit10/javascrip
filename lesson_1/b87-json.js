// 1. Event listener --> OK
// 2.JSON
// 3.Fetch
// 4.DOM location
// 5.Local storage
// 6.Session storage
// 7.Coding convention
// 8. Best Practices
// 9.Mistakes
// 10. Performance 

// 1. Là 1 định dạng dữ liệu ( chuỗi)
// 2. JavaScript Object Notation
// 3.JSON: Number , Boolean , Null , Array
// Object
// Mã hóa / Giải mã 
// Encode/ decode
//Stringify/ Parse

// var json = '{"name":"Huy","age":28}';
// var Object = JSON.parse(json);
// console.log(JSON.parse(json));
console.log(JSON.stringify({
    name: 'Huy',
    age: 17,
    test: function () { }
}));