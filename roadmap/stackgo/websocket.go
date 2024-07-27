/*
// Serveur WebSocket avec Gorilla WebSocket

package main

import (
	"log"
	"net/http"

	"github.com/gorilla/websocket"
)

var upgrader = websocket.Upgrader{
	CheckOrigin: func(r *http.Request) bool {
		return true
	},
}

func handler(w http.ResponseWriter, r *http.Request) {
	conn, err := upgrader.Upgrade(w, r, nil)
	if err != nil {
		log.Println(err)
		return
	}
	defer conn.Close()

	for {
		mt, message, err := conn.ReadMessage()
		if err != nil {
			log.Println(err)
			break
		}
		log.Printf("recv: %s", message)
		err = conn.WriteMessage(mt, message)
		if err != nil {
			log.Println(err)
			break
		}
	}
}

func main() {
	http.HandleFunc("/ws", handler)
	log.Fatal(http.ListenAndServe(":8080", nil))
}

*/