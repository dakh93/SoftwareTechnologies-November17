function printValueOfKey(input) {
    let dict =  new Object();
    for (let i = 0; i < input.length - 1; i++){
        let currInput = input[i].split(' ');

        let currKey = currInput[0];
        let currValue = currInput[1];

        if (!dict[currKey]){
            dict[currKey] = currValue;
        }
        else{
            dict[currKey] = currValue;
        }
    }
    let searchedKey = input[input.length - 1];

    if (dict[searchedKey]){
        console.log(dict[searchedKey]);
    }
    else{
        console.log("None");
    }
}
