/*
// Création d'une API REST avec Gorilla Mux

package main

import (
	"encoding/json"
	"log"
	"net/http"

	"github.com/gorilla/mux"
)

type Article struct {
	ID      string `json:"id"`
	Title   string `json:"title"`
	Content string `json:"content"`
}

var articles []Article

func getArticles(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", "application/json")
	json.NewEncoder(w).Encode(articles)
}

func getArticle(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", "application/json")
	params := mux.Vars(r)
	for _, item := range articles {
		if item.ID == params["id"] {
			json.NewEncoder(w).Encode(item)
			return
		}
	}
	http.Error(w, "Article not found", http.StatusNotFound)
}

func createArticle(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", "application/json")
	var article Article
	_ = json.NewDecoder(r.Body).Decode(&article)
	article.ID = "3" // Just a placeholder ID for simplicity
	articles = append(articles, article)
	json.NewEncoder(w).Encode(article)
}

func updateArticle(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", "application/json")
	params := mux.Vars(r)
	for i, item := range articles {
		if item.ID == params["id"] {
			articles = append(articles[:i], articles[i+1:]...)
			var article Article
			_ = json.NewDecoder(r.Body).Decode(&article)
			article.ID = params["id"]
			articles = append(articles, article)
			json.NewEncoder(w).Encode(article)
			return
		}
	}
	http.Error(w, "Article not found", http.StatusNotFound)
}

func deleteArticle(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", "application/json")
	params := mux.Vars(r)
	for i, item := range articles {
		if item.ID == params["id"] {
			articles = append(articles[:i], articles[i+1:]...)
			break
		}
	}
	json.NewEncoder(w).Encode(articles)
}

func main() {
	r := mux.NewRouter()

	articles = append(articles, Article{ID: "1", Title: "Article One", Content: "Content of article one"})
	articles = append(articles, Article{ID: "2", Title: "Article Two", Content: "Content of article two"})

	r.HandleFunc("/api/articles", getArticles).Methods("GET")
	r.HandleFunc("/api/articles/{id}", getArticle).Methods("GET")
	r.HandleFunc("/api/articles", createArticle).Methods("POST")
	r.HandleFunc("/api/articles/{id}", updateArticle).Methods("PUT")
	r.HandleFunc("/api/articles/{id}", deleteArticle).Methods("DELETE")

	log.Fatal(http.ListenAndServe(":8000", r))
}

*/