
let t = [1, 5, -64, 43, 53, -83 -2, 542];

let szurt = t.filter(elem => {

    return elem > 10;

});

console.log(szurt);

let duplazott = t.map(elem => elem * 2);

console.log(duplazott);

t.sort((a, b) => b - a);

console.log(t);