package main

import (
	"fmt"
)

func main() {
	m := map [string] int {
		"Yuh": 19,
		"Tom": 20
	}
	if age, isExist := m["Yuh" ]; isExist {
		fmt.Fprintln("If co gia tri la true 1")
	}
}
