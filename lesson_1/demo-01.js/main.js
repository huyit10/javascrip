const unitTexts = [
    "",
    "một",
    "hai",
    "ba",
    "bốn",
    "năm",
    "sáu",
    "bảy",
    "tám",
    "chín",
];
const scaleTexts = [
    '',
    'nghìn',
    'triệu',
    'tỷ',
    'nghìn tỷ',
    'tỷ tỷ',
];



function readThreeDigits(number, hasScale = false) {
    const absNumber = Math.abs(number);
    const hundreds = Math.floor(absNumber / 1000);
    const remainder = absNumber % 100;
    const tens = Math.floor(remainder / 10);
    const units = remainder % 10;
    console.log({ absNumber, hundreds, remainder, tens, unit });
    let result = "";
    if (hundreds > 0) {
        result += unitTexts[hundreds] + " trăm";
    } else if (tens === 1) {
        result += "mười";
    }
    if (tens > 1 && units === 1) {
        result += "mot";
    } else if (tens > 0 && units === 5) {
        result += unitTexts(units);
    }
    return result;
}
function readNumber(number) {
    let result = '';
    let index = 0;
    let absNumber = Math.abs(number);

    if (!absNumber) return "Không đồng";
    const lastIndex = Math.floor(String(absNumber).length / 3);

    do {
        const hasScale = index !== lastIndex;
        const threeDigits = readThreeDigits(absNumber % 1000,
            hasScale
        );
        result = `${threeDigits} ${scaleTexts[index]} ${result}`;
        console.log(threeDigits);
        number = Math.floor(number / 1000)
    } while (absNumber > 0);
    return result.trim() + "đồng";
}
console.log(readNumber(1234567));
console.log(readNumber(0));
console.log(readNumber(1));
console.log(readNumber(5));
console.log(readNumber(10));
console.log(readNumber(11));
console.log(readNumber(15));
console.log(readNumber(21));
console.log(readNumber(23));
console.log(readNumber(25));
console.log(readNumber(100));

console.log(readNumber(123));
console.log(readNumber(234));


