/**
 * // Composant pour les formulaires

import { Component } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-form',
  template: `
    <form [formGroup]="form" (ngSubmit)="onSubmit()">
      <label for="name">Nom:</label>
      <input id="name" formControlName="name" />
      <button type="submit">Soumettre</button>
    </form>
  `
})
export class FormComponent {
  form: FormGroup;

  constructor(private fb: FormBuilder) {
    this.form = this.fb.group({
      name: ['']
    });
  }

  onSubmit() {
    console.log(this.form.value);
  }
}

 */