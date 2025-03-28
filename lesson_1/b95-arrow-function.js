// const logger = log => console.log(log);
// logger('Message...');
const Course = (name, price) => {
    this.name = name;
    this.price = price;
}
const jsCourse = new Course('Javascript', 1000);
console.log(jsCourse);