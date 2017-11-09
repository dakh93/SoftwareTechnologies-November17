function solve(input) {
    let allTowns = {};
    for (let jason of input){
        let obj = JSON.parse(jason);
        if (!(obj.town in allTowns)){
            allTowns[obj.town] = 0;
        }
        allTowns[obj.town] += obj.income;
    }
    let towns = Object.keys(allTowns).sort();

    for (let town of towns) {
        console.log(`${town} -> ${allTowns[town]}`);
    }

}