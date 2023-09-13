// console.log('fizzbuzz')

//******** TEST ********************/
function assertEquals(one, two) {
    
    if(one == two) {
        console.log("V ✔️");
    } else {
        console.log("X ❌");
    }

}

function shouldReturnOineIfNumberIsOne() {
    assertEquals("1", fizzBuzz(1, 1));
}

function shouldReturnTwoIfNumberIsTwo() {
    assertEquals("2", fizzBuzz(2, 2));
}

function shouldReturnFizzIfNumberIsThree() {
    assertEquals("Fizz", fizzBuzz(3, 3));
}

function shouldReturnFizzIfNumberIsSix() {
    assertEquals("Fizz", fizzBuzz(6, 6));
}

function shouldReturnBuzzIfNumberIsFive() {
    assertEquals("Buzz", fizzBuzz(5, 5));
}

function shouldReturnBuzzIfNumberIsTen() {
    assertEquals("Buzz", fizzBuzz(10, 10));
}

function shouldReturnFizzBuzzIfNumberIsFiveteen() {
    assertEquals("FizzBuzz", fizzBuzz(15, 15));
}

function shouldReturnFizzBuzzIfNumberIsThirdteen() {
    assertEquals("FizzBuzz", fizzBuzz(30, 30));
}

function shouldReturn12IfNumberIs1to2() {
    assertEquals("12", fizzBuzz(1, 2));
}

function shouldReturn12FizzIfNumberIs1to3() {
    assertEquals("12Fizz", fizzBuzz(1, 3));
}

function shouldReturn12Fizz4IfNumberIs1to5() {
    assertEquals("12Fizz4Buzz", fizzBuzz(1, 5));
}

function shouldReturn12Fizz4BuzzFizz78Buzz9FizzBuzz11Fizz1314FizzBuzzIfNumberIs1to15() {
    assertEquals("12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz", fizzBuzz(1, 15));
}

//***** CODE ************/

function fizzBuzz(minNumber,maxNumber) {
    return evaluateNumbers(minNumber, maxNumber);
}

function evaluateNumbers(minNumber,maxNumber) {
    let result = "";
    while (minNumber <= maxNumber)
        result += evaluateNumber(minNumber++);
    return result;
}

function evaluateNumber(number) {
    if (number % 15 == 0)
        return "FizzBuzz";
    if (number % 3 == 0)
        return "Fizz";
    if (number % 5 == 0)
        return "Buzz";
    return number.toString();
}

//**** START TEST********/
shouldReturnOineIfNumberIsOne()
shouldReturnTwoIfNumberIsTwo()
shouldReturnFizzIfNumberIsThree()
shouldReturnFizzIfNumberIsSix()
shouldReturnBuzzIfNumberIsFive()
shouldReturnBuzzIfNumberIsTen()
shouldReturnFizzBuzzIfNumberIsFiveteen()
shouldReturnFizzBuzzIfNumberIsThirdteen()
shouldReturn12IfNumberIs1to2()
shouldReturn12FizzIfNumberIs1to3()
shouldReturn12Fizz4IfNumberIs1to5()
/****** START fizzBuzz */
fizzBuzz(2,2);