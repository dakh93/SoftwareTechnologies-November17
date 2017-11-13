function objectToJSONString(input) {
    let finalObject = new Object();
    for(let i = 0; i < input.length; i++){
        let currInput = input[i].split(" -> ");

        let currKey = currInput[0];
        let currValue = currInput[1];
        if (currKey === 'age' || currKey === 'grade'){
            currValue = Number(currValue);
        }

        finalObject[currKey] = currValue;
    }

    finalObject = JSON.stringify(finalObject);
    console.log(finalObject);

}

let input = ['name -> Angel', 'age -> 13', 'date -> 423'];
objectToJSONString(input);