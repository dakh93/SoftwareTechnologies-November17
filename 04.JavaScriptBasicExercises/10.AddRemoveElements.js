function AddOrRemoveElements(input) {

    let arr = new Array();
    for (let i = 0; i < input.length; i++){
        let currCommand = input[i].split(' ');
        let command = currCommand[0];
        let numberOrIndex = currCommand[1];

        if (command === "add"){
            arr.push(numberOrIndex);
        }
        else if(command === "remove"){
            if (arr.length - 1 < numberOrIndex) continue;
            else{
                arr.splice(numberOrIndex,1);
            }
        }
    }
    for (let i = 0; i < arr.length; i++){
        console.log(arr[i]);
    }


}