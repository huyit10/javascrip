var postApi =
    'https://google.com.vn'
fetch(postApi)
    .then(function (response) {
        return response.json();
    })
    .then(function (posts) {
        console.log(posts);
    })
    .catch(function (err) {
        console.log(err);

    });