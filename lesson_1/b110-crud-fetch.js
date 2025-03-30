var listCoursesBlock =
    document.querySelector('#list-courses')
var courseApi = "http://localhost:3000/course"
function start() {
    getCourses(renderCourses);
    handleCreateForm();
}
start();
function getCourses() {
    fetch(courseApi)
        .then(function (reponse) {
            return reponse.json();

        })
        .then(callback);
}
function getCourses(callback) {
    fetch(courseApi)
        .then(fun)
}
function renderCourses(course) {
    var listCoursesBlock =
        document.querySelector('#list-courses')
    var htmls = courses.map(function (course) {
        return `
        <li>
        <h4>${course.name}</h4>
        <p>${course.description}</p>
        </li>
        `;
    });
    listCoursesBlock.innerHTML = htmls.join('');
}
function createCourse(data) {
    var options = {
        method: 'POST',
        body: JSON.stringify(data)
    };
    fetch(courseApi, options)
        .then(function (reponse) {

        })
}
function handleCreateForm() {
    var name = document.querySelector('input[name="name').value;

    var name = document.querySelector('input[name="description]');
    console.log(name);
}