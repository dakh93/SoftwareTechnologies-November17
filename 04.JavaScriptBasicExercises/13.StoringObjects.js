function storeStudentInfo(input) {

    let students = new Array();

    for (let i = 0; i < input.length; i++){

        let currInput = input[i].split(' -> ');
        let currStud = new Object();


        currStud.name = currInput[0];
        currStud.age = Number(currInput[1]);
        currStud.grade = parseFloat(currInput[2]);
        students.push(currStud);

    }
    for (let i = 0; i < students.length; i++){
        console.log(`Name: ${students[i].name}`);
        console.log(`Age: ${students[i].age}`);
        console.log(`Grade: ${students[i].grade.toFixed(2)}`);
    }

}


