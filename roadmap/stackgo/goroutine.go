/*
// Utilisation des goroutines

package main

import (
	"fmt"
	"time"
)

func main() {
	go sayHello()
	fmt.Println("Bonjour du goroutine principale")
	time.Sleep(1 * time.Second) // Attendre pour permettre à la goroutine de finir
}

func sayHello() {
	fmt.Println("Bonjour de la goroutine")
}

*/