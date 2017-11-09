function solve(input) {
    let stringOfNums = input.join(" ");
    let nums = stringOfNums.split(" ").map(Number);
    nums = nums.sort(function (a,b) {return b- a});

    for(let i = 0;i < nums.length; i++){
        console.log(nums[i]);
        if (i === 2) break;

    }



}