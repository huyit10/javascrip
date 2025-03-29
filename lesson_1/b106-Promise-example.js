var users = [
    {
        id: 1,
        name: 'Kien Dam',
    },
    {
        id: 2,
        name: 'Kien Dam',
    },
    {
        id: 3,
        name: 'Kien Dam',
    },

];
var comments = [
    {
        id: 1,
        users_id: 1,
        content: 'Huy22:'
    },
    {
        id: 1,
        user_id: 1,
        content: 'Huy'
    }
];
function getComments() {
    return new Promise(function (resolve) {
        var result = users.filter(function (user) {
            return userIds.includes(user.id)
        });
        setTimeout(function ()){
            resolve(comments);
        }, 1000);

}
// getComments()
//     .then(function (comments) {
//         var userIds = comments.map();
//         console
//     });
getUsersByIds([userIds])
    .then(function (users) {
        console.log(users);
    }
    data.comments.forEach(function (comments))
    var html = '';
commentBlock.innerHTML = html;
    );
