function assertEquals(one, two) {
    const result = one === two ? "V ✔️" : "X ❌";
    console.log(result);
    return result;
}

function assertTrue(bool) {
    const result = bool === true ? "V ✔️" : "X ❌";
    console.log(result);
    return result;
}

function assertFalse(bool) {
    const result = bool === false ? "V ✔️" : "X ❌";
    console.log(result);
    return result;
}

function assertSame(one,two) {
    const result = one === two ? "V ✔️" : "X ❌";
    console.log(result);
    return result;
}

function assertContains(search,arr) {
    const result = arr.includes(search) ? "V ✔️" : "X ❌";
    console.log(result);
    return result;
}

function assertContainsOnly(type, arr) {
    const result = arr.every(function(element) {
        switch (type) {
            case 'string':
                return typeof element === 'string';
            case 'int':
                return Number.isInteger(element);
            case 'float':
                return typeof element === 'number' && !Number.isNaN(element) && !Number.isInteger(element);
            default:
                return false;
        }
    });

    const message = result ? "V ✔️" : "X ❌";
    console.log(message);
    return result;
}

function assertCount(number, arr) {
    const result = number == arr.length ? "V ✔️" : "X ❌";
    console.log(result);
    return result;
}

function assertEmpty(arr) {
    const result = arr.length === 0 ? "V ✔️" : "X ❌";
    console.log(result);
    return result;
}

function assertGreaterThan(one,two) {
    const result = one > two ? "V ✔️" : "X ❌";
    console.log(result);
    return result;
}

function assertGreaterThanOrEqual(one,two) {
    const result = one >= two ? "V ✔️" : "X ❌";
    console.log(result);
    return result;
}

function assertLessThan(one,two) {
    const result = one < two ? "V ✔️" : "X ❌";
    console.log(result);
    return result;
}

function assertLessThanOrEqual(one,two) {
    const result = one <= two ? "V ✔️" : "X ❌";
    console.log(result);
    return result;
}

function assertInstanceOf(classe,instance) {
    const result = instance instanceof clazz ? "V ✔️" : "X ❌";
    console.log(result);
    return result;
}

function assertIsArray(arr) {
    const result = Array.isArray(arr) ? "V ✔️" : "X ❌";
    console.log(result);
    return result;
}