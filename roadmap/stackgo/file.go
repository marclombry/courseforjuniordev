/*
// Gestion des fichiers

package main

import (
	"fmt"
	"io/ioutil"
	"log"
	"os"
)

func main() {
	// Créer un fichier
	file, err := os.Create("test.txt")
	if err != nil {
		log.Fatal(err)
	}
	defer file.Close()

	// Écrire dans un fichier
	_, err = file.WriteString("Bonjour, monde!")
	if err != nil {
		log.Fatal(err)
	}

	// Lire un fichier
	data, err := ioutil.ReadFile("test.txt")
	if err != nil {
		log.Fatal(err)
	}
	fmt.Println("Contenu du fichier:", string(data))

	// Supprimer un fichier
	err = os.Remove("test.txt")
	if err != nil {
		log.Fatal(err)
	}
	fmt.Println("Fichier supprimé")
}

*/