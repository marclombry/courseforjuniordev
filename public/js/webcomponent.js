class MyMessage extends HTMLElement {
    constructor() {
        super();
        this.attachShadow({ mode: 'open' });

        const span = document.createElement('span');
        span.textContent = 'Hello, World!';
        this.shadowRoot.appendChild(span);
    }
}
customElements.define('my-message', MyMessage);
/*
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Component Example</title>
</head>
<body>
    <my-message></my-message>

    <script src="my-message.js"></script> <!-- Assurez-vous que le script est correctement inclus -->
</body>
</html>
*/