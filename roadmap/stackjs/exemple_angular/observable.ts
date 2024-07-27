/**
 * // Service utilisant RxJS pour les observables

import { Injectable } from '@angular/core';
import { Observable, of } from 'rxjs';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class RxjsExampleService {
  getData(): Observable<string[]> {
    return of(['Angular', 'RxJS', 'Observables']).pipe(
      map(data => data.map(item => `Item: ${item}`))
    );
  }
}

 */