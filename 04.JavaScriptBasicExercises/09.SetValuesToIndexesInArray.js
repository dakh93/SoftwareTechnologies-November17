function setElementAtIndex(input) {
    let arrLenght = Number(input[0]);
    let array =
        Array.apply(null, Array(arrLenght))
            .map(Number.prototype.valueOf, 0);

    for (let i = 1 ; i <= input.length - 1; i++){
        let currString = input[i].split(' ');
        let index = currString[0];
        let value = currString[2];
        array[index] = value;

    }

    for (let i = 0 ; i < array.length; i++){
        console.log(array[i]);
    }

}