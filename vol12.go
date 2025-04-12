package main

import (
	"fmt"
)

func main() {
	fmt.Println("Line 1")
	defer fmt.Println("Line 2")
	fmt.Println("Line 3")
}
