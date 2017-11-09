function solve(input) {
    let str = input[0];
    let arrayOfNums = str.split(" ").map(Number);
    let n1 = arrayOfNums[0];
    let n2 = arrayOfNums[1];
    let n3 = arrayOfNums[2];

    if (n1 + n2 === n3){
        console.log(Math.min(n1, n2) + " + " + Math.max(n1,n2) + " = " + n3);
    }
    else if (n1 + n3 === n2){
        console.log(Math.min(n1, n3) + " + " + Math.max(n1,n3) + " = " + n2);
    }
    else if (n2 + n3 === n1){
        console.log(Math.min(n3, n2) + " + " + Math.max(n3,n2) + " = " + n1);
    }
    else{
        console.log("No");
    }
}