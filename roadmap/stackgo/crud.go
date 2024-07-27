/*
// Exemple de CRUD avec une base de données SQLite

package main

import (
	"database/sql"
	"fmt"
	"log"
	"net/http"

	"github.com/gorilla/mux"
	_ "github.com/mattn/go-sqlite3"
)

type User struct {
	ID   int    `json:"id"`
	Name string `json:"name"`
}

var db *sql.DB
var err error

func init() {
	db, err = sql.Open("sqlite3", "./users.db")
	if err != nil {
		log.Fatal(err)
	}
	sqlStmt := `
	CREATE TABLE IF NOT EXISTS user (id INTEGER NOT NULL PRIMARY KEY, name TEXT);
	`
	_, err = db.Exec(sqlStmt)
	if err != nil {
		log.Fatalf("%q: %s\n", err, sqlStmt)
	}
}

func createUser(w http.ResponseWriter, r *http.Request) {
	name := r.FormValue("name")
	_, err = db.Exec("INSERT INTO user(name) VALUES(?)", name)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}
	fmt.Fprintf(w, "User %s created successfully", name)
}

func readUsers(w http.ResponseWriter, r *http.Request) {
	rows, err := db.Query("SELECT id, name FROM user")
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}
	defer rows.Close()
	for rows.Next() {
		var id int
		var name string
		rows.Scan(&id, &name)
		fmt.Fprintf(w, "ID: %d, Name: %s\n", id, name)
	}
}

func updateUser(w http.ResponseWriter, r *http.Request) {
	id := mux.Vars(r)["id"]
	name := r.FormValue("name")
	_, err = db.Exec("UPDATE user SET name=? WHERE id=?", name, id)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}
	fmt.Fprintf(w, "User %s updated successfully", name)
}

func deleteUser(w http.ResponseWriter, r *http.Request) {
	id := mux.Vars(r)["id"]
	_, err = db.Exec("DELETE FROM user WHERE id=?", id)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}
	fmt.Fprintf(w, "User %s deleted successfully", id)
}

func main() {
	r := mux.NewRouter()
	r.HandleFunc("/users", createUser).Methods("POST")
	r.HandleFunc("/users", readUsers).Methods("GET")
	r.HandleFunc("/users/{id}", updateUser).Methods("PUT")
	r.HandleFunc("/users/{id}", deleteUser).Methods("DELETE")
	http.Handle("/", r)
	log.Fatal(http.ListenAndServe(":8080", nil))
}
*/
