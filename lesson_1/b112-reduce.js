Array.prototype.reduce2 = function (callback, result) {
    let i = 0
    if (arguments.length < 2) {
        i = 1
        result = this[0]
    }
    for (let i = 0; i < this.length; i++) {
        result = callback(result, this[i], i, this)
    }
    return result
}
const numbers = [1, 2, 3, 4, 5]
const result = numbers.reduce2((total, number, index, array) => {
    console.log(total, number, index)
    return total + number
})

console.log(result)