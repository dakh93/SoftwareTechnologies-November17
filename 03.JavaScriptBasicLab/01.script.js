function sumNumbers() {
    let num1 = document.getElementById("num1").value;
    let num2 = document.getElementById("num2").value;

    let sumOfNumbers = Number(num1) + Number(num2);

    document.getElementById("result").innerHTML = sumOfNumbers;

}