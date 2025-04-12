package main

import "fmt"

func main() {
	a := []int{2, 5, 10, 12, 45, 50}
	b := a[:]
	c := a[3:]
	d := a[:6]
	fmt.Printf("a %v, %v ,%v\n", a, len(a), cap(a))
	fmt.Printf("b %v, %v ,%v\n", a, len(b), cap(b))
	fmt.Printf("c %v, %v ,%v\n", a, len(c), cap(c))
	fmt.Printf("d %v, %v ,%v\n", a, len(d), cap(d))
}
