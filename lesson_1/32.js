function User(firstName, lastName, avatar) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.avatar = avatar;

    this.getName = function () {
        return `${this.firstName} ${this.lastName}`
    }
}
var author = new User('huy', 'anh', 'Avatar');
var user = new User('Thien', 'Hung', 'Avatar');

author.title = 'huy_Ba';
user.comment = 'HCM';


console.log(author.getName());
console.log(user.getName());