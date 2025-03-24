function User(firstName, lastName, avatar) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.avatar = avatar;

    this.getName = function () {
        return `${this.firstName} ${this.lastName}`;
    }
}
User.prototype.className = 'F1';
User.prototype.getClassName = function () {
    return this.className;
}
var user = new User('huy', 'anh', 'Avatar 1');
var user2 = new User('Thien', 'Hung', 'Avatar 2');


console.log(user.className);
console.log(user2.getClassName());