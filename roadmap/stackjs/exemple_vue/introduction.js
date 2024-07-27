/*
<!-- Introduction à Vue.js -->

<!DOCTYPE html>
<html>
<head>
    <title>Introduction à Vue.js</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@3"></script>
</head>
<body>
    <div id="app">
        <h1>{{ message }}</h1>
    </div>

    <script>
        // Création de l'instance Vue
        const app = Vue.createApp({
            data() {
                return {
                    message: 'Bonjour, Vue.js!'
                }
            }
        });

        // Mounting de l'application Vue
        app.mount('#app');
    </script>
</body>
</html>
*/