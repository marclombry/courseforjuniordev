/*
// Consommation d'une API REST avec le package net/http

package main

import (
	"bytes"
	"encoding/json"
	"fmt"
	"io/ioutil"
	"log"
	"net/http"
)

type Article struct {
	ID      string `json:"id"`
	Title   string `json:"title"`
	Content string `json:"content"`
}

func getArticles() {
	resp, err := http.Get("http://localhost:8000/api/articles")
	if err != nil {
		log.Fatalf("Erreur lors de la récupération des articles: %v", err)
	}
	defer resp.Body.Close()

	body, _ := ioutil.ReadAll(resp.Body)
	fmt.Println("Articles:", string(body))
}

func getArticle(id string) {
	resp, err := http.Get("http://localhost:8000/api/articles/" + id)
	if err != nil {
		log.Fatalf("Erreur lors de la récupération de l'article: %v", err)
	}
	defer resp.Body.Close()

	body, _ := ioutil.ReadAll(resp.Body)
	fmt.Println("Article:", string(body))
}

func createArticle(article Article) {
	jsonArticle, _ := json.Marshal(article)
	resp, err := http.Post("http://localhost:8000/api/articles", "application/json", bytes.NewBuffer(jsonArticle))
	if err != nil {
		log.Fatalf("Erreur lors de la création de l'article: %v", err)
	}
	defer resp.Body.Close()

	body, _ := ioutil.ReadAll(resp.Body)
	fmt.Println("Article créé:", string(body))
}

func updateArticle(id string, article Article) {
	client := &http.Client{}
	jsonArticle, _ := json.Marshal(article)
	req, err := http.NewRequest("PUT", "http://localhost:8000/api/articles/"+id, bytes.NewBuffer(jsonArticle))
	if err != nil {
		log.Fatalf("Erreur lors de la mise à jour de l'article: %v", err)
	}
	req.Header.Set("Content-Type", "application/json")

	resp, err := client.Do(req)
	if err != nil {
		log.Fatalf("Erreur lors de la mise à jour de l'article: %v", err)
	}
	defer resp.Body.Close()

	body, _ := ioutil.ReadAll(resp.Body)
	fmt.Println("Article mis à jour:", string(body))
}

func deleteArticle(id string) {
	client := &http.Client{}
	req, err := http.NewRequest("DELETE", "http://localhost:8000/api/articles/"+id, nil)
	if err != nil {
		log.Fatalf("Erreur lors de la suppression de l'article: %v", err)
	}

	resp, err := client.Do(req)
	if err != nil {
		log.Fatalf("Erreur lors de la suppression de l'article: %v", err)
	}
	defer resp.Body.Close()

	body, _ := ioutil.ReadAll(resp.Body)
	fmt.Println("Article supprimé:", string(body))
}

func main() {
	getArticles()
	getArticle("1")
	newArticle := Article{Title: "Article Three", Content: "Content of article three"}
	createArticle(newArticle)
	updatedArticle := Article{Title: "Updated Article", Content: "Updated content"}
	updateArticle("1", updatedArticle)
	deleteArticle("2")
}
*/