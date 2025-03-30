const cars = ['BMW', 'Porsche', 'Mercedes']
const isSuccess = true
const output = `
<h1>${isSuccess && 'Thành công'}</h1>
<ul>
${cars.map(car => `<li>${car}</li>`)}
    </ul>
    `
console.log(output)