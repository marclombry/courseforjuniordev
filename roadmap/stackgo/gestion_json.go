/*
// Gestion des JSON

package main

import (
	"encoding/json"
	"fmt"
	"log"
)

type Person struct {
	Name string `json:"name"`
	Age  int    `json:"age"`
}

func main() {
	p := Person{Name: "Alice", Age: 30}
	data, err := json.Marshal(p)
	if err != nil {
		log.Fatal(err)
	}
	fmt.Println(string(data))
}

*/