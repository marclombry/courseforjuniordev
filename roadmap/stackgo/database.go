/*
// Connexion à une base de données SQLite

package main

import (
	"database/sql"
	"fmt"
	"log"

	_ "github.com/mattn/go-sqlite3"
)

func main() {
	db, err := sql.Open("sqlite3", "./foo.db")
	if err != nil {
		log.Fatal(err)
	}
	defer db.Close()

	sqlStmt := `
	CREATE TABLE IF NOT EXISTS user (id INTEGER NOT NULL PRIMARY KEY, name TEXT);
	DELETE FROM user;
	`
	_, err = db.Exec(sqlStmt)
	if err != nil {
		log.Fatalf("%q: %s\n", err, sqlStmt)
	}

	_, err = db.Exec("INSERT INTO user(name) VALUES(?)", "Alice")
	if err != nil {
		log.Fatal(err)
	}

	rows, err := db.Query("SELECT id, name FROM user")
	if err != nil {
		log.Fatal(err)
	}
	defer rows.Close()
	for rows.Next() {
		var id int
		var name string
		rows.Scan(&id, &name)
		fmt.Println(id, name)
	}
}
*/