var emailKey = "email";
var myInfo = {
    name: 'Anh huy',
    age: 28,
    address: 'Hcm, VN',
    [emailKey]: 'leanhhuy.it@gmail.com',
    getName: function () {
        return this.name;
    }
};

console.log(myInfo.getName());