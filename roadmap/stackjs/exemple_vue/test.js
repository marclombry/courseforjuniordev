/**
 * // Tests avec Vue Test Utils

import { mount } from '@vue/test-utils';
import { describe, it, expect, vi } from 'vitest';

// Composant à tester
const Button = {
    template: '<button @click="handleClick">Cliquez-moi</button>',
    methods: {
        handleClick() {
            this.$emit('click');
        }
    }
};

// Test du composant Button
describe('Button', () => {
    it('emits a click event when clicked', () => {
        const wrapper = mount(Button);
        wrapper.find('button').trigger('click');
        expect(wrapper.emitted().click).toBeTruthy();
    });
});

 */