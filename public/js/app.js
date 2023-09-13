// debug console.log('fizzbuzz')

// var, let, const 
var name = "john";
let age = "john";
const jobs = "programmer";
//array
const langages = ['PHP','JS','CSS', 'SQL','HTML'];
// if else 
if(langages[0] == 'PHP') 
{
    console.log('PHP is funny');
} else {
    console.log('Other langage is fun')
}
// for , while 
for(let i=0; i<langages.length; i++)
{
    console.log(langages[i]);
}
// function 
function assertEquals(value1,value2)
{
    console.log(value1 === value2);
    return value1 === value2;
}

assertEquals("text","text");

// objet
const user = {
    firstname:"john",
    age:25,
    job:'programmer',
    say: function() {
        return 'hello';
    }
}

console.log(user.say());

