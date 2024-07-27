/*
// Utilisation de la librairie "github.com/sirupsen/logrus"

package main

import (
	"github.com/sirupsen/logrus"
)

func main() {
	logrus.SetFormatter(&logrus.JSONFormatter{})

	logrus.WithFields(logrus.Fields{
		"event": "event_name",
		"topic": "topic_name",
	}).Info("Un événement a eu lieu")
}

*/