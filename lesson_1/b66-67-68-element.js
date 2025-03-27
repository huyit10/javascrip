// HTML DOM
//1. Element: ID , class, tag,
//css selector, html collection
// 2. Attribute
// 3.Text
//1. getElementById
// 2. getElementsByClassName
//3 . getElementsBytagname
//4.querySelector
//5.querySelectorAll
//6. HTML collection
//7. documenet.write
var headings =
    document.querySelectorAll('heading');
for (var i = 0; i < headings.length; i++) {
    console.log(headings[i])
}

