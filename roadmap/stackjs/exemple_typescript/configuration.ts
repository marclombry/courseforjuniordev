// Installation et Configuration

// Exemple de configuration TypeScript
// tsconfig.json
// {
//   "compilerOptions": {
//     "target": "es6",
//     "module": "commonjs",
//     "strict": true,
//     "esModuleInterop": true
//   },
//   "include": ["src/**/*"],
//   "exclude": ["node_modules"]
// }

// Code d'exemple
function greet(name: string): string {
    return `Bonjour, ${name}!`;
}

console.log(greet('Alice'));
