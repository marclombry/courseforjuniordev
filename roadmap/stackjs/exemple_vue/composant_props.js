/**
 * <!-- Composants et Props -->

<template>
  <div>
    <Greeting name="Alice" />
    <Greeting name="Bob" />
  </div>
</template>

<script>
// Composant fonctionnel avec props
const Greeting = {
    props: ['name'],
    template: '<h1>Bonjour, {{ name }}!</h1>'
};

// Composant principal
export default {
    components: {
        Greeting
    }
}
</script>

 */