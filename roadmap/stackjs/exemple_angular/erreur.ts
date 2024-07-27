/**
 * // Gestion des Erreurs

import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { catchError, Observable, throwError } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ErrorHandlerService {
  constructor(private http: HttpClient) {}

  getData(): Observable<any> {
    return this.http.get('https://api.example.com/data').pipe(
      catchError(this.handleError)
    );
  }

  private handleError(error: HttpErrorResponse) {
    console.error('Une erreur est survenue:', error.message);
    return throwError(() => new Error('Erreur réseau'));
  }
}

 */