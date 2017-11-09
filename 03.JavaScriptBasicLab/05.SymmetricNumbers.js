function solve(number) {
    let num = Number(number[0]);
    for (let i = 1; i <= num; i++){
        let reversed =
            i.toString()
                .split("")
                .reverse()
                .join("");
        if (i < 10){
            console.log(i);
        }
        else if (i === Number(reversed)){
            console.log(i);
        }

    }


}