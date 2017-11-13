function JSONParse(input) {

    for (let i = 0; i < input.length; i++){
        let currObj = input[i];
        let parsed = JSON.parse(currObj);
        console.log(`Name: ${parsed.name}`);
        console.log(`Age: ${parsed.age}`);
        console.log(`Date: ${parsed.date}`);
    }

}

