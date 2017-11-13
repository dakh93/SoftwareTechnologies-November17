function solve(input) {
    let numbers = input.map(Number);

    let negativeCnt = 0;
    for (let i = 0; i < numbers.length;i++){
        if (numbers[i] < 0) {
            negativeCnt++;
        }

    }
    if (negativeCnt === 1 || negativeCnt === 3){
        console.log("Negative");
    }
    else{
        console.log("Positive");
    }
}