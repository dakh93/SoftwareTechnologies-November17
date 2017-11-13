function PrintLines(input) {

    for (let i = 0; i < input.length; i++){
        let currLine = input[i];
        if(currLine === "Stop") return;

        console.log(currLine);
    }

}