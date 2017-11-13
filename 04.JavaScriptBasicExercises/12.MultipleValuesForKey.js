function printValueOfKey(input) {
    let dict =  new Object();
    for (let i = 0; i < input.length - 1; i++){
        let currInput = input[i].split(' ');

        let currKey = currInput[0];
        let currValue = currInput[1];

        if (!dict[currKey]){
            dict[currKey] = new Array();

        }
        dict[currKey].push(currValue);
    }
    let searchedKey = input[input.length - 1];

    if (dict[searchedKey]){
        for(let i = 0; i < dict[searchedKey].length; i++){
            console.log(dict[searchedKey][i]);
        }
    }
    else{
        console.log("None");
    }
}

